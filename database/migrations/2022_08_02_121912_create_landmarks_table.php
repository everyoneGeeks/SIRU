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
        Schema::create('landmarks', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->string('slug');
            $table->string('type');
            $table->foreignIdFor(\App\Models\Admin::class)->constrained()->cascadeOnDelete();            $table->json('description');
            $table->double('langitude')->nullable();
            $table->double('latitude')->nullable();
            $table->double('area')->nullable();
            $table->date('register_year')->nullable();
            $table->date('discovery_date')->nullable();
            $table->boolean('is_published');
            $table->foreignId('published_by_id')->nullable()->constrained('admins')->nullOnDelete();
            $table->dateTime('published_at')->nullable();
            $table->integer('viwes')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('landmark_landmark', function (Blueprint $table) {

          $table->foreignId('landmark_id')->constrained()->cascadeOnDelete();
          $table->foreignId('landmark_to_id')->constrained('landmarks')->cascadeOnDelete();
          $table->primary(['landmark_id','landmark_to_id']);
        });

        Schema::create('category_landmark', function (Blueprint $table) {

          $table->foreignId('category_id')->constrained()->cascadeOnDelete();
          $table->foreignId('landmark_id')->constrained()->cascadeOnDelete();
          $table->primary(['landmark_id','category_id']);
        });

        Schema::create('article_landmark', function (Blueprint $table) {
          $table->foreignId('article_id')->constrained()->cascadeOnDelete();
          $table->foreignId('landmark_id')->constrained()->cascadeOnDelete();
          $table->primary(['article_id','landmark_id']);

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('landmark_landmark');
        Schema::dropIfExists('category_landmark');
        Schema::dropIfExists('article_landmark');
        Schema::dropIfExists('landmarks');
    }
};
