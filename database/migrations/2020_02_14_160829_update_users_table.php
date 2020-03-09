<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->dropColumn('name');
           $table->string('first_name', 255);
           $table->string('last_name', 255);
           $table->date('birthday');
           $table->unsignedSmallInteger('gender');
           $table->string('phone_number', 15);
           $table->string('address', 255);
           $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
           $table->string('name');
           $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('birthday');
            $table->dropColumn('gender');
            $table->dropColumn('phone_number');
            $table->dropColumn('address');
            $table->dropSoftDeletes();
        });
    }
}
