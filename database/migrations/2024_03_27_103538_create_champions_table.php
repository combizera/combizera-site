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
    Schema::create('champions', function (Blueprint $table) {
      $table->id();
      $table->string('champion_id')->unique();
      $table->string('champion_name')->nullable();
      $table->string('title')->nullable();
      $table->text('blurb')->nullable();
      // Adicione outros campos conforme necessário
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('champions');
  }
};
