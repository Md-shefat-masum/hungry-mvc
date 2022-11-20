<?php
include_once(realpath('database/settings/Blueprint.php'));
include_once(realpath('database/settings/DBSchema.php'));

class UserMigration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->null();
            $table->string('email',50)->null()->unique();
            $table->string('contact',30)->null();
            $table->timestamp();
        });
    }
}
