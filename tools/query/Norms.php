<?php

namespace Tools\Query;

use App\Cycle;
use Carbon\Carbon;
use App\Goal;
use App\Task;

class Norms {
	public static function getCurrentGoal() {
    $anio = Carbon::now()->year;

    return Goal::where('anio', '=', "$anio")->get()->first();
	}
}