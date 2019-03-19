<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeederTable::class);
        $this->call(CategoriesSeederTable::class);
        $this->call(PostsSeederTable::class);
    }
}
