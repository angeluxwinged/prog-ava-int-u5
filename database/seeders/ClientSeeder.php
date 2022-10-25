<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Client;

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
        $client->phone_number = "1234124";
        $client->email = "AngeluxWinged@gmail.com";

        $client->save();

        $client = new Client();

        $client->name = "Juan";
        $client->phone_number = "23423423";
        $client->email = "Juan@gmail.com";

        $client->save();


    }
}
