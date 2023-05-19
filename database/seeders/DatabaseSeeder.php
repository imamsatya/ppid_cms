<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // php artisan migrate:refresh --seed  --path=database/migrations/*
        $this->call(PermissionsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
<<<<<<< HEAD

        //phase 2
        $this->call(MenuSeeder::class);
        $this->call(PpidMendapatkan::class);
        $this->call(PpidMemberikan::class);

        //phase 3
        $this->call(PermohonanTableSeeder::class);
=======
        // $this->call(MenuSeeder::class);
        $this->call(PpidMendapatkan::class);
        $this->call(PpidMemberikan::class);
>>>>>>> origin/main
    }
}
