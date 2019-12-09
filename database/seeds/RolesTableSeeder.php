<?php

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    Role::create([
      'name' => 'Administrador',
      'slug' => 'admin',
      'description' => 'Administrador del sistema',
      'special' => 'all-access',
    ]);

    Role::create([
      'name' => 'Gerencia',
      'slug' => 'gerencia',
      'description' => 'Acceso full a todas las acciones y tareas del sistema.',
      'special' => 'all-access',
    ]);

    Role::create([
      'name' => 'Promotor',
      'slug' => 'promotor',
      'description' => 'Acceso a las funciones relacionadas con el registro de nuevos créditos y renovación de créditos y demás.',
    ]);

    Role::create([
      'name' => 'Gestor de cobros',
      'slug' => 'gestor',
      'description' => 'Acceso a las funciones relacionadas con el cobro de abonos, registro de cuotas.',
    ]);
  }
}
