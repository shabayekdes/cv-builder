<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiances', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company_name');
            $table->string('location');
            $table->integer('employment_type');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('is_current_position')->default(0);
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreignId('candidate_id')
                    ->constrained()
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
        Schema::dropIfExists('experiances');
    }
}
