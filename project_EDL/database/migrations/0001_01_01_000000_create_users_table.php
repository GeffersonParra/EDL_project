<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string("role_name", 30);
            $table->text("role_description")->nullable();
            $table->timestamps();
        });

        Schema::create('statuses', function (Blueprint $table){
            $table->id();
            $table->string("status_name", 30);
            $table->timestamps();
        });

        Schema::create('occupations', function (Blueprint $table){
            $table->id();
            $table->string("occupation_name", 30);
            $table->text("occupation_description")->nullable();
            $table->timestamps();
        });

        Schema::create('types_of_id', function (Blueprint $table){
            $table->id();
            $table->string("id_type", 5);
            $table->text("id_description")->nullable();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 30);
            $table->string('second_name', 30)->nullable();
            $table->string('first_lastname', 30);
            $table->string('second_lastname', 30)->nullable();
            $table->string('photo')->default("photos/default.jpg");
            $table->foreignId('idtype')->nullable()->constrained('types_of_id')->onDelete('set null');
            $table->string('telephone')->unique();
            $table->string('address');
            $table->string('email')->unique();
            $table->foreignId('occupation')->nullable()->constrained("occupations")->onDelete('set null');
            $table->date('birth');
            $table->date('inday');
            $table->date('outday')->nullable()->default(NULL);
            $table->string('actualproject')->default('N/A');
            $table->foreignId('status')->nullable()->default(1)->constrained("statuses")->onDelete('set null');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('role_id')->nullable()->default(2)->constrained("roles")->onDelete('set null');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
        });
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('statuses');
        Schema::dropIfExists('occupations');
        Schema::dropIfExists('types_of_id');
    }
};
