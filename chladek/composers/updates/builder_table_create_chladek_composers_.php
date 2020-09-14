<?php namespace Chladek\Composers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateChladekComposers extends Migration
{
    public function up()
    {
        Schema::create('chladek_composers_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('genre');
            $table->string('born_year');
            $table->string('death_year')->nullable();
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('chladek_composers_');
    }
}
