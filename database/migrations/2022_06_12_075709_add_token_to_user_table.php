<?php

use App\Models\Configs;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddTokenToUserTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 *
	 * @throws Exception
	 */
	public function up(): void
	{
		Configs::where('key', '=', 'api_key')->delete();

		Schema::table('users', function (Blueprint $table) {
			$table->char('token', 100)->after('email')->unique()->nullable()->default(null);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(): void
	{
		DB::table('configs')->insert([
			[
				'key' => 'api_key',
				'value' => '',
				'confidentiality' => 3,
				'cat' => 'Admin',
			],
		]);
		Schema::disableForeignKeyConstraints();
		Schema::table('users', function (Blueprint $table) {
			$table->dropColumn('token');
		});
		Schema::enableForeignKeyConstraints();
	}
}
