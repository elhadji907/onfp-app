<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgrementsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'agrements';

    /**
     * Run the migrations.
     * @table agrements
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('uuid', 36);
            $table->string('details', 200)->nullable();
            $table->unsignedInteger('compteurs_id');
            $table->unsignedInteger('gestionnaires_id');

            $table->index(["gestionnaires_id"], 'fk_agrements_gestionnaires1_idx');

            $table->index(["compteurs_id"], 'fk_abonnements_compteurs1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('compteurs_id', 'fk_abonnements_compteurs1_idx')
                ->references('id')->on('operateurs')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('gestionnaires_id', 'fk_agrements_gestionnaires1_idx')
                ->references('id')->on('gestionnaires')
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
