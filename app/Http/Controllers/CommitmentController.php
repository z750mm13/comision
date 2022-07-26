<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Area;
use Illuminate\Http\Request;
use App\Commitment;
use App\User;
use App\Review;
use App\Subarea;
use Illuminate\Support\Facades\Route;

class CommitmentController extends Controller {
    function __construct() {
        $this->middleware('active');
        $this->middleware('auth');
        $this->middleware('verified');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $areas = Area::all();
        $subareas_no_map = Subarea::where('id','>',118)->orderBy('id', 'ASC')->get();
        $subareas  = Subarea::select(DB::raw('count(reviews.id) as problems, subareas.*'))
        ->leftJoin('targets', 'targets.subarea_id', '=', 'subareas.id')
        ->leftJoin('questionnaires', 'questionnaires.id', '=', 'targets.questionnaire_id')
        ->leftJoin('questions', 'questions.questionnaire_id', '=', 'questionnaires.id')
        ->leftJoin('reviews', function ($join) {
            $join->on([
                ['questions.id', 'reviews.question_id'],
                ['targets.id', 'reviews.target_id']
            ])
            ->where([
                ['reviews.valor', false]
            ])
            ->whereNotIn('reviews.id',
            Review::select('reviews.id')
            ->join('commitments', 'reviews.id', '=', 'commitments.review_id')
            ->join('compliments', 'commitments.id', '=', 'compliments.commitment_id')
            ->get()
        );
        })
        ->groupBy('subareas.id')
        ->orderBy('subareas.id', 'ASC')->get();

        $ruta = null;
        if(isset(Route::current()->action['as']))
            $ruta = Route::current()->action['as'];
        $commitments = null;
        if(auth()->user()->tipo == 'Integrante')
        $commitments = Commitment::orderBy('id', 'ASC')->get();
        else
        $commitments = auth()->user()->commitments;
        return view('commitments.index', compact('commitments', 'ruta', 'areas', 'subareas','subareas_no_map'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null, $review_id=null) {
        $users = User::select('users.*')
        ->where([
            ['tipo','Apoyo'],
            ['active','true']
        ])
        ->get();
        $reviews = null;
        if(!$id) {
            $reviews = Review::whereNotIn('id',
                Review::select('reviews.id')
                    ->join('commitments', 'reviews.id', '=', 'commitments.review_id')
                    ->join('compliments', 'commitments.id', '=', 'compliments.commitment_id')
                    ->get()
            )->where('valor',0)->get();
            // Reviews que tengan compromisos y no se hayan cumplido
            // Reviews que no tengan compromisos
        }
        return view('commitments.create', compact('id', 'users', 'review_id','reviews'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if(auth()->user()->tipo == 'Apoyo') {
            if(auth()->user()->id != $request->input('user_id')) return redirect()
                ->route('commitments.index')
                ->with('error','No se pudo completar la solicitud, intentelo de nuevo.');
        }
        $commitment = Commitment::create($request->all());
        return redirect()
                ->route('commitments.show', compact('commitment'))
                ->with('success','Compromiso agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $commitment = Commitment::findOrFail($id);
        return view('commitments.show', compact('commitment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $users = User::select('users.*')
        ->where([
            ['tipo','Apoyo'],
            ['active','true']
        ])
        ->get();
        $reviews = Review::whereNotIn('id',
            Review::select('reviews.id')
                ->join('commitments', 'reviews.id', '=', 'commitments.review_id')
                ->join('compliments', 'commitments.id', '=', 'compliments.commitment_id')
                ->get()
        )->where('valor',0)->get();
        $commitment = Commitment::findOrFail($id);
        return view('commitments.edit', compact('commitment', 'users', 'reviews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        Commitment::findOrFail($id)->update($request->all());
        
        return redirect()
                ->route('commitments.index')
                ->with('success','Compromiso actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $commitment = Commitment::findOrFail($id);
        if($commitment->compliment()->withTrashed()->get()->count())
            $commitment->delete();
        else
            $commitment->forceDelete();
        return redirect()->route('commitments.index')
        ->with('success','Compromiso eliminado correctamente');
    }
}
