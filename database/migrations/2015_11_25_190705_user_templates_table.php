<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `user_templates` (
          `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
          `title` varchar(100),
          `description` text,
          `html_content` longtext NOT NULL,
          `header_content` longtext NOT NULL,
          `user_id` int(10) unsigned NOT NULL,
          `template_id` int(10) NOT NULL,
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
        DB::statement("DROP TABLE `user_templates`");
    }
}
