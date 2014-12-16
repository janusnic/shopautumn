<?php

namespace Muukrls\Shopautumn\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('muukrls_shopautumn_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('muukrls_shopautumn_item_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->integer('category_id')->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('muukrls_shopautumn_categories');
        Schema::dropIfExists('muukrls_shopautumn_item_categories');
    }
}
