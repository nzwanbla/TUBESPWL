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
        Schema::table('berita', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('isi3'); // Add the user_id column
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade'); // Add the foreign key constraint
        });
    }
    
    public function down()
    {
        Schema::table('berita', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Drop the foreign key constraint first
            $table->dropColumn('user_id'); // Drop the column
        });
    }
};
