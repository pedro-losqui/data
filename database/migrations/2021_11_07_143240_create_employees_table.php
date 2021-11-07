<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('cnpjFilial');
            $table->string('cnpjPosto');
            $table->integer('codCargo')->unsigned();
            $table->integer('codEmpresa')->unsigned();
            $table->integer('codFilial')->unsigned();
            $table->integer('codLocal')->unsigned();
            $table->integer('codRateio')->unsigned();
            $table->string('cpfColaborador');
            $table->date('dataAdm')->nullable();
            $table->integer('empSoc')->unsigned();
            $table->string('masLocal');
            $table->date('nasColaborador');
            $table->string('nomCargo');
            $table->string('nomColaborador');
            $table->string('nomEmpresa');
            $table->string('nomFilial');
            $table->string('nomPosto');
            $table->string('nomRateio');
            $table->integer('numColab')->unsigned();
            $table->integer('retTipExa')->unsigned();
            $table->string('sexColaborador');
            $table->enum('status', ['1', '2'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
