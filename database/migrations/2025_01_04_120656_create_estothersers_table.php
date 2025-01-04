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
        Schema::create('estothersers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('est_record_id')->constrained('est_records')->onDelete('cascade');
            $table->string('musicbands');
            $table->string('musicbands_contract');
            $table->string('dj');
            $table->string('dj_contract');
            $table->string('photography');
            $table->string('photography_contract');
            $table->string('casualworker');
            $table->string('casualworker_contract');
            $table->string('fisherman');
            $table->string('fisherman_contract');
            $table->string('farmers');
            $table->string('farmers_contract');
            $table->string('localfood');
            $table->string('localfood_contract');
            $table->string('otherservices');
            $table->string('otherservices_contract');
            $table->string('doctor_inhouse');
            $table->string('nearest_healthfacility');
            $table->string('onestaff_accomodation');
            $table->string('onestaff_accomodation_island');
            $table->string('onestaff_accomodation_local');
            $table->string('onestaff_accomodation_foreign');
            $table->string('twostaff_accomodation');
            $table->string('twostaff_accomodation_island');
            $table->string('twostaff_accomodation_local');
            $table->string('twostaff_accomodation_foreign');
            $table->string('three_accomodation');
            $table->string('three_accomodation_island');
            $table->string('three_accomodation_local');
            $table->string('three_accomodation_foreign');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estothersers');
    }
};