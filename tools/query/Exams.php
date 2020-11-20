<?php

namespace Tools\Query;

use App\Cycle;
use Carbon\Carbon;
use App\Evaluation;
use App\Target;
use App\Review;
use App\Exam;
use App\Danger;

class Exams {
	public static function getCurrentEvaluation() {
        $fecha = Carbon::now()->toDateString();

        return Evaluation::where([
            ['inicio', '<=', "$fecha"],
            ['fin', '>=', "$fecha"],
        ])->orderBy('inicio', 'desc')->get()->first();
	}
	
	public static function getCurrentGuards() {
        return auth()->user()->guards();
	}
	
	public static function resolvedQuestionsArea($area, $evaluation) {
        return Exam::select('exams.*')
        ->join('evaluations', 'evaluations.id', '=', 'exams.evaluation_id')
        ->join('arrays', 'arrays.id', '=', 'exams.array_id')
        ->join('subareas', 'subareas.id', '=', 'arrays.subarea_id')
        ->join('areas', 'areas.id', '=', 'subareas.area_id')
        ->where([
            ['areas.id', $area->id],
            ['evaluations.id', $evaluation->id]
            ])
        ->get();
	}
	
	public static function toResolvedQuestionsArea($area) {
        return Danger::select('dangers.*')
        ->join('activities', 'activities.id', '=', 'dangers.activity_id')
        ->join('arrays', 'arrays.activity_id', '=', 'activities.id')
        ->join('subareas', 'subareas.id', '=', 'arrays.subarea_id')
        ->join('areas', 'areas.id', '=', 'subareas.area_id')
        ->where([
            ['areas.id', $area->id]
            ])
        ->get()->count();
    }

    public static function resolvedQuestions($subarea, $evaluation) {
        return Exam::select('exams.*')
        ->join('evaluations', 'evaluations.id', '=', 'exams.evaluation_id')
        ->join('arrays', 'arrays.id', '=', 'exams.array_id')
        ->join('subareas', 'subareas.id', '=', 'arrays.subarea_id')
        ->where([
            ['subareas.id', $subarea->id],
            ['evaluations.id', $evaluation->id]
            ])
        ->get();
	}
	
    public static function toResolvedQuestions($subarea) {
        return Danger::select('dangers.*')
        ->join('activities', 'activities.id', '=', 'dangers.activity_id')
        ->join('arrays', 'arrays.activity_id', '=', 'activities.id')
        ->join('subareas', 'subareas.id', '=', 'arrays.subarea_id')
        ->where([
            ['subareas.id', $subarea->id]
            ])
        ->get()->count();
    }
}