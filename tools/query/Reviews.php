<?php

namespace Tools\Query;

use App\Cycle;
use Carbon\Carbon;
use App\Validity;
use App\Target;
use App\Review;
use App\Question;

class Reviews {
    public static function lastValidity() {
        return Validity::orderBy('inicio', 'desc')
        ->where('inicio','<=', now()->year. '-'. now()->month. '-'. now()->day )
        ->get()
        ->first();
    }

    public static function getMonthValidities() {
        $anio = now()->year;
        $mes = now()->month;
        $inicio = $anio. '-'. $mes. '-01';
        $fin = $anio. '-'. $mes. '-'. date('t', mktime(0, 0, 0, $mes, 1, $anio));

        return Validity::where([
            ['inicio', '<=', "$fin"],
            ['fin', '>=', "$inicio"]
        ])->orderBy('inicio', 'desc')->get();
    }

    public static function getCurrentCycle() {
        $fecha = Carbon::now()->toDateString();
        $cycle = Cycle::where([
            ['inicio', '<=', "$fecha"],
            ['fin', '>=', "$fecha"],
        ])->orderBy('inicio', 'desc')->get()->first();
        $cycle = ($cycle? $cycle->id: 0);
        return $cycle;
    }

    public static function getCurrentValidity() {
        $fecha = Carbon::now()->toDateString();

        return Validity::where([
            ['inicio', '<=', "$fecha"],
            ['fin', '>=', "$fecha"],
        ])->orderBy('inicio', 'desc')->get()->first();
    }

    public static function getCurrentGuards() {
        return auth()->user()->guards();
    }

    public static function resolvedQuestions($subarea, $validity) {
        return Review::select('reviews.*')
        ->join('validities', 'validities.id', '=', 'reviews.validity_id')
        ->join('targets', 'targets.id', '=', 'reviews.target_id')
        ->join('subareas', 'subareas.id', '=', 'targets.subarea_id')
        ->where([
            ['subareas.id', $subarea->id],
            ['validities.id', $validity->id]
            ])
        ->get();
    }

    public static function toResolvedQuestions($subarea) {
        return Question::select('questions.*')
        ->join('questionnaires', 'questionnaires.id', '=', 'questions.questionnaire_id')
        ->join('targets', 'targets.questionnaire_id', '=', 'questionnaires.id')
        ->join('subareas', 'subareas.id', '=', 'targets.subarea_id')
        ->where([
            ['subareas.id', $subarea->id]
            ])
        ->get()->count();
    }

    public static function resolvedQuestionsArea($area, $validity) {
        return Review::select('reviews.*')
        ->join('validities', 'validities.id', '=', 'reviews.validity_id')
        ->join('targets', 'targets.id', '=', 'reviews.target_id')
        ->join('subareas', 'subareas.id', '=', 'targets.subarea_id')
        ->join('areas', 'areas.id', '=', 'subareas.area_id')
        ->where([
            ['areas.id', $area->id],
            ['validities.id', $validity->id]
            ])
        ->get();
    }

    public static function toResolvedQuestionsArea($area) {
        return Question::select('questions.*')
        ->join('questionnaires', 'questionnaires.id', '=', 'questions.questionnaire_id')
        ->join('targets', 'targets.questionnaire_id', '=', 'questionnaires.id')
        ->join('subareas', 'subareas.id', '=', 'targets.subarea_id')
        ->join('areas', 'areas.id', '=', 'subareas.area_id')
        ->where([
            ['areas.id', $area->id]
            ])
        ->get()->count();
    }

    public static function toResolve() {
        return Target::select('targets.id')
        ->join('questionnaires', 'questionnaires.id', '=', 'targets.questionnaire_id')
        ->join('questions', 'questionnaires.id', '=', 'questions.questionnaire_id')
        ->get()->count();
    }

    public static function problems($subarea, $validity) {
        return Review::select('reviews.id')
        ->join('validities', 'validities.id', '=', 'reviews.validity_id')
        ->join('targets', 'targets.id', '=', 'reviews.target_id')
        ->join('subareas', 'subareas.id', '=', 'targets.subarea_id')
        ->where([
            ['subareas.id', $subarea->id],
            ['validities.id', $validity->id],
            ['reviews.valor', 'f']
            ])
        ->get()->count();
    }
}