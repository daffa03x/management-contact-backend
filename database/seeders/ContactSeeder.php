<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('username', 'test')->first();
        for($i = 1;$i<20;$i++){
            Contact::create([
                'first_name' => 'test'.$i,
                'last_name' => 'test'.$i,
                'email' => 'test'.$i.'@pzn.com',
                'phone' => '111111'.$i,
                'user_id' => $user->id
            ]);
        }
    }
}
