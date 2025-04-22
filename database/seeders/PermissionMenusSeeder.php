<?php

namespace Database\Seeders;

use App\Models\permission_menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionMenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed some permission menus data
        // Define an array of menu names
        $menus = [
            'User management',
            'Role management',
            'Group management',
            'Data management',
        ];

        // Loop through the array and create each menu record using the model
        foreach ($menus as $menu) {
            permission_menu::create([
                'name' => $menu,
            ]);
        }
    }
}
