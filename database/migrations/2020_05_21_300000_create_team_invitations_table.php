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
        Schema::create('team_invitations', function (Blueprint $table) {
            $table->id('id_team_invitation');
            $table->unsignedBigInteger('id_teams');
            $table->string('email');
            $table->string('role')->nullable();
            $table->timestamps();
            $table->foreign('id_teams')->references('id_teams')->on('teams')->cascadeOnDelete();
            
            $table->unique(['id_teams', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_invitations');
    }
};
