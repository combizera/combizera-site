<?php

use App\Enums\SkillType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */

  //  Aqui eu crio colunas
  public function up(): void
  {
    Schema::create('skills', function (Blueprint $table) {
      $table->id();
      $table->string('text');
      $table->enum('type', array_column(SkillType::cases(), 'value'));
      $table->timestamps();
    });
  }

  /**
     Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('skills');
  }
};
