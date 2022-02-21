<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;

class CreateEnquiries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('companies')->length(250);
            $table->string('name')->length(250);
            $table->biginteger('phone')->length(13);
            $table->string('email')->length(250);
            $table->string('projectType')->length(50);
            $table->string('projectSubType')->length(50);
            $table->string('isExclusive')->length(50);
            $table->string('cid')->length(10);
            $table->string('rkey')->length(10);
            $table->boolean('status')->length(2);
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
        Schema::dropIfExists('enquiries');
    }
}
