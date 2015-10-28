<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupRolePermission extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_role_permission', function(Blueprint $table) {
        $table->increments('id');
        $table->integer('role_id');
        $table->integer('permissions_id');
        $table->softDeletes();
        $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema::drop('group_role_permission');
	}

}
