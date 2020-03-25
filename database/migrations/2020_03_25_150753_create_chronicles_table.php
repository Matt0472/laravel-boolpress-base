<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChroniclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chronicles', function (Blueprint $table) {
            $table->id();
            $table->string('author', 25);
            $table->string('author_job', 100);
            $table->string('category', 30);
            $table->mediumText('title');
            $table->string('img');
            $table->longText('article');
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
        Schema::dropIfExists('chronicles');
    }
}
