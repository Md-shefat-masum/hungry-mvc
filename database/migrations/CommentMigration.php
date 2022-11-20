<?php
include_once(realpath('database/settings/Blueprint.php'));
include_once(realpath('database/settings/DBSchema.php'));

class CommentMigration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigint('view')->null();
            $table->string('email',50)->null();
            $table->string('title',50)->null();
            $table->text('description')->null();
            $table->status();
            $table->timestamp();
        });
    }
}
