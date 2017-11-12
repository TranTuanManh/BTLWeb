<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status')->nullable();
            $table->string('priority')->nullable();
            $table->string('rating')->nullable();
            $table->string('reopened')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_attributes');
    }
}
