<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipo::factory()->create([
            'codigo' => 'B',
            'nombre' => 'Biopsia',
        ]);

        Tipo::factory(100)->create();
    }
}
