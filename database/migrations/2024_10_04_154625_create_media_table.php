<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('media', function (Blueprint $table) {
        $table->id();
        $table->string('filename');
        $table->string('filepath');
        $table->string('filetype');
        $table->string('filesize');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('media');
}

};
