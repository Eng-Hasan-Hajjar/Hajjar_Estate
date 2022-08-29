<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('es', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('es_name',200);
            $table->string('es_price',20);
            $table->tinyInteger('es_rent');
            $table->string('es_sequar',10);
            $table->tinyInteger('es_type');
            $table->string('es_small_dis',160);
            $table->string('es_meta');
            $table->string('es_langtuide',50);
            $table->string('es_latitude',50);
            $table->text('es_larg_dis');
            $table->tinyInteger('es_status');
            $table->integer('es_rooms')->default(0);
            $table->string('es_place',200)->default(0);
            $table->string('es_image',300)->default(0);

            $table->date('month')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->year('year')->default(2022);

            $table->timestamps();
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('es');
    }
}
