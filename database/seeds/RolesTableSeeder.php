<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Usuario',
                'display_name' => 'Usuario',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-14 21:23:55',
            ),
        ));
        
        
    }
}