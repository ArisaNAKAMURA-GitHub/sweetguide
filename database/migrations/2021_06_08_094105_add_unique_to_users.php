<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniqueToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // usersテーブルにdeleted_at(削除日時)とメールアドレスの複合unique制約を追加する
        // deleted_atに値が入っていたらメールアドレスが重複していても新しいアカウント設定ができる
        Schema::table('users', function (Blueprint $table) {
            $table->unique(['email', 'deleted_at'], 'users_email_deleted_at_unique');
            $table->unique(['username', 'deleted_at'], 'users_username_deleted_at_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_email_deleted_at_unique');
            $table->dropUnique('users_username_deleted_at_unique');
        });
    }
}
