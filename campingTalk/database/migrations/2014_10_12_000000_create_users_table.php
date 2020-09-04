<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_cd')->comment('유저코드');
            $table->string('user_id')->comment('아이디');
            $table->string('user_pw')->comment('비밀번호');
            $table->enum('user_level', ['client', 'admin'])->comment('회원등급');
            $table->dateTime('created_at')->comment('가입일');
            $table->dateTime('updated_at')->comment('수정일');
            $table->enum('use_yn', ['Y', 'N'])->comment('사용유무');

            $table->unique('user_id');
            $table->index(['created_at','updated_at','use_yn']);
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
}
