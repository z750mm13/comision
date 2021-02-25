<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commitment;
use App\User;
use App\Review;

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
        //TODO retirar deleted
        $commitments = null;
        if(auth()->user()->tipo == 'Integrante')
        $commitments = Commitment::orderBy('id', 'ASC')->get();
        else
        $commitments = auth()->user()->commitments;
        return view('commitments.index', compact('commitments'));
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
        $commitment = Commitment::create($request->all());
        return redirect()
                ->route('commitments.show', compact('commitment'))
                ->with('success','Agregado correctamente');
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
        $reviews = Review::orderBy('id', 'ASC')->get();
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
                ->with('success','Cambios aplicados');
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
        return redirect()->route('commitments.index');
    }

    /**
     * Display a listing of the deleted commitments.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleted() {
        $commitments = Commitment::onlyTrashed()->get();
        return view('commitments.deleted',compact('commitments'));
    }

    /**
     * Restore the deleted commitments
     *
     * @return \Illuminate\Http\Response
     */
    public function restore(Request $request) {
        $commitments = $request->input('commitments');
        if($commitments)
        foreach($commitments as $id)
        Commitment::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('commitments.index');
    }
}
