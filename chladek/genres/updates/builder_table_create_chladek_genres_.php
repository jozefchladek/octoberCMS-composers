<?php namespace Chladek\Genres\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateChladekGenres extends Migration
{
    public function up()
    {
        Schema::create('chladek_genres_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('chladek_genres_');
    }
}
