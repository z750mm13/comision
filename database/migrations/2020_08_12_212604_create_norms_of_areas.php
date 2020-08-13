<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormsOfAreas extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::statement(
            "CREATE VIEW norms_of_areas AS
            SELECT DISTINCT areas.id,
            areas.nombre,
            areas.area,
            areas.color,
            areas.deleted_at,
            areas.created_at,
            areas.updated_at,
            norms.id AS norm
           FROM areas
             LEFT JOIN subareas ON subareas.area_id = areas.id
             LEFT JOIN targets ON targets.subarea_id = subareas.id
             LEFT JOIN questionnaires ON questionnaires.id = targets.questionnaire_id
             LEFT JOIN requirements ON requirements.id = questionnaires.requirement_id
             LEFT JOIN norms ON norms.id = requirements.norm_id
          WHERE areas.deleted_at IS NULL;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::statement("DROP VIEW norms_of_areas");
    }
}
