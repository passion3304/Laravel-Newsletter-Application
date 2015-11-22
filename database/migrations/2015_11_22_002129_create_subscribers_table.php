<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `subscribers` (
          `id` int(50) NOT NULL,
          `name` varchar(100),
          `email` varchar(100) NOT NULL,
          `user_id` int(10) NOT NULL,
          `active` tinyint NOT NULL DEFAULT '1',
          `created_at` timestamp NOT NULL,
          `updated_at` timestamp NOT NULL
        );");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP TABLE `subscribers`");
    }
}
