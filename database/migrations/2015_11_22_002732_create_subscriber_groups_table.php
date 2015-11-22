<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriberGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `subscriber_groups` (
          `id` int(200) NOT NULL AUTO_INCREMENT,
          `group_id` int(200) NOT NULL,
          `subscriber_id` int(100) NOT NULL,
          `user_id` int(200) NOT NULL,
          `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
          `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
          PRIMARY KEY (`id`),
          KEY `subscriber_id` (`subscriber_id`),
          KEY `group_id` (`group_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP TABLE `subscriber_groups`");
    }
}
