<?php namespace LZaplata\Timelines\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreate extends Migration
{
    public function up()
    {
        Schema::create('lzaplata_timelines_timelines', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::create('lzaplata_timelines_timelines_categories', function($table)
        {
            $table->integer('timeline_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('sort_order')->nullable();
        });

        Schema::create('lzaplata_timelines_categories', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::create('lzaplata_timelines_events', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->text('text')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::create('lzaplata_timelines_events_categories', function($table)
        {
            $table->integer('event_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('sort_order')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lzaplata_timelines_timelines');
        Schema::dropIfExists('lzaplata_timelines_timelines_categories');
        Schema::dropIfExists('lzaplata_timelines_categories');
        Schema::dropIfExists('lzaplata_timelines_events');
        Schema::dropIfExists('lzaplata_timelines_events_categories');
    }
}
