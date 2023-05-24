<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tickets')->insert([
            [
                'id'=> '1',
                'ticket_name' => 'REGULAR',
                'description' => 'For normal access',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ],
            [
                'id'=> '2',
                'ticket_name' => 'VIP',
                'description' => 'For special access',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ]

        ]);
    }
}
