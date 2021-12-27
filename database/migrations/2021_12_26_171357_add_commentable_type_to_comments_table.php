<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommentableTypeToCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('comments', 'commentable_type')) {
            # code...
        } else {
            # code...
            Schema::table('comments', function (Blueprint $table) {
                //
                $table->string('commentable_type')->nullable()->after('commentable_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            //
            $table->dropIfExists('commentable_type');
        });
    }
}