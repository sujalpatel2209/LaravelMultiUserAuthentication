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
         $this->call(MasterUser::class);
         $this->call(AdminUser::class);
         $this->call(Users::class);
    }
}
