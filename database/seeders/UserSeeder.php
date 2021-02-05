<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Hamcrest\Core\DescribedAs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=0;$i<10;$i++)
        {
            DB::table('users')->insert([
                'kullanici_adi'=>$faker->name,
                'kullanici_pass'=>Hash::make('123456'),
                'name'=>$faker->name,
                'surname'=>'Parlak',
                'phone'=>'05396467730',
                'kanGrubu'=>'A+',
                'sehir'=>$faker->city,
                'ilce'=>$faker->streetName,
                'email'=>'',
                'created_at'=>$faker->dateTime('now'),
                'updated_at'=>now(),
            ]);
        }

    }
}
