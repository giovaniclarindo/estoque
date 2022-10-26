<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArquivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquivos', function (Blueprint $table) {
            
            $table->id();
            $table->integer('produto_id');
            $table->string('arquivo_name');
            $table->string('arquivo_original_name');
            $table->string('arquivo_original_extension');
            $table->string('arquivo_real_path');
            $table->string('arquivo_size');
            $table->string('arquivo_mimetype');
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
        Schema::dropIfExists('arquivos');
    }
}
