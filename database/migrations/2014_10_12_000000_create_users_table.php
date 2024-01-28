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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('type');
            $table->integer('phone');
            $table->string('company_name');
            $table->string('tax_nr');
            $table->string('registration_nr');
            $table->string('currency');
            $table->string('timezone');
            $table->tinyInteger('is_active');
            $table->decimal('Itv');
            $table->tinyInteger('newsletter');
            $table->dateTime('last_purchased_at');
            $table->dateTime('last_login_at');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
