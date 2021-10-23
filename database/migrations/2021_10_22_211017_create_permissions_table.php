<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
	final public function up(): void
	{
		Schema::create('permissions', function (Blueprint $table) {
			$table->id('perm_id');
			$table->string('perm_name');
			$table->string('perm_slug');
			$table->boolean('perm_is_active')->default(true);
			$table->timestamp('perm_created_at')->useCurrent();
			$table->timestamp('perm_updated_at')->nullable()->useCurrentOnUpdate();
			$table->timestamp('perm_deleted_at')->nullable();
		});
	}

	final public function down(): void
	{
		Schema::dropIfExists('permissions');
	}
}