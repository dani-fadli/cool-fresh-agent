<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Agent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Agents
        Agent::factory(5)->create();

        // Products
        $this->call(ProductSeeder::class);

        // Orders
        $this->call(OrderStatusSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
