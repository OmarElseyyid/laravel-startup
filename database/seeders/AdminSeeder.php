<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= [
            'name'=> 'xxx',
            'email' => 'admin@admin.com',
            'password' => bcrypt('xxx')
        ];
        Admin::create($admin);
    }
}
