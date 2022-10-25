<?php

namespace Database\Seeders;
use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();

        $client->name = "Angel";
        $client->phone_number = "6122258960";
        $client->email = "angel@gmail.com";

        $client->save();

        $client = new Client();
        
        $client->name = "Abdul";
        $client->phone_number = "6122258960";
        $client->email = "abdiel@gmail.com";

        $client->save();
    }
}
