<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class PermissionTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        /**
         * Client Permission
         */
        DB::table('permissions')->insert([
            'name' => 'Ver clientes',
            'slug' => 'client.show',
            'description' => 'Puede ver todos los clientes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Crear clientes',
            'slug' => 'client.create',
            'description' => 'Puede crear un nuevos clientes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Editar clientes',
            'slug' => 'client.edit',
            'description' => 'Puede editar clientes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Eliminar cliente',
            'slug' => 'client.delete',
            'description' => 'Puede eliminar clientes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Creditos del cliente',
            'slug' => 'client.credits',
            'description' => 'Puede ver los creditos clientes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        /**
         * Roles Permission
         */
        DB::table('permissions')->insert([
            'name' => 'Ver roles',
            'slug' => 'role.show',
            'description' => 'Puede ver todos los roles',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Crear roles',
            'slug' => 'role.create',
            'description' => 'Puede crear mas roles',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Editar roles',
            'slug' => 'role.edit',
            'description' => 'Puede editar los roles',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Eliminar roles',
            'slug' => 'role.delete',
            'description' => 'Puede eliminar los roles',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        /**
         * Users Permission
         */
        DB::table('permissions')->insert([
            'name' => 'Ver usuarios',
            'slug' => 'user.show',
            'description' => 'Puede ver todos los usuarios',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Crear usuarios',
            'slug' => 'user.create',
            'description' => 'Puede crear un nuevos usuarios',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Editar usuarios',
            'slug' => 'user.edit',
            'description' => 'Puede editar usuarios',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Eliminar usuario',
            'slug' => 'user.delete',
            'description' => 'Puede eliminar usuarios',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }

}
