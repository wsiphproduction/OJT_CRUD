<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * The database connection that should be used by the migration.
     *
    * @var string
    */
    protected $connection = 'mysql';
 
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('to_do_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('to_do_list');
    }
};
