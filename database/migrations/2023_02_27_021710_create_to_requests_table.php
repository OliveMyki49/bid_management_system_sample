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
        Schema::create('to_requests', function (Blueprint $table) {
            $table->id();

            $table->integer("to_no")->nullable();
            $table->string("tin");
                $table->string("name");
                $table->string("position");
                $table->string("salary");
                $table->string("division");

            $table->date("departure_date");
            $table->date("arrival_date");

            $table->string("official_station");
            $table->string("destination");

            $table->string("purpose_of_travel");
            $table->double("per_diems", 10, 2);
            $table->string("to_type");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('to_requests');
    }
};
