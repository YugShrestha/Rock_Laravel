<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Band;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Band::create([
            'name'=>'Pink Floyd',
            'location'=>'Nepal',
            'tags'=>'Nirvan,foofighters',
            'email'=>'test@gmail.com',
            'album'=>'Dark side of the moon',
            'list'=>'jasasakljasdad',
            'description'=>'asdaadasa
            asdasdasd'
        ]);

        Band::factory(6)->create();
    }
}
