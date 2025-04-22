<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        
        // Check and insert the 'admin' role if it doesn't exist
        if (!Role::where('slug', 'superadmin')->exists()) {
           $role= Role::create([
                'name' => 'SuperAdmin',
                'slug' => Str::slug('SuperAdmin'),
            ]);
        }
        if (!Role::where('slug', 'user')->exists()) {
            Role::create([
                'name' => 'User',
                'slug' => Str::slug('User'),
            ]);
        }
        
        // Optionally, you can also create a default admin user if needed
        if (!User::where('email', 'anita.odesk.mca@gmail.com')->exists()) {
            User::create([
                'name' => $role->name,
                'email' => 'anita.odesk.mca@gmail.com',
                'password' => Hash::make('Anita@123'), // Default password; consider using a more secure approach
                'role_id' =>$role->id,
                'status' =>1
            ]);
        }
}
}
