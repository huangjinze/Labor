<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\Models\Article::class, 50)->create()->each(function($u) {
//            $u->Article()->save(factory(App\Models\Article::class)->make());
//        });
        $user= factory(App\Models\Article::class, 50)->create();
        $user= factory(App\Models\fwdt::class, 50)->create();
        $user= factory(App\Models\gzjs::class, 50)->create();
        $user= factory(App\Models\lwpq::class, 50)->create();
        $user= factory(App\Models\lwwb::class, 50)->create();
        $user= factory(App\Models\rlzy::class, 50)->create();
        $user= factory(App\Models\zcfg::class, 50)->create();
        $user= factory(App\Models\zpxx::class, 50)->create();
    }
}
