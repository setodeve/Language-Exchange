<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('userName');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('birthday');
            $table->string('nativeLanguages');
            $table->string('knownLanguages');
            $table->string('targetLanguages');
            $table->string('currentMeetingList');
            $table->string('userImage');
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
            $table->dropColumn('userName');
            $table->dropColumn('firstName');
            $table->dropColumn('lastName');
            $table->dropColumn('gender');
            $table->dropColumn('birthday');
            $table->dropColumn('nativeLanguages');
            $table->dropColumn('knownLanguages');
            $table->dropColumn('targetLanguages');
            $table->dropColumn('currentMeetingList');
            $table->dropColumn('userImage');
        });
    }
}
