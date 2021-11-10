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
            $table->string('datSol');
            $table->string('dataAdm')->nullable();
            $table->string('emaSolicitante')->nullable();
            $table->integer('empSoc')->unsigned();
            $table->text('exaSolicitado')->nullable();
            $table->string('fonSolicitante')->nullable();
            $table->string('masLocal');
            $table->string('nasColaborador');
            $table->string('nomCargo');
            $table->string('nomColaborador');
            $table->string('nomEmpresa');
            $table->string('nomFilial');
            $table->string('nomLaboratorio')->nullable();
            $table->string('nomPosto');
            $table->string('nomRateio')->nullable();
            $table->string('nomSolicitante')->nullable();
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
