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
        Schema::create('datadiri', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('asal');
            $table->date('tanggalLahir');
            $table->timestamps();
        });
        // $currentTableName = 'datadiri';
        // $newTableName = 'datadiris';
        // Schema::rename($currentTableName, $newTableName);

        // Schema::table('datadiri', function($table)
        // {
        //     $table->dropColumn('created_at');
        //     $table->dropColumn('updated_at');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datadiri');

    }
};
