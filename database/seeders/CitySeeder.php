<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'Adana', 'plate' => '1'],
            ['id' => 2, 'name' => 'Adıyaman','plate' => '2'],
            ['id' => 3, 'name' => 'Afyonkarahisar','plate' => '3'],
            ['id' => 4, 'name' => 'Ağrı','plate' => '4'],
            ['id' => 5, 'name' => 'Aksaray','plate' => '68'],
            ['id' => 6, 'name' => 'Amasya','plate' => '5'],
            ['id' => 7, 'name' => 'Ankara','plate' => '6'],
            ['id' => 8, 'name' => 'Antalya','plate' => '7'],
            ['id' => 9, 'name' => 'Ardahan','plate' => '75'],
            ['id' => 10, 'name' => 'Artvin', 'plate' =>  '8'],
            ['id' => 11, 'name' => 'Aydın', 'plate' =>  '9'],
            ['id' => 12, 'name' => 'Balıkesir', 'plate' =>  '10'],
            ['id' => 13, 'name' => 'Bartın', 'plate' =>  '74'],
            ['id' => 14, 'name' => 'Batman', 'plate' =>  '72'],
            ['id' => 15, 'name' => 'Bayburt', 'plate' =>  '69'],
            ['id' => 16, 'name' => 'Bilecik', 'plate' =>  '11'],
            ['id' => 17, 'name' => 'Bingöl', 'plate' =>  '12'],
            ['id' => 18, 'name' => 'Bitlis', 'plate' =>  '13'],
            ['id' => 19, 'name' => 'Bolu', 'plate' =>  '14'],
            ['id' => 20, 'name' => 'Burdur', 'plate' =>  '15'],
            ['id' => 21, 'name' => 'Bursa', 'plate' =>  '16'],
            ['id' => 22, 'name' => 'Çanakkale', 'plate' =>  '17'],
            ['id' => 23, 'name' => 'Çankırı', 'plate' =>  '18'],
            ['id' => 24, 'name' => 'Çorum', 'plate' =>  '19'],
            ['id' => 25, 'name' => 'Denizli', 'plate' =>  '20'],
            ['id' => 26, 'name' => 'Diyarbakır', 'plate' =>  '21'],
            ['id' => 27, 'name' => 'Düzce', 'plate' =>  '81'],
            ['id' => 28, 'name' => 'Edirne', 'plate' =>  '22'],
            ['id' => 29, 'name' => 'Elazığ', 'plate' =>  '23'],
            ['id' => 30, 'name' => 'Erzincan', 'plate' =>  '24'],
            ['id' => 31, 'name' => 'Erzurum', 'plate' =>  '25'],
            ['id' => 32, 'name' => 'Eskişehir', 'plate' =>  '26'],
            ['id' => 33, 'name' => 'Gaziantep', 'plate' =>  '27'],
            ['id' => 34, 'name' => 'Giresun', 'plate' =>  '28'],
            ['id' => 35, 'name' => 'Gümüşhane', 'plate' =>  '29'],
            ['id' => 36, 'name' => 'Hakkari', 'plate' =>  '30'],
            ['id' => 37, 'name' => 'Hatay', 'plate' =>  '31'],
            ['id' => 38, 'name' => 'Iğdır', 'plate' =>  '76'],
            ['id' => 39, 'name' => 'Isparta', 'plate' =>  '32'],
            ['id' => 40, 'name' => 'İstanbul', 'plate' =>  '34'],
            ['id' => 41, 'name' => 'İzmir', 'plate' =>  '35'],
            ['id' => 42, 'name' => 'Kahramanmaraş', 'plate' =>  '46'],
            ['id' => 43, 'name' => 'Karabük', 'plate' =>  '78'],
            ['id' => 44, 'name' => 'Karaman', 'plate' =>  '70'],
            ['id' => 45, 'name' => 'Kars', 'plate' =>  '36'],
            ['id' => 46, 'name' => 'Kastamonu', 'plate' =>  '37'],
            ['id' => 47, 'name' => 'Kayseri', 'plate' =>  '38'],
            ['id' => 48, 'name' => 'Kırıkkale', 'plate' =>  '71'],
            ['id' => 49, 'name' => 'Kırklareli', 'plate' =>  '39'],
            ['id' => 50, 'name' => 'Kırşehir', 'plate' =>  '40'],
            ['id' => 51, 'name' => 'Kilis', 'plate' =>  '79'],
            ['id' => 52, 'name' => 'Kocaeli', 'plate' =>  '41'],
            ['id' => 53, 'name' => 'Konya', 'plate' =>  '42'],
            ['id' => 54, 'name' => 'Kütahya', 'plate' =>  '43'],
            ['id' => 55, 'name' => 'Malatya', 'plate' =>  '44'],
            ['id' => 56, 'name' => 'Manisa', 'plate' =>  '45'],
            ['id' => 57, 'name' => 'Mardin', 'plate' =>  '47'],
            ['id' => 58, 'name' => 'Mersin', 'plate' =>  '33'],
            ['id' => 59, 'name' => 'Muğla', 'plate' =>  '48'],
            ['id' => 60, 'name' => 'Muş', 'plate' =>  '49'],
            ['id' => 61, 'name' => 'Nevşehir', 'plate' =>  '50'],
            ['id' => 62, 'name' => 'Niğde', 'plate' =>  '51'],
            ['id' => 63, 'name' => 'Ordu', 'plate' =>  '52'],
            ['id' => 64, 'name' => 'Osmaniye', 'plate' =>  '80'],
            ['id' => 65, 'name' => 'Rize', 'plate' =>  '53'],
            ['id' => 66, 'name' => 'Sakarya', 'plate' =>  '54'],
            ['id' => 67, 'name' => 'Samsun', 'plate' =>  '55'],
            ['id' => 68, 'name' => 'Siir', 'plate' =>  '56'],
            ['id' => 69, 'name' => 'Sinop', 'plate' =>  '57'],
            ['id' => 70, 'name' => 'Sivas', 'plate' =>  '58'],
            ['id' => 71, 'name' => 'Şanlıurfa', 'plate' =>  '63'],
            ['id' => 72, 'name' => 'Şırnak', 'plate' =>  '73'],
            ['id' => 73, 'name' => 'Tekirdağ', 'plate' =>  '59'],
            ['id' => 74, 'name' => 'Tokat', 'plate' =>  '60'],
            ['id' => 75, 'name' => 'Trabzon', 'plate' =>  '61'],
            ['id' => 76, 'name' => 'Tunceli', 'plate' =>  '62'],
            ['id' => 77, 'name' => 'Uşak', 'plate' =>  '64'],
            ['id' => 78, 'name' => 'Van', 'plate' =>  '65'],
            ['id' => 79, 'name' => 'Yalova', 'plate' =>  '77'],
            ['id' => 80, 'name' => 'Yozgat', 'plate' =>  '66'],
            ['id' => 81, 'name' => 'Zonguldak', 'plate' =>  '67']
        ];

        DB::table('cities')->insert($items);
    }
}
