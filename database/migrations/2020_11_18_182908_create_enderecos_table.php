<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
			$table->string('cep', 8);
			$table->char('uf', 2);
			$table->string('municipio');
			$table->string('logradouro');
			$table->string('bairro');
			$table->string('numero');
			$table->string('complemento');
			$table->foreignId('fkusers')->constrained('users');
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
        Schema::dropIfExists('enderecos');
    }
}
