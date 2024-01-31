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
    Schema::create('depoimentos', function (Blueprint $table) {
      $table->id();
      $table->string('person_name', 255);
      $table->string('person_function', 255);
      $table->string('person_text', 455);
      $table->string('person_img', 255);
      $table->string('office_logo', 255);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('depoimentos');
  }
};
