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
        Schema::create('content', function (Blueprint $table) {
            $table->id();
            $table->string('title', 128);
            $table->longText('content');
            $table->string('slug', 150)->unique();
            $table->string('header', 128)->nullable();
            $table->integer('group_content_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('created_by')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('updated_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('deleted_by')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content');
    }
};
