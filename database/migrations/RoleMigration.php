<?php
include_once(realpath('database/settings/Blueprint.php'));
include_once(realpath('database/settings/DBSchema.php'));

class RoleMigration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();

            $table->status();
            $table->timestamp();
        });
    }
}

