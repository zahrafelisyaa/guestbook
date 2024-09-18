<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
   
    public function run(): void
    {
        Guest::create([
            'fullname' => 'Guest',
            'institution_id' => 1,
            'from' => 'CV Fourth Nattawat',
            'phonenumber' => '123456789',
            'email' => 'Fourth@mail.com',
            'note' => 'Test',
        ]);
    }
}
