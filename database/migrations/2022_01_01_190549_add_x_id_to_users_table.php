<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddXIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('twitter_id')->nullable();
            $table->string('linkedin_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('github_id')->nullable();
            $table->string('gitlab_id')->nullable();
            $table->string('bitbucket_id')->nullable();
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
            //
            $table->dropColumn('twitter_id');
            $table->dropColumn('linkedin_id');
            $table->dropColumn('google_id');
            $table->dropColumn('github_id');
            $table->dropColumn('gitlab_id');
            $table->dropColumn('bitbucket_id');
        });
    }
}