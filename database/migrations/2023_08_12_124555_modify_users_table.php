<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('name'); // حذف الحقل السابق "name"
        $table->string('first_name'); // إضافة الحقل الجديد "first_name"
        $table->string('last_name'); // إضافة الحقل الجديد "last_name"
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
