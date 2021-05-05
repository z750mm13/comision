<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tools\Query\Reviews;
use Tools\Img\ToServer;
use App\Target;
use App\Review;
use App\Subarea;

class ApiMovileResourceController extends Controller {
    /**
     * Return Areas, Subareas, targets, Questionnaires, Questions, Validities
     *
     * @return \Illuminate\Http\Response
     */
    public function resources(Request $request) {
        //Validity
        $validity = Reviews::getCurrentValidity();
        //Areas
        $areas = $request->user()->areas;
        //Subareas
        $subareas = $request->user()->subareas()->select(DB::raw('subareas.*, (case when count(reviews.id) = 0 then 0 else 2 end) estado, count(targets.id) as cuestionarios'))
        ->leftJoin('targets', 'targets.subarea_id', '=', 'subareas.id')
        ->leftJoin('reviews', function ($join) use($validity) {
            $join->on('reviews.target_id', 'targets.id')
            ->where('reviews.validity_id', $validity?$validity->id:0);
        })
        ->leftJoin('validities', 'validities.id', 'reviews.validity_id')
        ->groupBy('subareas.id','laravel_through_key')
        ->get();
        //Targets
        $targets = $request->user()->targets;
        //Questionnaires
        $questionnaires = $request->user()->questionnaires()->distinct()->get();
        //Questions
        $questions = $request->user()->questions()->distinct()->get();
        return response()->json([
            'areas' => $areas,
            'subareas' => $subareas,
            'targets' => $targets,
            'questionnaires' => $questionnaires,
            'questions' => $questions,
            'validity' => $validity
        ]);
    }
    public function uploadReviews(Request $request) {
        $reviews = $request->all();
        $reviews = $reviews['_array'];
        $validity = Reviews::getCurrentValidity();
        if(!$validity)
            return response()->json([
                'code'=>404,
                'message'=>"No existe evaluación activa",
                'duplicados'=>0,
                'agregadas'=>[]
            ]);
        if(!$this->suyas($reviews, $request->user()))
            return response()->json([
                'code'=>404,
                'message'=>"No tienes autorización para ingresar."
            ])
        ;
        
        $targets = array_column(Target::select('targets.id')->distinct()
        ->join('reviews', 'reviews.target_id','=', 'targets.id')
        ->where('validity_id',$validity?$validity->id:0)->get()->toArray(),'id');

        $targets_repetidas = [];
        $realizadas = [];
        foreach ($reviews as $review) {
            if (in_array($review['target_id'], $targets)) array_push($targets_repetidas, $review['target_id']);
            else {
                if(!$review['evidencia']) $evidencia = [];
                else
                $evidencia = ['evidencia'=>ToServer::put($review['evidencia'],'jpg', 'img/docs')];
                array_push($realizadas, $review['target_id']);
                Review::create($evidencia+[
                    'valor' => $review['valor'],
                    'descripcion' => $review['descripcion'],
                    'validity_id' => $validity->id,
                    'question_id' => $review['question_id'],
                    'target_id' => $review['target_id']
                ]);
            }
        }
        
        $subareas = Subarea::select('subareas.id', 'subareas.area_id')
        ->join('targets', 'targets.subarea_id', 'subareas.id')
        ->whereIn('targets.id',$realizadas)->get();

        return response()->json([
            'code'=>200,
            'message'=>"Datos almacenados correctamente (".$subareas->count().").",
            'duplicados'=>array_unique($targets_repetidas),
            'agregadas'=>$subareas
        ]);
    }

    private function suyas($reviews, $user) {
        $targets_id = [];

        foreach ($reviews as $review) array_push($targets_id, $review['target_id']);
        $targets_id = array_unique($targets_id);
        
        $subareas = $user->subareas()
        ->whereIn('subareas.id',
            Target::select('subareas.id')
            ->join('subareas', 'subareas.id', '=', 'targets.subarea_id')
            ->whereIn('targets.id', $targets_id)->get()
        )->get();

        return sizeof($targets_id)==$subareas->count();
    }
}
