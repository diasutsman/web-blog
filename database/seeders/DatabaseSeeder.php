<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
    // User::create([
    //   'name' => 'Dias Utsman',
    //   'email' => 'utsmand91@gmail.com',
    //   'password' => bcrypt('12345'),
    // ]);

    // User::create([
    //   'name' => 'Doddy Sultan',
    //   'email' => 'doddy@gmail.com',
    //   'password' => bcrypt('12345'),
    // ]);

    User::factory(5)->create();

    Category::create([
      'name' => 'Web Programming',
      'slug' => 'web-programming',
    ]);

    Category::create([
      'name' => 'Personal',
      'slug' => 'personal',
    ]);

    Post::factory(20)->create();

    // Post::create([
    //   'title' => 'Judul Pertama',
    //   'slug' => 'judul-pertama',
    //   'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem eligendi aut doloribus distinctio ad possimus fugit labore veniam natus enim deleniti error dolorum cum id, eum reprehenderit voluptate libero quae.',
    //   'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum non, nemo mollitia vel consequatur numquam veniam tempora! Facere dolore rerum ab maxime illo enim, aspernatur, reprehenderit eos facilis impedit iusto maiores alias temporibus obcaecati esse! Sit aspernatur ad voluptatibus tempore asperiores fugit enim similique quam, recusandae earum iure consequatur nesciunt dolores numquam ex est ullam ratione tempora incidunt nemo, sapiente quasi assumenda debitis? Hic sint maiores dolore deleniti veniam quisquam nobis amet iste voluptate, rerum nesciunt nam illo quam facere enim ducimus atque eveniet laborum assumenda tempora in ab? Voluptatum temporibus libero nemo, blanditiis unde soluta ipsa fugiat praesentium eligendi.',
    //   'category_id' => 1,
    //   'user_id' => 1,
    // ]);

    // Post::create([
    //   'title' => 'Judul Kedua',
    //   'slug' => 'judul-kedua',
    //   'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem eligendi aut doloribus distinctio ad possimus fugit labore veniam natus enim deleniti error dolorum cum id, eum reprehenderit voluptate libero quae.',
    //   'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum non, nemo mollitia vel consequatur numquam veniam tempora! Facere dolore rerum ab maxime illo enim, aspernatur, reprehenderit eos facilis impedit iusto maiores alias temporibus obcaecati esse! Sit aspernatur ad voluptatibus tempore asperiores fugit enim similique quam, recusandae earum iure consequatur nesciunt dolores numquam ex est ullam ratione tempora incidunt nemo, sapiente quasi assumenda debitis? Hic sint maiores dolore deleniti veniam quisquam nobis amet iste voluptate, rerum nesciunt nam illo quam facere enim ducimus atque eveniet laborum assumenda tempora in ab? Voluptatum temporibus libero nemo, blanditiis unde soluta ipsa fugiat praesentium eligendi.',
    //   'category_id' => 1,
    //   'user_id' => 1,
    // ]);

    // Post::create([
    //   'title' => 'Judul Ketiga',
    //   'slug' => 'judul-ketiga',
    //   'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem eligendi aut doloribus distinctio ad possimus fugit labore veniam natus enim deleniti error dolorum cum id, eum reprehenderit voluptate libero quae.',
    //   'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum non, nemo mollitia vel consequatur numquam veniam tempora! Facere dolore rerum ab maxime illo enim, aspernatur, reprehenderit eos facilis impedit iusto maiores alias temporibus obcaecati esse! Sit aspernatur ad voluptatibus tempore asperiores fugit enim similique quam, recusandae earum iure consequatur nesciunt dolores numquam ex est ullam ratione tempora incidunt nemo, sapiente quasi assumenda debitis? Hic sint maiores dolore deleniti veniam quisquam nobis amet iste voluptate, rerum nesciunt nam illo quam facere enim ducimus atque eveniet laborum assumenda tempora in ab? Voluptatum temporibus libero nemo, blanditiis unde soluta ipsa fugiat praesentium eligendi.',
    //   'category_id' => 2,
    //   'user_id' => 1,
    // ]);

    // Post::create([
    //   'title' => 'Judul Keempat',
    //   'slug' => 'judul-keempat',
    //   'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem eligendi aut doloribus distinctio ad possimus fugit labore veniam natus enim deleniti error dolorum cum id, eum reprehenderit voluptate libero quae.',
    //   'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum non, nemo mollitia vel consequatur numquam veniam tempora! Facere dolore rerum ab maxime illo enim, aspernatur, reprehenderit eos facilis impedit iusto maiores alias temporibus obcaecati esse! Sit aspernatur ad voluptatibus tempore asperiores fugit enim similique quam, recusandae earum iure consequatur nesciunt dolores numquam ex est ullam ratione tempora incidunt nemo, sapiente quasi assumenda debitis? Hic sint maiores dolore deleniti veniam quisquam nobis amet iste voluptate, rerum nesciunt nam illo quam facere enim ducimus atque eveniet laborum assumenda tempora in ab? Voluptatum temporibus libero nemo, blanditiis unde soluta ipsa fugiat praesentium eligendi.',
    //   'category_id' => 2,
    //   'user_id' => 2,
    // ]);
  }
}
