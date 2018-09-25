<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-08-13 22:31:12',
                'updated_at' => '2018-08-13 22:31:12',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-08-13 22:31:13',
                'updated_at' => '2018-08-13 22:31:13',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-08-13 22:31:13',
                'updated_at' => '2018-08-13 22:31:13',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-13 22:31:13',
                'updated_at' => '2018-08-13 22:31:13',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-13 22:31:13',
                'updated_at' => '2018-08-13 22:31:13',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-13 22:31:13',
                'updated_at' => '2018-08-13 22:31:13',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-13 22:31:13',
                'updated_at' => '2018-08-13 22:31:13',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-13 22:31:13',
                'updated_at' => '2018-08-13 22:31:13',
            ),
            25 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-08-13 22:31:19',
                'updated_at' => '2018-08-13 22:31:19',
            ),
            26 => 
            array (
                'id' => 62,
                'key' => 'browse_estados_actividad',
                'table_name' => 'estados_actividad',
                'created_at' => '2018-08-14 18:12:58',
                'updated_at' => '2018-08-14 18:12:58',
            ),
            27 => 
            array (
                'id' => 63,
                'key' => 'read_estados_actividad',
                'table_name' => 'estados_actividad',
                'created_at' => '2018-08-14 18:12:58',
                'updated_at' => '2018-08-14 18:12:58',
            ),
            28 => 
            array (
                'id' => 64,
                'key' => 'edit_estados_actividad',
                'table_name' => 'estados_actividad',
                'created_at' => '2018-08-14 18:12:58',
                'updated_at' => '2018-08-14 18:12:58',
            ),
            29 => 
            array (
                'id' => 65,
                'key' => 'add_estados_actividad',
                'table_name' => 'estados_actividad',
                'created_at' => '2018-08-14 18:12:58',
                'updated_at' => '2018-08-14 18:12:58',
            ),
            30 => 
            array (
                'id' => 66,
                'key' => 'delete_estados_actividad',
                'table_name' => 'estados_actividad',
                'created_at' => '2018-08-14 18:12:58',
                'updated_at' => '2018-08-14 18:12:58',
            ),
            31 => 
            array (
                'id' => 67,
                'key' => 'browse_organizador_actividad',
                'table_name' => 'organizador_actividad',
                'created_at' => '2018-08-14 19:14:20',
                'updated_at' => '2018-08-14 19:14:20',
            ),
            32 => 
            array (
                'id' => 68,
                'key' => 'read_organizador_actividad',
                'table_name' => 'organizador_actividad',
                'created_at' => '2018-08-14 19:14:20',
                'updated_at' => '2018-08-14 19:14:20',
            ),
            33 => 
            array (
                'id' => 69,
                'key' => 'edit_organizador_actividad',
                'table_name' => 'organizador_actividad',
                'created_at' => '2018-08-14 19:14:20',
                'updated_at' => '2018-08-14 19:14:20',
            ),
            34 => 
            array (
                'id' => 70,
                'key' => 'add_organizador_actividad',
                'table_name' => 'organizador_actividad',
                'created_at' => '2018-08-14 19:14:20',
                'updated_at' => '2018-08-14 19:14:20',
            ),
            35 => 
            array (
                'id' => 71,
                'key' => 'delete_organizador_actividad',
                'table_name' => 'organizador_actividad',
                'created_at' => '2018-08-14 19:14:20',
                'updated_at' => '2018-08-14 19:14:20',
            ),
            36 => 
            array (
                'id' => 72,
                'key' => 'browse_actividades',
                'table_name' => 'actividades',
                'created_at' => '2018-08-14 19:21:37',
                'updated_at' => '2018-08-14 19:21:37',
            ),
            37 => 
            array (
                'id' => 73,
                'key' => 'read_actividades',
                'table_name' => 'actividades',
                'created_at' => '2018-08-14 19:21:37',
                'updated_at' => '2018-08-14 19:21:37',
            ),
            38 => 
            array (
                'id' => 74,
                'key' => 'edit_actividades',
                'table_name' => 'actividades',
                'created_at' => '2018-08-14 19:21:37',
                'updated_at' => '2018-08-14 19:21:37',
            ),
            39 => 
            array (
                'id' => 75,
                'key' => 'add_actividades',
                'table_name' => 'actividades',
                'created_at' => '2018-08-14 19:21:37',
                'updated_at' => '2018-08-14 19:21:37',
            ),
            40 => 
            array (
                'id' => 76,
                'key' => 'delete_actividades',
                'table_name' => 'actividades',
                'created_at' => '2018-08-14 19:21:37',
                'updated_at' => '2018-08-14 19:21:37',
            ),
            41 => 
            array (
                'id' => 77,
                'key' => 'browse_asistentes',
                'table_name' => 'asistentes',
                'created_at' => '2018-08-14 19:40:10',
                'updated_at' => '2018-08-14 19:40:10',
            ),
            42 => 
            array (
                'id' => 78,
                'key' => 'read_asistentes',
                'table_name' => 'asistentes',
                'created_at' => '2018-08-14 19:40:10',
                'updated_at' => '2018-08-14 19:40:10',
            ),
            43 => 
            array (
                'id' => 79,
                'key' => 'edit_asistentes',
                'table_name' => 'asistentes',
                'created_at' => '2018-08-14 19:40:10',
                'updated_at' => '2018-08-14 19:40:10',
            ),
            44 => 
            array (
                'id' => 80,
                'key' => 'add_asistentes',
                'table_name' => 'asistentes',
                'created_at' => '2018-08-14 19:40:10',
                'updated_at' => '2018-08-14 19:40:10',
            ),
            45 => 
            array (
                'id' => 81,
                'key' => 'delete_asistentes',
                'table_name' => 'asistentes',
                'created_at' => '2018-08-14 19:40:10',
                'updated_at' => '2018-08-14 19:40:10',
            ),
            46 => 
            array (
                'id' => 82,
                'key' => 'browse_categoria_actividad',
                'table_name' => 'categoria_actividad',
                'created_at' => '2018-08-14 21:08:12',
                'updated_at' => '2018-08-14 21:08:12',
            ),
            47 => 
            array (
                'id' => 83,
                'key' => 'read_categoria_actividad',
                'table_name' => 'categoria_actividad',
                'created_at' => '2018-08-14 21:08:12',
                'updated_at' => '2018-08-14 21:08:12',
            ),
            48 => 
            array (
                'id' => 84,
                'key' => 'edit_categoria_actividad',
                'table_name' => 'categoria_actividad',
                'created_at' => '2018-08-14 21:08:12',
                'updated_at' => '2018-08-14 21:08:12',
            ),
            49 => 
            array (
                'id' => 85,
                'key' => 'add_categoria_actividad',
                'table_name' => 'categoria_actividad',
                'created_at' => '2018-08-14 21:08:12',
                'updated_at' => '2018-08-14 21:08:12',
            ),
            50 => 
            array (
                'id' => 86,
                'key' => 'delete_categoria_actividad',
                'table_name' => 'categoria_actividad',
                'created_at' => '2018-08-14 21:08:12',
                'updated_at' => '2018-08-14 21:08:12',
            ),
            51 => 
            array (
                'id' => 87,
                'key' => 'browse_lugar',
                'table_name' => 'lugar',
                'created_at' => '2018-08-14 21:08:45',
                'updated_at' => '2018-08-14 21:08:45',
            ),
            52 => 
            array (
                'id' => 88,
                'key' => 'read_lugar',
                'table_name' => 'lugar',
                'created_at' => '2018-08-14 21:08:45',
                'updated_at' => '2018-08-14 21:08:45',
            ),
            53 => 
            array (
                'id' => 89,
                'key' => 'edit_lugar',
                'table_name' => 'lugar',
                'created_at' => '2018-08-14 21:08:45',
                'updated_at' => '2018-08-14 21:08:45',
            ),
            54 => 
            array (
                'id' => 90,
                'key' => 'add_lugar',
                'table_name' => 'lugar',
                'created_at' => '2018-08-14 21:08:45',
                'updated_at' => '2018-08-14 21:08:45',
            ),
            55 => 
            array (
                'id' => 91,
                'key' => 'delete_lugar',
                'table_name' => 'lugar',
                'created_at' => '2018-08-14 21:08:45',
                'updated_at' => '2018-08-14 21:08:45',
            ),
            56 => 
            array (
                'id' => 92,
                'key' => 'browse_registrador_actividad',
                'table_name' => 'registrador_actividad',
                'created_at' => '2018-08-14 21:09:25',
                'updated_at' => '2018-08-14 21:09:25',
            ),
            57 => 
            array (
                'id' => 93,
                'key' => 'read_registrador_actividad',
                'table_name' => 'registrador_actividad',
                'created_at' => '2018-08-14 21:09:25',
                'updated_at' => '2018-08-14 21:09:25',
            ),
            58 => 
            array (
                'id' => 94,
                'key' => 'edit_registrador_actividad',
                'table_name' => 'registrador_actividad',
                'created_at' => '2018-08-14 21:09:25',
                'updated_at' => '2018-08-14 21:09:25',
            ),
            59 => 
            array (
                'id' => 95,
                'key' => 'add_registrador_actividad',
                'table_name' => 'registrador_actividad',
                'created_at' => '2018-08-14 21:09:25',
                'updated_at' => '2018-08-14 21:09:25',
            ),
            60 => 
            array (
                'id' => 96,
                'key' => 'delete_registrador_actividad',
                'table_name' => 'registrador_actividad',
                'created_at' => '2018-08-14 21:09:25',
                'updated_at' => '2018-08-14 21:09:25',
            ),
            61 => 
            array (
                'id' => 97,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2018-09-25 03:12:56',
                'updated_at' => '2018-09-25 03:12:56',
            ),
            62 => 
            array (
                'id' => 98,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2018-09-25 03:12:56',
                'updated_at' => '2018-09-25 03:12:56',
            ),
            63 => 
            array (
                'id' => 99,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2018-09-25 03:12:56',
                'updated_at' => '2018-09-25 03:12:56',
            ),
            64 => 
            array (
                'id' => 100,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2018-09-25 03:12:56',
                'updated_at' => '2018-09-25 03:12:56',
            ),
            65 => 
            array (
                'id' => 101,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2018-09-25 03:12:56',
                'updated_at' => '2018-09-25 03:12:56',
            ),
            66 => 
            array (
                'id' => 102,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2018-09-25 03:12:57',
                'updated_at' => '2018-09-25 03:12:57',
            ),
            67 => 
            array (
                'id' => 103,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2018-09-25 03:12:57',
                'updated_at' => '2018-09-25 03:12:57',
            ),
            68 => 
            array (
                'id' => 104,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2018-09-25 03:12:57',
                'updated_at' => '2018-09-25 03:12:57',
            ),
            69 => 
            array (
                'id' => 105,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2018-09-25 03:12:57',
                'updated_at' => '2018-09-25 03:12:57',
            ),
            70 => 
            array (
                'id' => 106,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2018-09-25 03:12:57',
                'updated_at' => '2018-09-25 03:12:57',
            ),
            71 => 
            array (
                'id' => 107,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2018-09-25 03:12:57',
                'updated_at' => '2018-09-25 03:12:57',
            ),
            72 => 
            array (
                'id' => 108,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2018-09-25 03:12:57',
                'updated_at' => '2018-09-25 03:12:57',
            ),
            73 => 
            array (
                'id' => 109,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2018-09-25 03:12:57',
                'updated_at' => '2018-09-25 03:12:57',
            ),
            74 => 
            array (
                'id' => 110,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2018-09-25 03:12:57',
                'updated_at' => '2018-09-25 03:12:57',
            ),
            75 => 
            array (
                'id' => 111,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2018-09-25 03:12:57',
                'updated_at' => '2018-09-25 03:12:57',
            ),
        ));
        
        
    }
}