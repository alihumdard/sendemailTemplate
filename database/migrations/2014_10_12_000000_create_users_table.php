<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('reply_email')->nullable();
            $table->string('cc_email')->nullable();
            $table->text('email_subject')->nullable();
            $table->longText('email_body')->nullable();
            $table->string('mail_username');
            $table->string('mail_host');
            $table->string('mail_password');
            $table->string('mail_port');
            $table->string('mail_encryption');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('User');
            $table->string('status')->default('Active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
