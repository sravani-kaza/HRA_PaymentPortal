<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_documents', function (Blueprint $table) {
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('property_id')->on('property')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('landlord_id')->unsigned();
            $table->foreign('landlord_id')->references('landlord_id')->on('landlord')->onDelete('cascade')->onUpdate('cascade');
            $table->date('agreement_start');
            $table->date('agreement_end');
            $table->string('rent_agreement',256)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamp('created_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->primary(array('property_id','landlord_id'));
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
        Schema::dropIfExists('property_documents');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
