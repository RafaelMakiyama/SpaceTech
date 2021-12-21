<?php

namespace Database\Seeders;

use App\Models\Documents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Documents::create([
            'title' => 'Documento 1',
            'size' => 20,
            'number_signature' => 2,
            'responsable_signature' => "Rafael",
            'pages_quanties' => 5,
        ]);

        \App\Models\Documents::create([
            'title' => 'Documento 2',
            'size' => 30,
            'number_signature' => 1,
            'responsable_signature' => "JOnathan",
            'pages_quanties' => 5,
        ]);

        \App\Models\Documents::create([
            'title' => 'Documento 2',
            'size' => 20,
            'number_signature' => 2,
            'responsable_signature' => "Felipe",
            'pages_quanties' => 15,
        ]);



    }
}
    