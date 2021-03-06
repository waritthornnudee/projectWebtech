<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //add admin user
        App\User::create([
            'id' => '1',
            'fname' => 'admin',
            'lname' => 'admin',
            'email' => 'admin@example.com',
            'password' => '$2y$10$B6R/MGVkF9QM.oxGlaoO8.1GxMEiua3JILJFfo.WzYFfr.KnyqbPW',
            'point' => '100',
            'pathimg' => 'https://www.bodynbrain.com/img/unknownProfile.png',
            'role' => 'admin'
        ]);

        //add student user
        App\User::create([
            'id' => '2',
            'fname' => 'student',
            'lname' => 'student',
            'email' => 'student@example.com',
            'password' => '$2y$10$b81y.gp3Mvqe3/ED6sWnROt9bYQwmhIOKCADpnOUbxLFugYYn3.EG',
            'point' => '100',
            'pathimg' => 'https://www.bodynbrain.com/img/unknownProfile.png',
            'role' => 'std'
        ]);

        //add promotion
        App\Promotion::create([
            'no' => '1',
            'path' => 'promotion1.png'
        ]);
        App\Promotion::create([
            'no' => '2',
            'path' => 'promotion2.png'
        ]);
        App\Promotion::create([
            'no' => '3',
            'path' => 'promotion3.png'
        ]);

        //add video
        App\Vdo::create([
            'no' => '1',
            'path' => 'https://www.youtube.com/embed/G4cJ4wviwS8'
        ]);
        App\Vdo::create([
            'no' => '2',
            'path' => 'https://www.youtube.com/embed/G4cJ4wviwS8'
        ]);
        App\Vdo::create([
            'no' => '3',
            'path' => 'https://www.youtube.com/embed/G4cJ4wviwS8'
        ]);

        //add teacher
        App\Teacher::create([
            'no' => '1',
            'path' => 'fat.png',
            'name' => 'Maneenuch',
            'description' =>'The Mask Singer Commentator',
        ]);
        App\Teacher::create([
            'no' => '2',
            'path' => 'jane.jpg',
            'name' => 'Jannifer',
            'description' =>'The Voice Coach',
        ]);
        App\Teacher::create([
            'no' => '3',
            'path' => 'space.jpg',
            'name' => 'Jakkawan',
            'description' =>'The Mask Singer Commentator',
        ]);

        App\Course::create([
            'id' => '1',
            'name' => 'Guitar',
            'numday' => '4',
            'price' => '1500',
            'level' => 'Beginner',
            'path' => 'guitarcourses1.jpg'
        ]);

        App\Course::create([
            'id' => '2',
            'name' => 'Piano',
            'numday' => '4',
            'price' => '1750',
            'level' => 'Beginner',
            'path' => 'pianocourses1.jpg'
        ]);

        App\Course::create([
            'id' => '3',
            'name' => 'Voice',
            'numday' => '4',
            'price' => '2000',
            'level' => 'Beginner',
            'path' => 'singingcourses1.jpg'
        ]);

        App\Course::create([
            'id' => '4',
            'name' => 'Piano Intermediate',
            'numday' => '5',
            'price' => '3500',
            'level' => 'Intermediate',
            'path' => 'piano-intermediate.jpg'
        ]);

        App\Course::create([
            'id' => '5',
            'name' => 'Violin',
            'numday' => '3',
            'price' => '3000',
            'level' => 'Beginner',
            'path' => 'violin.jpg'
        ]);

        App\Course::create([
            'id' => '6',
            'name' => 'Paino Expert',
            'numday' => '10',
            'price' => '10000',
            'level' => 'Expert',
            'path' => 'paino-expert.jpg'
        ]);
    }
}
