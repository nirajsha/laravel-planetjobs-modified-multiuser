<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->text('company');
            $table->string('title');
            $table->text('description');
            $table->string('skills');
            $table->string('image');
            $table->integer('opening_job')->nullable();
            $table->string('location');
            $table->string('time_available');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('career_level');
            $table->string('salary_from');
            $table->string('salary_to');
            $table->string('functional-area');
            $table->string('job_type');
            $table->string('job_shift');
            $table->string('gender');
            $table->string('job_expiry');
            $table->string('required_degree');
            $table->string('job_experience');
            $table->string('is_active');
            $table->string('is_featured');
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
        Schema::dropIfExists('jobs');
    }
}
