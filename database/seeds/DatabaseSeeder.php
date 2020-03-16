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
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create();


        DB::table('users')->insert(
            [
                [
                    'name' => 'james',
                    'email' => 'james@gmail.com',
                    'username' => 'james1',
                    'password' => bcrypt('secret'),
                ],
                [
                    'name' => 'John',
                    'email' => 'john@gmail.com',
                    'username' => 'john2',
                    'password' => bcrypt('secret'),
                ],
                [
                    'name' => 'Robert',
                    'email' => 'robert@gmail.com',
                    'username' => 'robert3',
                    'password' => bcrypt('secret'),
                ],
                [
                    'name' => 'Michael',
                    'email' => 'michael@gmail.com',
                    'username' => 'michael2',
                    'password' => bcrypt('secret'),
                ],
                [
                    'name' => 'William',
                    'email' => 'william@gmail.com',
                    'username' => 'william4',
                    'password' => bcrypt('secret'),
                ]
            ]
        );


        DB::table('profiles')->insert([

            [
                'user_id' => '1',
                'description' => $faker->sentence(6),
                'title' => 'james1'
            ],
            [
                'user_id' => '2',
                'description' => $faker->sentence(6),
                'title' => 'john2'
            ],
            [
                'user_id' => '3',
                'description' => $faker->sentence(6),
                'title' => 'robert3'
            ],
            [
                'user_id' => '4',
                'description' => $faker->sentence(6),
                'title' => 'michael2'
            ],
            [
                'user_id' => '5',
                'description' => $faker->sentence(6),
                'title' => 'william4'
            ],
        ]);


        DB::table('posts')->insert([

            [
                'user_id' => '1',
                'caption' => $faker->sentence(6),
                'image' => 'james1.jpg'
            ],
            [
                'user_id' => '2',
                'caption' => $faker->sentence(6),
                'image' => 'john2.jpg'
            ],
            [
                'user_id' => '3',
                'caption' => $faker->sentence(6),
                'image' => 'robert3.jpg'
            ],
            [
                'user_id' => '4',
                'caption' => $faker->sentence(6),
                'image' => 'michael2.jpg'
            ],
            [
                'user_id' => '5',
                'caption' => $faker->sentence(6),
                'image' => 'william4.jpg'
            ],
        ]);

        DB::table('profile_user')->insert([

            [
                'profile_id' => '1',
                'user_id' => '6',
            ],
            [
                'profile_id' => '2',
                'user_id' => '6',
            ],
            [
                'profile_id' => '3',
                'user_id' => '6',
            ],
            [
                'profile_id' => '4',
                'user_id' => '6',
            ],
            [
                'profile_id' => '5',
                'user_id' => '6',
            ],
        ]);
    }
}