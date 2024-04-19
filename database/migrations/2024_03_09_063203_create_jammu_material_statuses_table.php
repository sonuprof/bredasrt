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
        Schema::create('jammu_material_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('order_pump_capacity')->nullable();
            $table->string('head')->nullable();
            $table->string('actual_order')->nullable();
            $table->string('pump_available')->nullable();
            $table->string('pump_sent_site')->nullable();
            $table->string('pump_req')->nullable();
            $table->string('bos_available')->nullable();
            $table->string('bos_sent_site')->nullable();
            $table->string('bos_req')->nullable();
            $table->string('module_available')->nullable();
            $table->string('module_sent_site')->nullable();
            $table->string('module_req')->nullable();
            $table->string('structure_available')->nullable();
            $table->string('structure_sent_site')->nullable();
            $table->string('structure_req')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jammu_material_statuses');
    }
};
