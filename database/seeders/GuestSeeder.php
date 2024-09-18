<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::create([
            'fullname' => 'John',
            'institution_id' => 1,
            'from' => 'Sekolah',
            'phonenumber' => '123456789',
            'email' => 'john@mail.com',
            'note' => 'testt',
        ]);
    }
}
