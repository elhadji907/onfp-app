<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainesHasOperateursTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'domaines_has_operateurs';

    /**
     * Run the migrations.
     * @table domaines_has_operateurs
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('domaines_id');
            $table->unsignedInteger('operateurs_id');

            $table->index(["domaines_id"], 'fk_domaines_has_operateurs_domaines1_idx');

            $table->index(["operateurs_id"], 'fk_domaines_has_operateurs_operateurs1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('domaines_id', 'fk_domaines_has_operateurs_domaines1_idx')
                ->references('id')->on('domaines')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('operateurs_id', 'fk_domaines_has_operateurs_operateurs1_idx')
                ->references('id')->on('operateurs')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
