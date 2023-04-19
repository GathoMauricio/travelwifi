<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        Product::create([
            'name_es' => 'COMPRAR O ALQUILAR PUNTOS DE ACCESO',
            'name_en' => 'BUY OR RENT ACCESS POINTS',
            'description_es' => 'Alquiler de puntos de acceso WiFi portátiles.',
            'description_en' => 'Portable WiFi hotspot rental.',
            'price' => '40.75',
        ]);
        Product::create([
            'name_es' => 'ESIM',
            'name_en' => 'ESIM',
            'description_es' => 'Encuentra el plan perfecto de eSIM. Actívalo en segundos.',
            'description_en' => 'Find the Perfect eSIM plan. Activate it in seconds.',
            'price' => '10.55',
        ]);
        Product::create([
            'name_es' => 'TARJETAS SIM',
            'name_en' => 'SIM CARDS',
            'description_es' => 'Elija la tarjeta SIM TravelWifi adecuada para usted.',
            'description_en' => 'Choose the right TravelWifi SIM card for you.',
            'price' => '25.34',
        ]);
        Product::create([
            'name_es' => 'PLANES DE DATOS',
            'name_en' => 'DATA PLANS',
            'description_es' => 'Hechos para viajeros como tú, nuestros planes de datos ofrecen opciones cómodas y flexibles.',
            'description_en' => 'Made for travelers like you, our data plans offer convenient and flexible options.',
            'price' => '62.41',
        ]);
    }
}
