<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('types_of_reports', function (Blueprint $table) {
            $table->id();
            $table->string("report_type", 30);
            $table->text("type_description")->nullable();
        });

        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('doc_name');
            $table->foreignId('id_employee')->constrained('users')->onDelete('cascade');
            $table->foreignId('type')->nullable()->constrained("types_of_reports")->onDelete("set null");
            $table->string('document')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
        Schema::dropIfExists('types_of_reports');
    }
};
