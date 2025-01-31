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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->enum('status', ['question', 'reponse']);
            $table->unsignedBigInteger('formation_id');
            $table->unsignedBigInteger('chapitre_id')->nullable();
            $table->timestamps();


            $table->foreign('formation_id')
            ->references('id')
            ->on('formations')
            ->onDelete('cascade');

            $table->foreign('chapitre_id')
                ->references('id')
                ->on('chapitres')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
};
