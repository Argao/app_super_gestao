<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUnidadesMudarDescricao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unidades',function (Blueprint $table){
            $table->string('descricao',30);
        });

        DB::statement('UPDATE unidades SET descrição = descricao');

        Schema::table('unidades',function (Blueprint $table){
            $table->dropColumn('descrição');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unidades',function (Blueprint $table){
            $table->string('descrição',30);
        });

        DB::statement('UPDATE unidades SET descricao = descrição');

        Schema::table('unidades',function (Blueprint $table){
            $table->dropColumn('descricao');
        });
    }
}
