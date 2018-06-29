<?php

namespace Bluora\LaravelDatasetsAustralia\Migrations;

use Bluora\LaravelDatasets\Traits\MigrationsTrait;
use DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAustraliaBsbTable extends Migration
{
    protected $table_name = 'data_australia_bsb';
    protected $connection = 'default';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up($connection = null)
    {
        Schema::connection(!is_null($connection) ? $connection : $this->connection)
            ->create($this->table_name, function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('bsb', 7)->default('');
                $table->string('bank', 3)->default('');
                $table->string('branch', 255)->default('');
                $table->string('address', 255)->default('');
                $table->string('suburb', 255)->default('');
                $table->string('state', 3)->default('');
                $table->smallInteger('postcode');
                $table->string('payment_types', 255)->default('');
                $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
                $table->timestamp('archived_at')->nullable();
                $table->timestamp('deleted_at')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down($connection = null)
    {
        self::connection(!is_null($connection) ? $connection : $this->connection)
            ->drop($this->table_name);
    }
}
