<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('transaction_id');
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('property_id')->on('property')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('landlord_id')->unsigned();
            $table->foreign('landlord_id')->references('landlord_id')->on('landlord')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tenant_name',256);
            $table->string('tenant_address',256);
            $table->string('tenant_phone',256);
            $table->string('landlord_name',256);
            $table->string('landlord_address',256);
            $table->string('acc_holder_name',256);
            $table->string('acc_number',256);
            $table->string('bank_name',256);
            $table->string('bank_ifsc',256);
            $table->string('mode_of_payment',256);
            $table->date('date');
            $table->string('rent_month',256);
            $table->double('rent_amount');
            $table->string('remarks',256)->nullable();
            $table->string('receipt',256)->nullable();
            $table->string('status',256)->nullable();
            $table->string('rent_receipt',256)->nullable();
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
        Schema::dropIfExists('transactions');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
