<?php

use Illuminate\Database\Seeder;

class cnAdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cn_admin_users')->insert([
            'username' => 'natia',
            'rights' => '',
            'ips' => '',
            'email' => 'n.gelashvili33@gmail.com',
            'password' => Hash::make('132465'),
        ]);
    }
}
