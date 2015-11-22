<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewslettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `newsletters` (
          `id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
          `name` varchar(100) NOT NULL,
          `template_id` int(10) NOT NULL,
          `active` tinyint NOT NULL DEFAULT '1',
          `user_id` int(10) unsigned NOT NULL,
          `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
          `created_at` timestamp NOT NULL,
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
        DB::statement("DROP TABLE `newsletters`");
    }
}
