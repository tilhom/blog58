<?php

use Illuminate\Database\Seeder;

class PostsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Post', 6)->create();
    }
}
