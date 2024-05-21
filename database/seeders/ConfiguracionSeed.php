<?php

namespace Database\Seeders;

use App\Models\Configuracion;
use App\Models\OtherPage;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfiguracionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Configuracions = Configuracion::factory(1)->create();

         foreach ($Configuracions as $Configuracion) {

            OtherPage::factory(8)->create([
                'other_pageable_id' => $Configuracion->id,
                'other_pageable_type' => Configuracion::class
            ]);

        } 
    }
}
