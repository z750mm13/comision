<?php

namespace Tools\Query;

use Carbon\Carbon;
use App\Validity;
use App\Target;
use App\Review;

class Reviews {
    public static function getCurrentValidity() {
        $fecha = Carbon::now()->toDateString();

        return Validity::where([
            ['inicio', '<=', "$fecha"],
            ['fin', '>=', "$fecha"],
        ])->orderBy('inicio', 'asc')->get()->first();
    }

    public static function getCurrentGuards() {
        return auth()->user()->element()->first()
            ->cordinates()->first()
            ->guards()->get();
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