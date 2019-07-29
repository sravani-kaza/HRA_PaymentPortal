<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandlordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlord', function (Blueprint $table) {
            $table->increments('landlord_id');
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('property_id')->on('property')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name',256);
            $table->string('account_holder_name',256);
            $table->string('bank_name',256); 
            $table->string('ifsc',32);
            $table->string('account_number',32);
            $table->string('maintainer_name',256);
            $table->string('maintainer_bank_name',256);
            $table->string('maintainer_ifsc',32);
            $table->string('maintainer_account_no',32);
            $table->string('landlord_city',256);
            $table->string('landlord_state',128);
            $table->string('pan_number',10);
            $table->string('pan_doc',256)->nullable();
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
        Schema::dropIfExists('landlord');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
