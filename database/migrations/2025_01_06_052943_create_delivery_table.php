<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('delivery', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_address');
            $table->string('Pickup_name');
            $table->string('Pickup_contact');
            $table->string('Pickup_email');
            $table->string('delivery_address');
            $table->string('delivery_name');
            $table->string('delivery_contact');
            $table->string('delivery_email');
            $table->enum('Type_of_good', ['document', 'parcel']);
            $table->enum('status', ['pending', 'shipped'])->default('pending');
            $table->enum('delivery_provider', ['dhl', 'startrack', 'zoom2u', 'tge']);
            $table->enum('priority', ['standard', 'express', 'immediate']);
            $table->date('pickup_date');
            $table->time('Pickup_time');
            $table->string('package_description');
            $table->string('length');
            $table->string('height');
            $table->string('width');
            $table->string('weight');
            $table->string('extraone')->nullable();
            $table->string('extratwo')->nullable();
            



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery');
    }
};
