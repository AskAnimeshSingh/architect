<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('connect_builder', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('builder_id');
            $table->text('message');
            $table->timestamps();

            // Foreign Key Constraint
            $table->foreign('builder_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('builder_messages');
    }
};

