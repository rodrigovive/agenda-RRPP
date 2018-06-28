<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('detail');
            $table->date('date');
            $table->string('hour');
            $table->string('place');
            $table->string('name');
            $table->string('image');
            $table->string('attendees');
            $table->integer('category_id')->unsigned()->index()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('state_id')->unsigned()->index()->nullable();
            $table->foreign('state_id')->references('id')->on('activity_states');
            $table->string('hosted');
            $table->string('hosted_phone');
            $table->integer('recorder_id')->unsigned()->index()->nullable();
            $table->foreign('recorder_id')->references('id')->on('users');
            $table->integer('organization_id')->unsigned()->index()->nullable();
            $table->foreign('organization_id')->references('id')->on('organizations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
