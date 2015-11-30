<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QueuedMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `queued_messages` (
          `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
          `user_id` int(10) unsigned NOT NULL,
          `email` varchar(100) NOT NULL,
          `name` varchar(100)  NULL,
          `template` varchar(50) NOT NULL,
          `sent` tinyint NOT NULL DEFAULT '0',
          `created_at` timestamp NOT NULL,
          `updated_at` timestamp NOT NULL,
          FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
        );");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP TABLE `queued_messages`");
    }
}
