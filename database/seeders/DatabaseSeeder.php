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
            'artist'=>'Pink Floyd',
            'location'=>'Nepal',
            'tags'=>'Nirvan,foofighters',
            'email'=>'test@gmail.com',
            'title'=>'Dark side of the moon',
            'list'=>'speak to me , breathe , on the run , time , The great Gig in the sky , money, us and them,any colour you like, brain damage,eclipse',
            'description'=>'asdaadasa
            asdasdasd'
        ]);

        Band::factory(6)->create();
    }
}
