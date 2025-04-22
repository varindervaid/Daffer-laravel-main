<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserInsertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'Super Admin' ,'status' => '1']);

        User::create(
            [
                'name' => 'Super Admin',
                'email' => 'anita.odesk.mca@gmail.com',
                'password' => Hash::make('12345678'),
                'role_id' => $role->id,
                'status' => '1'
            ]);
    }
}
