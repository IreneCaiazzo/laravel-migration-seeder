<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('azienda, 50');
            $table->string('stazione_partenza, 50');
            $table->string('stazione_arrivo, 50');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->char('codice_treno, 10');
            $table->tinyInteger('numero_carrozze');
            $table->string('puntuale')->default(true);
            $table->string('cancellato')->default(false);

            $table->$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
