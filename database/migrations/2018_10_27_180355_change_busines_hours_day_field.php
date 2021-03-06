<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeBusinesHoursDayField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_hours', function (Blueprint $table) {
            if (Schema::hasColumn('business_hours', 'day_of_week')) {
                $table->smallInteger('day_of_week')->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_hours', function (Blueprint $table) {
            if (Schema::hasColumn('business_hours', 'day_of_week')) {
                $table->string('day_of_week')->change();
            }
        });
    }
}
