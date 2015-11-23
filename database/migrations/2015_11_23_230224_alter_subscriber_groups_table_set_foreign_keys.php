<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSubscriberGroupsTableSetForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement("ALTER TABLE `subscriber_groups`
        CHANGE `group_id` `group_id` int(11) NOT NULL,
        CHANGE `subscriber_id` `subscriber_id` int(50) NOT NULL,
        ADD FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
        ADD FOREIGN KEY (`subscriber_id`) REFERENCES `subscribers` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
