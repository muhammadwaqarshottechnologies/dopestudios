<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
	final public function up(): void
	{
		Schema::create('roles', function (Blueprint $table) {
			$table->id('role_id');
			$table->string('role_name');
			$table->string('role_slug');
			$table->boolean('role_is_active')->default(true);
			$table->timestamp('role_created_at')->useCurrent();
			$table->timestamp('role_updated_at')->nullable()->useCurrentOnUpdate();
			$table->timestamp('role_deleted_at')->nullable();
		});
	}

	final public function down(): void
	{
		Schema::dropIfExists('roles');
	}
}