<?php

use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('houses')->insert([
            'user_id' => '2',
            'location' => 'Luanda, Benfica',
            'price_sale' => '450.000',
            'price_rent' => '45.000',
            'description' => 'Uma casa de cinco quartos e uma duas salas uma casa de banho,com condições necessárias,energia e água paga',
            'type' => 'Casa Normal',
            'status' => 'Venda e Aluguel'
        ]);
    }
}
