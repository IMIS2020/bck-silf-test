<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicationMiscellaneousDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationMiscellaneousDetails', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('course')->nullable();
            $table->string('year')->nullable();
            $table->unsignedBigInteger('applicationId'); // FK applicationDetails
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
        Schema::dropIfExists('applicationMiscellaneousDetails');
    }
}
