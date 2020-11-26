<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

use Bouncer;

class BouncerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bouncer::allow('superadmin')->everything();

        Bouncer::allow('admin')->everything();
        Bouncer::forbid('admin')->toManage(User::class);
    }
}
