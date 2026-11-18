<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Administrador',
                'description' => 'Acceso completo a la administración del sistema.',
            ],
            [
                'name' => 'Vendedor',
                'description' => 'Gestiona clientes, productos y pedidos.',
            ],
            [
                'name' => 'Asesor',
                'description' => 'Atiende conversaciones y consultas de clientes.',
            ],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(
                ['name' => $role['name']],
                ['description' => $role['description']]
            );
        }
    }
}
