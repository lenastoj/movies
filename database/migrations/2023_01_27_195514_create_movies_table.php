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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('genre');
            $table->string('director');
            $table->year('year');
            $table->longText('storyline');
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
        Schema::dropIfExists('movies');
    }
};

// DB::table('movies')->insert(['name'=>'Night Watch', 'genre'=>'fantasy-thriller', 'director'=>'Timur Bekmambetov', 'year'=>2004, 'storyline'=>'Among normal humans live the Others possessing various supernatural powers. They are divided up into the forces of light and the forces of the dark, who signed a truce several centuries ago to end a devastating battle. Ever since, the forces of light govern the day while the night belongs to their dark opponents. In modern day Moscow the dark Others actually roam the night as vampires while a Night Watch of light forces, among them Anton, the movies protagonist, try to control them and limit their outrage.']);