<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Bouncer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 產生權限表
        $this->call(BouncerSeeder::class);

        // \App\Models\User::factory(10)->create();
        User::truncate();
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assign('superadmin');
    }
}
