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
        $user= factory(App\Models\zxzx::class, 50)->create();
        $user= factory(App\Models\qyzp::class, 50)->create();
        $user= factory(App\Models\fwxm::class, 50)->create();
        $user= factory(App\Models\qyzz::class, 50)->create();
        $user= factory(App\Models\jdal::class, 50)->create();
        $user= factory(App\Models\dqjs::class, 50)->create();
        $user= factory(App\Models\zpxx::class, 50)->create();
    }
}
