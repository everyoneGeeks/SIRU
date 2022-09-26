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
        Schema::create('articles', function (Blueprint $table) {
          $table->id();
          $table->json('title');
          $table->string('slug')->unique();
          $table->json('description');
          $table->foreignIdFor(\App\Models\Admin::class)->constrained()->cascadeOnDelete();
          $table->boolean('is_published');
          $table->foreignId('published_by_id')->nullable()->constrained('admins')->nullOnDelete();
          $table->dateTime('published_at')->nullable();
          $table->integer('viwes')->default(0);
          $table->timestamps();
          $table->softDeletes();
        });



        Schema::create('article_categories', function (Blueprint $table) {
          $table->foreignId('article_id')->constrained()->cascadeOnDelete();
          $table->foreignId('category_id')->constrained()->cascadeOnDelete();
          $table->primary(['article_id','category_id']);
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
        Schema::dropIfExists('articles');
    }
};
