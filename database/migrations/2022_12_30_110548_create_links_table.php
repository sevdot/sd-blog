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
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('名称');
            $table->string('logo')->comment('logo');
            $table->string('url')->comment('链接地址');
            $table->string('describe')->comment('描述');
            $table->unsignedTinyInteger('status',3)->default(0)->comment('状态（0：待审核，1：审核通，2：审核失败）');
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
        Schema::dropIfExists('links');
    }
};
