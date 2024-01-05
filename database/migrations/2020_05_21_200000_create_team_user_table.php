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
        Schema::create('team_user', function (Blueprint $table) {
            $table->id('id_team_user');
            $table->unsignedBigInteger('id_teams')->index();
            $table->foreignId('user_id')->index()->constrained();
            $table->string('role')->nullable();
            $table->timestamps();
            
            $table->unique(['id_teams', 'user_id']);
        
            $table->foreign('id_teams')->references('id_teams')->on('teams')->cascadeOnDelete();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_user');
    }
};
