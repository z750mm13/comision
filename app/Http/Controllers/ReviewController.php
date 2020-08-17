<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Subarea;
use App\Area;
use Tools\Img\ToServer;
use Tools\Query\Reviews;
use App\Validity;

class ReviewController extends Controller {

    function __construct() {
        $this->middleware('active');
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('activevalidity')->except(['index','show']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($area_id=null, $validity_id=null) {
        //TODO componer a consulta
        $areas = [];
        if(! $validity_id )
        $validity = Reviews::getCurrentValidity();
        else
        $validity = Validity::findOrFail($validity_id);
        $guards = Reviews::getCurrentGuards();

        $areas = auth()->user()->areas()
        ->get();

        if(!$area_id)
            return view('reviews.index', compact('areas', 'validity'));

        $subareas = auth()->user()->subareas()
        ->where('subareas.area_id','=',$area_id)
        ->get();
        
        $areas = null;
        $area = Area::findOrFail($area_id);
        return view('reviews.index', compact('subareas', 'areas', 'validity', 'area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id) {
        $subarea = auth()->user()->subareas()
        ->where('subareas.id','=',$id)
        ->get();

        if(!sizeof($subarea)) abort(404, "No tienes autorización para ingresar.");
        else $subarea = $subarea[0];

        $validity = Reviews::getCurrentValidity();
        return view('reviews.create', compact('subarea', 'validity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validity = Reviews::getCurrentValidity();
        $subarea = Subarea::findOrFail($request->sid);
        $data = [];
        $data['evidencia'] = null;

        $i = 0;
        foreach ($subarea->targets as $target)
        foreach ($target->questionnaire->questions as $question){
            if ($request->file('evidence'.$i) != null) {
                $data = ToServer::saveImageFile($request, 'evidencia', 'img/docs', $request->file('evidence'.$i));
            }
            if($data['evidencia'])
            Review::create([
                'valor' => $request->input('customRadioInline'.$question->id),
                'descripcion' => $request->input('description'.$i),
                'evidencia' => $data['evidencia'],
                'validity_id' => $validity->id,
                'question_id' => $question->id,
                'target_id' => $target->id
            ]);
            else 
            Review::create([
                'valor' => $request->input('customRadioInline'.$question->id),
                'descripcion' => $request->input('description'.$i),
                'validity_id' => $validity->id,
                'question_id' => $question->id,
                'target_id' => $target->id
            ]);
            $data['evidencia'] = null;
            $i++;
        }
        return redirect()
        ->route('reviews.index')
        ->with('success','Cuestionario salvado correctamente');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $review = Review::findOrFail($id);
        return view('reviews.show',compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $subarea = Subarea::findOrFail($id);
        $validity = Reviews::getCurrentValidity();
        $questions = Reviews::resolvedQuestions($subarea, $validity);
        return view('reviews.edit', compact('subarea', 'validity', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $data = [];
        $data['evidencia'] = null;
        $data['description'] = "";

        foreach($request->sids as $sid){
            $review = Review::findOrFail($sid);
            $data['evidencia'] = $review->evidencia;
            if ($request->file('evidence'.$sid) != null) {
                $data = ToServer::saveImageFile($request, 'evidencia', 'img/docs', $request->file('evidence'.$sid));
                if($review->evidencia != 'img/docs/no_file.png')
                ToServer::deleteFile('',$review->evidencia);
            }
            
            $review->update([
                'evidencia' => $data['evidencia'],
                'descripcion' => $request->input('description'.$sid),
                'valor' => $request->input('customRadioInline'.$sid)
            ]);
            $data['evidencia'] = null;
        }
        
        return redirect()
                ->route('reviews.index')
                ->with('success','Cambios aplicados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $subarea = Subarea::findOrFail($id);
        $questions = Reviews::resolvedQuestions($subarea, Reviews::getCurrentValidity());
        
        foreach($questions as $question) {
            if($question->commitments()->withTrashed()->get()->count()){
                $question->delete();
            } else {
                if($question->evidencia != 'img/docs/no_file.png')
                    ToServer::deleteFile('',$question->evidencia);
                $question->forceDelete();
            }
        }
        return redirect()
        ->route('reviews.index')
        ->with('success','Cuestionario eliminado');
    }
}
