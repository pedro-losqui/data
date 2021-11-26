<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiskinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riskinesses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id')->unsigned()->nullable();
            $table->string('physicist', 100);
            $table->string('chemical', 100);
            $table->string('biological', 100);
            $table->string('ergonomic', 100);
            $table->string('accident', 100);
            $table->timestamps();

            $table->foreign('employee_id')->references('id')
            ->on('employees')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riskinesses');
    }
}
