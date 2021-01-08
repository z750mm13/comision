<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tools\Query\Reviews;

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
        $subareas = $request->user()->subareas;
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
}
