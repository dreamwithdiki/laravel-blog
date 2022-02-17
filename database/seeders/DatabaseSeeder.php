<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Diki Pahrilah',
        //     'email' => 'diki@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // User::create([
        //     'name' => 'Dev Diki',
        //     'email' => 'devdiki@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit',
        //     'body'  => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam aliquam ex modi corrupti tempora, quidem vel ducimus asperiores saepe quo eaque accusamus quod id iusto deserunt.</p><p>Pariatur quidem alias eum sunt praesentium vitae. Unde sit non repudiandae, ex commodi excepturi perferendis ullam perspiciatis eius! Quaerat dignissimos molestias similique quam.</p><p>Officia delectus facere aliquam ex impedit temporibus veniam.</p><p>Voluptates deserunt quisquam vel eos ullam dolor in cumque rerum excepturi ipsum molestiae ut facere perspiciatis, provident quia error dicta ea illum mollitia explicabo asperiores non similique consequuntur ad? Cupiditate, quis blanditiis beatae necessitatibus ipsa at? Similique modi, corrupti repellendus culpa impedit</p><p>expedita ducimus officiis ab blanditiis reprehenderit quam laborum nam ut? Fuga recusandae at nam neque? Harum necessitatibus reiciendis facere dolor consequuntur consequatur, eveniet alias ad excepturi error laborum perferendis praesentium accusamus quod rem fuga at voluptatum aliquam, ea ab assumenda labore? Temporibus exercitationem quas commodi distinctio quibusdam esse, aspernatur nesciunt odio.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke dua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit',
        //     'body'  => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam aliquam ex modi corrupti tempora, quidem vel ducimus asperiores saepe quo eaque accusamus quod id iusto deserunt.</p><p>Pariatur quidem alias eum sunt praesentium vitae. Unde sit non repudiandae, ex commodi excepturi perferendis ullam perspiciatis eius! Quaerat dignissimos molestias similique quam.</p><p>Officia delectus facere aliquam ex impedit temporibus veniam.</p><p>Voluptates deserunt quisquam vel eos ullam dolor in cumque rerum excepturi ipsum molestiae ut facere perspiciatis, provident quia error dicta ea illum mollitia explicabo asperiores non similique consequuntur ad? Cupiditate, quis blanditiis beatae necessitatibus ipsa at? Similique modi, corrupti repellendus culpa impedit</p><p>expedita ducimus officiis ab blanditiis reprehenderit quam laborum nam ut? Fuga recusandae at nam neque? Harum necessitatibus reiciendis facere dolor consequuntur consequatur, eveniet alias ad excepturi error laborum perferendis praesentium accusamus quod rem fuga at voluptatum aliquam, ea ab assumenda labore? Temporibus exercitationem quas commodi distinctio quibusdam esse, aspernatur nesciunt odio.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit',
        //     'body'  => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam aliquam ex modi corrupti tempora, quidem vel ducimus asperiores saepe quo eaque accusamus quod id iusto deserunt.</p><p>Pariatur quidem alias eum sunt praesentium vitae. Unde sit non repudiandae, ex commodi excepturi perferendis ullam perspiciatis eius! Quaerat dignissimos molestias similique quam.</p><p>Officia delectus facere aliquam ex impedit temporibus veniam.</p><p>Voluptates deserunt quisquam vel eos ullam dolor in cumque rerum excepturi ipsum molestiae ut facere perspiciatis, provident quia error dicta ea illum mollitia explicabo asperiores non similique consequuntur ad? Cupiditate, quis blanditiis beatae necessitatibus ipsa at? Similique modi, corrupti repellendus culpa impedit</p><p>expedita ducimus officiis ab blanditiis reprehenderit quam laborum nam ut? Fuga recusandae at nam neque? Harum necessitatibus reiciendis facere dolor consequuntur consequatur, eveniet alias ad excepturi error laborum perferendis praesentium accusamus quod rem fuga at voluptatum aliquam, ea ab assumenda labore? Temporibus exercitationem quas commodi distinctio quibusdam esse, aspernatur nesciunt odio.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit',
        //     'body'  => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam aliquam ex modi corrupti tempora, quidem vel ducimus asperiores saepe quo eaque accusamus quod id iusto deserunt.</p><p>Pariatur quidem alias eum sunt praesentium vitae. Unde sit non repudiandae, ex commodi excepturi perferendis ullam perspiciatis eius! Quaerat dignissimos molestias similique quam.</p><p>Officia delectus facere aliquam ex impedit temporibus veniam.</p><p>Voluptates deserunt quisquam vel eos ullam dolor in cumque rerum excepturi ipsum molestiae ut facere perspiciatis, provident quia error dicta ea illum mollitia explicabo asperiores non similique consequuntur ad? Cupiditate, quis blanditiis beatae necessitatibus ipsa at? Similique modi, corrupti repellendus culpa impedit</p><p>expedita ducimus officiis ab blanditiis reprehenderit quam laborum nam ut? Fuga recusandae at nam neque? Harum necessitatibus reiciendis facere dolor consequuntur consequatur, eveniet alias ad excepturi error laborum perferendis praesentium accusamus quod rem fuga at voluptatum aliquam, ea ab assumenda labore? Temporibus exercitationem quas commodi distinctio quibusdam esse, aspernatur nesciunt odio.</p>'
        // ]);
    }
}
