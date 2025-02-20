<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->enum('project_type', ['residential', 'commercial', 'industrial']);
            $table->text('description')->nullable();
            $table->date('start_date');
            $table->integer('duration')->comment('Duration in days');
            $table->date('end_date')->nullable();
            $table->decimal('estimated_cost', 10, 2)->nullable();
            $table->enum('payment_terms', ['full_advance', 'milestone_based', 'monthly'])->nullable();
            $table->unsignedBigInteger('architect_id')->nullable();
            $table->unsignedBigInteger('builder_id')->nullable();
            $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('architect_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('builder_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};

