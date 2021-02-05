<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AnonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();


        for($i=1;$i<=10;$i++)
        {
            DB::table('acilkan')->insert([
                'user_id'=>$i,
                'anons_name'=>$faker->name,
                'anons_surname'=>'Parlak',
                'anons_phone'=>'05396467730',
                'anons_kan'=>'A+',
                'anons_detay'=>$faker->text,
                'sehir'=>$faker->city,
                'ilce'=>$faker->streetName,
                'created_at'=>$faker->dateTime('now'),
                'updated_at'=>now(),
            ]);
        }
    }
}
