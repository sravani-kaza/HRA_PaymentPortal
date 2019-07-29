<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->increments('property_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name',256);
            $table->double('rent_deposit');
            $table->double('rent_amount');
            $table->double('rent_maintenance');
            $table->integer('rent_due_date');
            $table->integer('maintenance_due_date');
            $table->date('staying_since');
            $table->string('paid_secuirty_deposit',256)->nullable();
            $table->string('property_image',256)->nullable();
            $table->string('door_number',256);
            $table->string('society',256);
            $table->string('area',256);
            $table->string('city',256);
            $table->string('state',128);
            $table->string('pin',6);
            $table->string('plus_code',10)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamp('created_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_time')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('property');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
