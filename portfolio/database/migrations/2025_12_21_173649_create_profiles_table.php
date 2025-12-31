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
        Schema::create('profiles', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('title')->nullable(); // Web Designer & Developer etc
        $table->text('about_text')->nullable();

        $table->string('profile_image')->nullable(); // sidebar image
        $table->string('about_image')->nullable();   // about section image
        $table->string('resume_url')->nullable();    // stored file path or external link

        // Contact
        $table->string('email')->nullable();
        $table->string('phone')->nullable();
        $table->string('address')->nullable();

        // Social
        $table->string('twitter')->nullable();
        $table->string('facebook')->nullable();
        $table->string('linkedin')->nullable();
        $table->string('instagram')->nullable();
        $table->string('youtube')->nullable();

        // Typed text line (comma separated or JSON)
        $table->text('typed_text')->nullable(); // e.g. "Web Designer, Web Developer,..."

        $table->boolean('is_active')->default(true);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
