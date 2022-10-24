<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Category::truncate();
        Post::truncate();
        $user = User::factory()->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aspernatur aut autem dicta dignissimos eaque,
            id illo incidunt maiores molestiae necessitatibus,
            nemo nihil nostrum perferendis quasi quia quisquam similique unde. Quod?'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aspernatur aut autem dicta dignissimos eaque,
            id illo incidunt maiores molestiae necessitatibus,
            nemo nihil nostrum perferendis quasi quia quisquam similique unde. Quod?'
        ]);
        Post::create([

            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aspernatur aut autem dicta dignissimos eaque,
            id illo incidunt maiores molestiae necessitatibus,
            nemo nihil nostrum perferendis quasi quia quisquam similique unde. Quod?'
        ]);;
        Post::create([

            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Second Personal Post',
            'slug' => 'my-second-personal-post',
            'excerpt' => 'Lorem ipsum',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aspernatur aut autem dicta dignissimos eaque,
            id illo incidunt maiores molestiae necessitatibus,
            nemo nihil nostrum perferendis quasi quia quisquam similique unde. Quod?'
        ]);

    }
}
