<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Norm;
use App\Question;
use App\Questionnaire;

class QuestionnaireController extends Controller {

    function __construct() {
        $this->middleware('active');
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('check');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $questionnaires = Questionnaire::orderBy('id', 'ASC')->get();
        return view('questionnaires.index',compact('questionnaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($norm_id = null) {
        $norms = Norm::orderBy('codigo', 'ASC')->get();
        return view('questionnaires.create', compact('norms','norm_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $questionnaire = Questionnaire::create([
            'requirement_id' => 
                Norm::findOrFail($request->norm_id)->
                    requirements->first()->id,
            'tipo' =>  $request->tipo,
            'descripcion' => $request->descripcion
        ]);

        foreach ($request->input('preguntas', []) as $pregunta) {
            if($pregunta)
            Question::create([
                'encabezado' => $pregunta,
                'questionnaire_id'=> $questionnaire->id
            ]);
        }

        return redirect()
                ->route('questionnaires.show', compact('questionnaire'))
                ->with('success','Cuestionario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $questionnaire = Questionnaire::findOrFail($id);
        return view('questionnaires.show', compact('questionnaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $questionnaire = Questionnaire::findOrFail($id);
        $norms = Norm::orderBy('codigo', 'ASC')->get();
        return view('questionnaires.edit', compact('norms', 'questionnaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $questionnaire = Questionnaire::findOrfail($id);
        $preguntas_id = $request->questions_id;

        foreach ($request->preguntas as $i => $pregunta) {
            if ($pregunta) {
                $pregunta_id = $preguntas_id[$i];
                if ($pregunta_id){
                    Question::findOrfail($pregunta_id)->update([
                        'encabezado' => $pregunta
                    ]);
                } else {
                    Question::create([
                        'encabezado' => $pregunta,
                        'questionnaire_id'=> $questionnaire->id
                    ]);
                }
                
            }
        }
        $questionnaire->update($request->all());
        $questionnaire->requirement_id = Norm::findOrFail($request->norm_id)
        ->requirements->first()->id;
        $questionnaire->save();
        
        return redirect()
                ->route('questionnaires.show', compact('questionnaire'))
                ->with('success','Cuestionario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        $questionnaire = Questionnaire::findOrFail($id);
        //TODO Eliminar cuestionario si no tiene basura
        /**
         * Si se elimina el cuestionario
         */
        if($request->question_id == '') {
            $reviews = Questionnaire::select('questionnaires.id')
                ->join('questions', 'questionnaires.id', '=', 'questions.questionnaire_id')
                ->join('reviews', 'questions.id', '=', 'reviews.question_id')
                ->where('questionnaires.id','=',$id)
                ->count();
            if($reviews) {
                foreach($questionnaire->questions as $question){
                    $question->delete();
                }
                $questionnaire->delete();
            } else {
                foreach($questionnaire->questions as $question){
                    $question->forceDelete();
                }
                $questionnaire->forceDelete();
            }
            return redirect()->route('questionnaires.index');
        }

        /**
         * Si se elimina una pregunta
         * Restringimos que por cuestionario haya una pregunta
         */
        if($questionnaire->questions->count() <= 1){
            return redirect()->route('questionnaires.show', [$questionnaire->id]);
        }
        
        $question = Question::findOrFail($request->question_id);
        $questionnaire_id = $question->questionnaire_id;
        if($question->reviews()->count())
            $question->delete();
        else
            $question->forceDelete();
        return redirect()->route('questionnaires.show', [$questionnaire_id]);
    }
}