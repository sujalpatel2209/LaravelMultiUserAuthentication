<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert(array(
            'name' => 'User',
            'emailId' => 'user@gmail.com',
            'password' => bcrypt('2209'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));
    }
}
