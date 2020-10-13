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
           'name' => 'Airbus A319neo',
           'manufacture' => 'Airbus',
           'image' => 'https://airwaysmag.com/wp-content/uploads/2017/03/a319neo1200x800.jpg',
           'price' => 105000000,
           'capacity' => 150,
           'fuselage' => 'narrow',
           'range' => 4500,
           'description' => 'Узкофюзеляжный пассажирский реактивный самолёт',
           'bigdesc' => 'Airbus A320neo — семейство улучшенных версий узкофюзеляжных пассажирских реактивных самолётов семейства Airbus A320, производимых Airbus. Аббревиатура «neo» означает «New Engine Option», то есть «Новый вариант двигателя».',
           'begin' => 2014,
        ]);

        DB::table('planes')->insert([
         'name' => 'Airbus A320neo',
         'manufacture' => 'Airbus',
         'image' => 'https://i.insider.com/56684cd184307640008b8906',
         'price' => 115000000,
         'capacity' => 180,
         'fuselage' => 'narrow',
         'range' => 6850,
         'description' => 'Узкофюзеляжный пассажирский реактивный самолёт',
         'bigdesc' => 'Airbus A320neo — семейство улучшенных версий узкофюзеляжных пассажирских реактивных самолётов семейства Airbus A320, производимых Airbus. Аббревиатура «neo» означает «New Engine Option», то есть «Новый вариант двигателя».',
         'begin' => 2014,
      ]);

      DB::table('planes')->insert([
         'name' => 'Airbus A321-XLR',
         'manufacture' => 'Airbus',
         'image' => 'https://im0-tub-by.yandex.net/i?id=42df1cf6e46785878344ba4f43ea19e3&n=13',
         'price' => 430000000,
         'capacity' => 220,
         'fuselage' => 'narrow',
         'range' => 8700,
         'description' => 'Узкофюзеляжный пассажирский реактивный самолёт очень большой дальности',
         'bigdesc' => 'Airbus A320neo — семейство улучшенных версий узкофюзеляжных пассажирских реактивных самолётов семейства Airbus A320, производимых Airbus. Аббревиатура «neo» означает «New Engine Option», то есть «Новый вариант двигателя».',
         'begin' => 2018,
      ]);

      DB::table('planes')->insert([
         'name' => 'Airbus A330-800neo',
         'manufacture' => 'Airbus',
         'image' => 'https://theaircurrent.com/wp-content/uploads/2018/11/Airbus-A330-800-MSN1888-first-flight-take-off.jpeg',
         'price' => 260000000,
         'capacity' => 406,
         'fuselage' => 'wide',
         'range' => 14800,
         'description' => 'Широкофюзеляжный пассажирский реактивный самолёт',
         'bigdesc' => 'Airbus A330neo — семейство улучшенной версии широкофюзеляжного самолёта Airbus A330, производимое компанией Airbus. Предназначен для средних и дальних дистанций, оснащён двумя турбовентиляторными двигателями.',
         'begin' => 2015,
      ]);

      DB::table('planes')->insert([
         'name' => 'Airbus A350-900',
         'manufacture' => 'Airbus',
         'image' => 'http://proleteli.com/img/airplane/18/image-3763.jpg',
         'price' => 320000000,
         'capacity' => 440,
         'fuselage' => 'wide',
         'range' => 15400,
         'description' => 'Широкофюзеляжный пассажирский реактивный самолёт',
         'bigdesc' => 'Airbus A350 XWB (англ. Extra Wide Body — сверхширокий фюзеляж) — семейство дальнемагистральных широкофюзеляжных двухдвигательных пассажирских самолётов, разработанных концерном Airbus в качестве замены A330 и A340. Он может перевозить от 250 до 350 пассажиров в типовой трёхклассной конфигурации, с максимальной вместимостью 440—550 пассажиров, в зависимости от модификации.',
         'begin' => 2012,
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
         'begin' => 2005,
      ]);

      DB::table('planes')->insert([
         'name' => 'ATR 72',
         'manufacture' => 'ATR',
         'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/84/Air_Nostrum_-_ATR_ATR-72-500_%28ATR-72-212A%29.jpg',
         'price' => 20000000,
         'capacity' => 74,
         'fuselage' => 'narrow',
         'range' => 1350,
         'description' => 'ATR 72 — пассажирский двухмоторный турбовинтовой самолёт',
         'bigdesc' => 'ATR 72 — пассажирский двухмоторный турбовинтовой самолёт для среднемагистральных перелётов. Самолёт предназначен для перевозки до 74 пассажиров одного класса на расстояние до 1300 км и управляется двумя пилотами. Производитель — франко-итальянский концерн ATR (фр. Avions de Transport Régional).',
         'begin' => 1988,
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
         'name' => 'Boeing 737 MAX 8',
         'manufacture' => 'Boeing',
         'image' => 'https://donday.ru/uploads/posts/2019-05/1557837655_img_8759_2_1.thumb.jpg.ecc90b74f874e91a2c79a27ed13b15fa.jpg',
         'price' => 120000000,
         'capacity' => 200,
         'fuselage' => 'narrow',
         'range' => 6704,
         'description' => 'Узкофюзеляжный пассажирский реактивный самолёт',
         'bigdesc' => 'Boeing 737 MAX — четвёртое поколение пассажирских самолётов Boeing 737 средней дальности, созданное компанией Boeing для замены семейства Boeing 737 Next Generation. Основным изменением стало использование более мощных и крупных двигателей CFM International LEAP-1B. Некоторым изменениям подвергся и планер. Первый 737 MAX поставлен заказчику в мае 2017 года. С 2018 года после двух катастроф полёты запрещены. На данный момент проводятся испытания для возобновления полётов',
         'begin' => 2014,
      ]);

      DB::table('planes')->insert([
         'name' => 'Boeing 737 MAX 10',
         'manufacture' => 'Boeing',
         'image' => 'https://imagr.eu/up/vvQBg_DCq4lrkXYAA6iMV.jpg',
         'price' => 130000000,
         'capacity' => 230,
         'fuselage' => 'narrow',
         'range' => 6238,
         'description' => 'Узкофюзеляжный пассажирский реактивный самолёт',
         'bigdesc' => 'Boeing 737 MAX — четвёртое поколение пассажирских самолётов Boeing 737 средней дальности, созданное компанией Boeing для замены семейства Boeing 737 Next Generation. Основным изменением стало использование более мощных и крупных двигателей CFM International LEAP-1B. Некоторым изменениям подвергся и планер. Первый 737 MAX поставлен заказчику в мае 2017 года. С 2018 года после двух катастроф полёты запрещены. На данный момент проводятся испытания для возобновления полётов',
         'begin' => 2014,
      ]);

      DB::table('planes')->insert([
         'name' => 'Boeing 747-8',
         'manufacture' => 'Boeing',
         'image' => 'https://libertycity.net/uploads/download/gta5_air/fulls/b98du2mj522thm2v16tckoo3r6/14824972595219_12.jpg',
         'price' => 380000000,
         'capacity' => 467,
         'fuselage' => 'wide',
         'range' => 15000,
         'description' => 'Двухпалубный широкофюзеляжный пассажирский самолёт',
         'bigdesc' => 'Boeing 747-8i (i – intercontinental) — двухпалубный широкофюзеляжный пассажирский самолёт, разработанный компанией Boeing. Этот анонсированный в 2005 году авиалайнер является новым поколением знаменитой серии Boeing 747 с удлинённым фюзеляжем, перепроектированным крылом и улучшенной экономической эффективностью. 747-8 является самым большим коммерческим самолётом, построенным в США, а также самым длинным пассажирским самолётом в мире, превысившим длину Airbus A340-600 почти на метр.',
         'begin' => 2008,
      ]);

      DB::table('planes')->insert([
         'name' => 'Boeing 777-8X',
         'manufacture' => 'Boeing',
         'image' => 'https://www.airlineratings.com/wp-content/uploads/uploads/BOEING-777-8X.jpg',
         'price' => 444000000,
         'capacity' => 420,
         'fuselage' => 'wide',
         'range' => 16100,
         'description' => 'Широкофюзеляжный пассажирский реактивный самолёт',
         'bigdesc' => 'Boeing 777X — самолет производства корпорации Boeing, спроектированный на основе Boeing 777. Boeing 777X отличается от Boeing 787 новыми двигателями General Electric GE90-115B, композитными крыльями со складывающимися законцовками, вместительностью и технологиями.',
         'begin' => 2017,
      ]);

      DB::table('planes')->insert([
         'name' => 'Boeing 787-8',
         'manufacture' => 'Boeing',
         'image' => 'https://imgproc.airliners.net/photos/airliners/7/6/6/2758667.jpg?v=v40',
         'price' => 250000000,
         'capacity' => 260,
         'fuselage' => 'wide',
         'range' => 13620,
         'description' => 'Широкофюзеляжный пассажирский реактивный самолёт',
         'bigdesc' => 'Boeing 787 Dreamliner — широкофюзеляжный двухдвигательный пассажирский самолёт, разработанный американской компанией Boeing. Максимальное количество пассажиров (в одноклассовой конфигурации): от 250 до 330, в зависимости от варианта (по вместимости и дальности полёта 787 сравним с Boeing 767). Boeing утверждает, что Dreamliner более экономичный, чем предыдущие разработки. Boeing 787 стал первым пассажирским самолётом компании, в конструкции которого широко использованы композитные материалы.',
         'begin' => 2009,
      ]);

      DB::table('planes')->insert([
         'name' => 'De Havilland Canada Dash 8 Q400',
         'manufacture' => 'Bombardier',
         'image' => 'https://polit.ru/media/photolib/2014/10/31/q400_1414730245.jpg',
         'price' => 35000000,
         'capacity' => 70,
         'fuselage' => 'narrow',
         'range' => 2040,
         'description' => 'Пассажирский двухмоторный турбовинтовой самолёт',
         'bigdesc' => 'Bombardier DHC-8 / Q серия или Бомбардье Дэш 8 (также обозначается как DHC-8) — канадский двухмоторный турбовинтовой ближнемагистральный военно-транспортный, пассажирский самолёт для линий малой и средней протяжённости, разработанный и выпускаемый канадской авиастроительной компанией De Havilland Canada до 1992 года. С 1992 года по настоящее время Bombardier DHC-8 производится канадской авиастроительной компанией Bombardier Aerospace, которая в 1992 году выкупила компанию De Havilland Canada у американской авиастроительной компании Boeing.',
         'begin' => 1983,
      ]);

      DB::table('planes')->insert([
         'name' => 'CRJ 1000',
         'manufacture' => 'Bombardier',
         'image' => 'https://avatars.mds.yandex.net/get-zen_doc/111343/pub_5a3f6bfa8c8be3cc3fe2363e_5a3f6e0e799d9d2c5ca240cc/scale_1200',
         'price' => 45000000,
         'capacity' => 100,
         'fuselage' => 'narrow',
         'range' => 13620,
         'description' => 'Региональный пассажирский реактивный узкофюзеляжный самолёт',
         'bigdesc' => 'Bombardier CRJ — семейство региональных пассажирских реактивных узкофюзеляжных самолётов. Первый полёт самолет совершил 10 мая 1991 года. CRJ-100 стал первым самолётом современного уровня среди 50-местных машин. По скорости самолёт можно сравнивать и с более крупными машинами, в то время как его экономичность вполне соответствует классу. Среди других отличительных особенностей модели — шайбы (законцовки) Уиткомба. Семейство состоит из нескольких модификаций, отличающихся длиной фюзеляжа и дальностью полёта.',
         'begin' => 1991,
      ]);

      DB::table('planes')->insert([
         'name' => 'BCS 300',
         'manufacture' => 'Bombardier',
         'image' => 'https://www.theglobeandmail.com/resizer/h5s2pQKJtqzbDWkXlxD7cJFMKfE=/1200x0/filters:quality(80)/arc-anglerfish-tgam-prod-tgam.s3.amazonaws.com/public/ZA4R4B6P2FPVHOV275NADS5LWM.JPG',
         'price' => 87000000,
         'capacity' => 160,
         'fuselage' => 'narrow',
         'range' => 5000,
         'description' => 'Узкофюзеляжный пассажирский реактивный самолёт',
         'bigdesc' => 'Airbus A220, ранее известное как Bombardier CSeries (или же C Series) — семейство пассажирских узкофюзеляжных двухмоторных турбовентиляторных самолётов средней дальности, разработанное компанией Bombardier Aerospace. Airbus получил контрольный пакет акций (50,01 %) в программе CSeries в октябре 2017, сделка была завершена в июле 2018. Airbus планирует открыть вторую линию производства на своём авиационном подразделении Airbus Mobile в Мобиле, штат Алабама, США.',
         'begin' => 2013,
      ]);

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
            'name' => 'Embraer 175-E2',
            'manufacture' => 'Embraer',
            'image' => 'https://www.embraercommercialaviation.com/wp-content/uploads/2017/04/E175_Plus_Ground_04.jpg',
            'price' => 60000000,
            'capacity' => 90,
            'fuselage' => 'narrow',
            'range' => 3556,
            'description' => 'Узкофюзеляжный пассажирский реактивный самолёт',
            'bigdesc' => 'Cessna 208 Grand Caravan — американский лёгкий одномоторный турбовинтовой самолёт общего назначения с неубирающимся шасси. Выпускается компанией «Cessna» с 1984 года в различных модификациях (пассажирские, грузопассажирские, грузовые, самолёт-амфибия). Используется на авиалиниях малой протяжённости.',
            'begin' => 2015,
         ]);

         DB::table('planes')->insert([
            'name' => 'Embraer 195-E2',
            'manufacture' => 'Embraer',
            'image' => 'https://pbs.twimg.com/media/DaSudOqXkAAq3vQ.jpg',
            'price' => 70000000,
            'capacity' => 132,
            'fuselage' => 'narrow',
            'range' => 3704,
            'description' => 'Узкофюзеляжный пассажирский реактивный самолёт',
            'bigdesc' => 'Cessna 208 Grand Caravan — американский лёгкий одномоторный турбовинтовой самолёт общего назначения с неубирающимся шасси. Выпускается компанией «Cessna» с 1984 года в различных модификациях (пассажирские, грузопассажирские, грузовые, самолёт-амфибия). Используется на авиалиниях малой протяжённости.',
            'begin' => 2015,
         ]);

         DB::table('planes')->insert([
            'name' => 'Pilatus PC-12NGX',
            'manufacture' => 'Pilatus',
            'image' => 'https://cdn.avbuyer.com/live/uploads/rich_media/AvBuyer/2016_Pilatus_PC-12_NG_In_Flight_21.jpg',
            'price' => 5300000,
            'capacity' => 11,
            'fuselage' => 'narrow',
            'range' => 2000,
            'description' => 'Одномоторный турбовинтовой самолёт',
            'bigdesc' => 'Пилатус ПС-12 (англ. Pilatus PC-12) — одномоторный турбовинтовой самолёт, разработанный швейцарской компанией «Пилатус Эйркрафт». PC-12, как правило, используется в качестве корпоративного самолёта или регионального лайнера.',
            'begin' => 1991,
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
