<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert(array(
            'name' => 'Admin',
            'emailId' => 'admin@gmail.com',
            'password' => bcrypt('2209'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));
    }
}
