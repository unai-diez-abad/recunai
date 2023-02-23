<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Solicitante;
use App\Models\Obra;
use App\Models\Comentario;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SolicitanteSeeder::class,
            ObraSeeder::class,
            ComentarioSeeder::class,
        ]);

    }
}
