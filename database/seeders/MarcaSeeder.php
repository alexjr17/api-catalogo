<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    Marca::factory(5)->create();
        Marca::create([
            'name' => 'Nike',
        ]);
        Marca::create([
            'name' => 'Polo',
        ]);
        Marca::create([
            'name' => 'Adidas',
        ]);
        Marca::create([
            'name' => 'Puma',
        ]);
    }
}
