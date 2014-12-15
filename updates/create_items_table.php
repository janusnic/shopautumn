<?php

namespace Muukrls\Shopautumn\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('muukrls_shopautumn_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('price');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('muukrls_shopautumn_items');
    }
}
