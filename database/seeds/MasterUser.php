<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MasterUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master')->insert(array(
            'name' => 'Master',
            'emailId' => 'master@gmail.com',
            'password' => bcrypt('2209'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));
    }
}
