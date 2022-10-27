<?php

namespace Database\Seeders;
use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation = new Reservation();

        $reservation->client_id = 1;
        $reservation->arrival_date = "2010-12-01";
        $reservation->price = 2000;
        
        $reservation->save();

        $reservation = new Reservation();

        $reservation->client_id = 2;
        $reservation->arrival_date = "2010-12-01";
        $reservation->price = 1500;
        
        $reservation->save();
    }
}
