<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validity;
use App\Subarea;
use App\Commitment;
use App\Compliment;

use App\Review;
class ProblemController extends Controller {

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
        $problems = Review::whereNotIn('id',
            Review::select('reviews.id')
                ->join('commitments', 'reviews.id', '=', 'commitments.review_id')
                ->join('compliments', 'commitments.id', '=', 'compliments.commitment_id')
                ->get()
        )->where([
            ['reviews.valor', 'f']
        ])->get();
        //dd($problems);
        return view('problems.index', compact('problems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($validity_id = null, $subarea_id=null) {
        $validity = Validity::findOrFail($validity_id);
        $subarea = Subarea::findOrfail($subarea_id);

        $compliments = Compliment::select('reviews.*','commitments.id','compliments.id')
        ->rightJoin('commitments', 'commitments.id', '=', 'compliments.commitment_id')
        ->rightJoin('reviews', 'reviews.id', '=', 'commitments.review_id')
        ->join('validities', 'validities.id', '=', 'reviews.validity_id')
        ->join('targets', 'targets.id', '=', 'reviews.target_id')
        ->join('subareas', 'subareas.id', '=', 'targets.subarea_id')
        ->where([
            ['subareas.id', $subarea->id],
            ['validities.id', $validity->id],
            ['reviews.valor', 'f']
            ]);
        //dd($compliments);

        $commitments = Commitment::select('reviews.*','commitments.id','compliments.id')
        ->rightJoin('reviews', 'reviews.id', '=', 'commitments.review_id')
        ->join('validities', 'validities.id', '=', 'reviews.validity_id')
        ->join('targets', 'targets.id', '=', 'reviews.target_id')
        ->join('subareas', 'subareas.id', '=', 'targets.subarea_id')
        ->leftJoin('compliments', 'commitments.id', '=', 'compliments.commitment_id')
        ->union($compliments)
        ->where([
            ['subareas.id', $subarea->id],
            ['validities.id', $validity->id],
            ['reviews.valor', 'f']
            ]);
        //dd($commitments);

        $problems = Review::select('reviews.*','commitments.id as hascommitment','compliments.id as hascompliment')
        ->join('validities', 'validities.id', '=', 'reviews.validity_id')
        ->join('targets', 'targets.id', '=', 'reviews.target_id')
        ->join('subareas', 'subareas.id', '=', 'targets.subarea_id')
        ->leftJoin('commitments', 'reviews.id', '=', 'commitments.review_id')
        ->union($commitments)
        ->leftJoin('compliments', 'commitments.id', '=', 'compliments.commitment_id')
        ->union($compliments)
        ->where([
            ['subareas.id', $subarea->id],
            ['validities.id', $validity->id],
            ['reviews.valor', 'f']
            ])
        ->get();
        //dd($problems);

        return view('problems.show', compact('validity', 'subarea', 'problems'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
