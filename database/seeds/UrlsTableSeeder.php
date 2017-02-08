<?php

use Illuminate\Database\Seeder;

class UrlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Urls::create([
            'link' => 'google.com.br',
            'title' => 'google',
            'description' => 'site de buscas mais utilizado no planeta',
            'user_id' => 1
        ]);
    }
}
