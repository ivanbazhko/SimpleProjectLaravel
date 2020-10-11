<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planes')->insert([
            'name' => 'Cessna 172',
            'manufacture' => 'Cessna',
            'image' => 'https://s3-eu-west-1.amazonaws.com/coavmi.prod.com/s3fs-public/actu/new-172-2.jpg',
            'price' => 300000,
            'capacity' => 3,
            'fuselage' => 'narrow',
            'range' => 1300,
            'description' => 'Небольшой одномоторный самолёт',
            'bigdesc' => 'Cessna 172 Skyhawk — американский лёгкий самолёт. Выпускается компанией «Cessna». Самый массовый самолёт в истории авиации. С 1956 по 2017 год было построено свыше 44 000 самолётов в более чем 25 модификациях. Производство было остановлено в середине 1980-х годов, но было возобновлено в 1998 году с более мощным двигателем.',
            'begin' => 1956,
         ]);

         DB::table('planes')->insert([
            'name' => 'Cessna 208 Grand Caravan',
            'manufacture' => 'Cessna',
            'image' => 'https://avatars.mds.yandex.net/get-pdb/38069/a6539866-4c38-40c9-b91e-4bb1ef0edb02/s1200?webp=false',
            'price' => 2700000,
            'capacity' => 13,
            'fuselage' => 'narrow',
            'range' => 1800,
            'description' => 'Самолёт для линий малой протяжённости',
            'bigdesc' => 'Cessna 208 Grand Caravan — американский лёгкий одномоторный турбовинтовой самолёт общего назначения с неубирающимся шасси. Выпускается компанией «Cessna» с 1984 года в различных модификациях (пассажирские, грузопассажирские, грузовые, самолёт-амфибия). Используется на авиалиниях малой протяжённости.',
            'begin' => 1980,
         ]);

         DB::table('planes')->insert([
            'name' => 'Beechcraft 1900',
            'manufacture' => 'Beechcraft',
            'image' => 'https://www.avionslegendaires.net/wp-content/uploads/2016/04/Beechcraft-1900D-FAS_Wikim%C3%A9dia.jpg',
            'price' => 3000000,
            'capacity' => 19,
            'fuselage' => 'narrow',
            'range' => 1000,
            'description' => 'Авиалайнер для местных линий',
            'bigdesc' => 'Beechcraft 1900 — американский турбовинтовой самолёт, 19-местный авиалайнер для местных линий. Разработан на основе самолётов семейства Beechcraft King Air. Серийно производился в 1982—2002, выпущено 695 самолётов в нескольких модификациях. Широко используется как региональный и административный самолёт, существуют пассажирские и грузовые модификации.',
            'begin' => 1982,
         ]);

         DB::table('planes')->insert([
            'name' => 'Airbus A380',
            'manufacture' => 'Airbus',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e5/A380-841_MSN04_19-10-2010.jpg',
            'price' => 430000000,
            'capacity' => 853,
            'fuselage' => 'wide',
            'range' => 15400,
            'description' => 'Самый большой пассажирский самолёт',
            'bigdesc' => 'Airbus А380 — широкофюзеляжный двухпалубный четырёхдвигательный турбореактивный пассажирский самолёт, созданный концерном Airbus S.A.S. (ранее Airbus Industrie) — крупнейший серийный авиалайнер в мире. Вместимость — 525 пассажиров в салоне трёх классов, 853 пассажира в одноклассной конфигурации. Может совершать беспосадочные перелёты на расстояние до 15 400 км.',
            'begin' => 1982,
         ]);

         DB::table('planes')->insert([
            'name' => 'Sukhoi Superjet 100',
            'manufacture' => 'Sukhoi',
            'image' => 'https://finobzor.ru/uploads/posts/2016-08/org_zqqo304.jpg',
            'price' => 48000000,
            'capacity' => 108 ,
            'fuselage' => 'narrow',
            'range' => 4578,
            'description' => 'Ближнемагистральный узкофюзеляжный пассажирский самолёт',
            'bigdesc' => 'Sukhoi Superjet 100 — российский ближнемагистральный узкофюзеляжный пассажирский самолёт, предназначенный для перевозки 98(до 108) пассажиров на дальность 3000 или 4600 км. Разработан компанией «Гражданские самолёты Сухого» при участии ряда иностранных компаний. Первый пассажирский самолёт, разработанный в России после распада СССР. Спроектирован только с применением цифровых технологий.',
            'begin' => 2008,
         ]);
    }
}
