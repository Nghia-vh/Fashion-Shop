<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nha_sx', function (Blueprint $table) {
            $table->id();
            $table->string('ten', 50);
            $table->boolean('thu_tu')->default(0);
            $table->boolean('an_hien')->default(1);
            $table->timestamps();
        });

        Schema::create('tinh_chat', function (Blueprint $table) {
            $table->id();
            $table->string('ten', 50);
            $table->timestamps();
        });

        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('ten', 255);
            $table->unsignedBigInteger('id_nhasx'); // Sử dụng unsignedBigInteger để tạo khóa ngoại
            $table->integer('gia')->default(0);
            $table->integer('gia_km')->default(0);
            $table->string('hinh', 255)->nullable();
            $table->date('ngay')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('xem')->default(0);
            $table->boolean('hot')->default(0);
            $table->boolean('tinh_chat')->default(0);
            $table->boolean('an_hien')->default(1);
            $table->string('mau_sac', 50)->nullable();
            $table->string('can_nang', 50)->nullable();
            $table->timestamps();

            // Thiết lập ràng buộc khóa ngoại
            $table->foreign('id_nhasx')->references('id')->on('nha_sx')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_pham');
        Schema::dropIfExists('tinh_chat');
        Schema::dropIfExists('nha_sx');
    }
};
