<?php

namespace Database\Seeders;

use App\Models\Instrument;
use Illuminate\Database\Seeder;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $instruments = [
            [
                'name' => 'Yamaha F310 Gitar Akustik',
                'brand' => 'Yamaha',
                'price' => 1650000,
                'description' => 'Gitar akustik full size yang sangat populer untuk pemula maupun pemain 
                yang butuh gitar latihan andal. Body dreadnought menghasilkan suara yang penuh dan lantang, 
                dengan leher yang nyaman dimainkan dan finishing doff yang rapi.',
                'image' => 'yamaha_f310.jpg',
                'type' => 'Gitar Akustik',
            ],
            [
                'name' => 'Squier Stratocaster Gitar Elektrik',
                'brand' => 'Fender',
                'price' => 4500000,
                'description' => 'Gitar elektrik bergaya Stratocaster klasik dengan tiga pickup single-coil 
                yang menghasilkan suara jernih dan berkarakter. Cocok untuk berbagai genre mulai dari pop, 
                blues, hingga rock, serta nyaman dipakai manggung maupun latihan.',
                'image' => 'squeir.png',
                'type' => 'Gitar Elektrik',
            ],
            [
                'name' => 'Ibanez GSR200 Gitar Bass',
                'brand' => 'Ibanez',
                'price' => 4200000,
                'description' => 'Gitar bass 4 senar dengan body ramping dan ringan serta leher tipis yang 
                mudah dimainkan. Dilengkapi pickup aktif dan kontrol equalizer sehingga suara bass tetap 
                tebal dan jelas, cocok untuk band pemula hingga menengah.',
                'image' => 'ibanez.png',
                'type' => 'Gitar Bass',
            ],
            [
                'name' => 'Pearl Roadshow Drum Set 5 Piece',
                'brand' => 'Pearl',
                'price' => 9500000,
                'description' => 'Paket drum akustik lengkap yang terdiri dari bass drum, snare, tom, 
                floor tom, hardware, dan cymbal. Pilihan praktis bagi pemula yang ingin langsung bermain 
                dengan kualitas suara yang solid dan stabil.',
                'image' => 'pearl.jpg',
                'type' => 'Drum',
            ],
            [
                'name' => 'Roland FP-10 Digital Piano',
                'brand' => 'Roland',
                'price' => 9800000,
                'description' => 'Piano digital 88 tuts dengan sensasi tuts bobot (weighted) yang mendekati 
                piano akustik. Suaranya realistis, bodinya ringkas, dan mendukung koneksi Bluetooth MIDI 
                sehingga nyaman untuk belajar maupun tampil.',
                'image' => 'roland.webp',
                'type' => 'Keyboard',
            ],
            [
                'name' => 'Yamaha PSR-E373 Keyboard',
                'brand' => 'Yamaha',
                'price' => 4200000,
                'description' => 'Keyboard portabel 61 tuts dengan ratusan suara instrumen dan pilihan 
                style musik pengiring. Dilengkapi fitur belajar interaktif sehingga cocok untuk pelajar, 
                hobi di rumah, maupun kebutuhan ibadah dan acara kecil.',
                'image' => 'psr.jpg',
                'type' => 'Keyboard',
            ],
            [
                'name' => 'Boss Katana 50 MKII Amplifier',
                'brand' => 'Boss',
                'price' => 4900000,
                'description' => 'Amplifier gitar combo 50 watt dengan beragam karakter suara dan efek 
                bawaan. Satu amplifier untuk banyak gaya bermain, dari suara clean yang bersih hingga 
                distorsi yang tebal, sehingga fleksibel untuk latihan dan panggung.',
                'image' => 'boss_katana.webp',
                'type' => 'Amplifier',
            ],
            [
                'name' => 'Fender Frontman 10G Amplifier',
                'brand' => 'Fender',
                'price' => 1250000,
                'description' => 'Amplifier gitar berukuran kecil yang ideal untuk latihan di rumah. 
                Memiliki dua channel (clean dan overdrive), kontrol equalizer sederhana, serta colokan 
                headphone agar bisa bermain tanpa mengganggu sekitar.',
                'image' => 'fender.webp',
                'type' => 'Amplifier',
            ],
            [
                'name' => 'Yamaha YAS-280 Saxophone Alto',
                'brand' => 'Yamaha',
                'price' => 21500000,
                'description' => 'Saksofon alto tingkat pelajar yang dirancang agar mudah ditiup dan 
                menghasilkan nada yang stabil. Mekanik kunci yang responsif dan suara yang hangat membuatnya 
                menjadi pilihan favorit bagi pemain saksofon pemula.',
                'image' => 'yamaha_yas.jpeg',
                'type' => 'Alat Tiup',
            ],
            [
                'name' => 'Stentor Student I Violin 4/4',
                'brand' => 'Stentor',
                'price' => 2100000,
                'description' => 'Biola ukuran penuh 4/4 untuk pelajar, dijual dalam satu set bersama 
                busur dan case. Suaranya cukup merdu untuk latihan harian dan konstruksinya kokoh sehingga 
                cocok untuk siswa yang baru mulai belajar biola.',
                'image' => 'stento.jpg',
                'type' => 'Alat Gesek',
            ],
            [
                'name' => 'Cort Earth 70 Open Pore',
                'brand' => 'Cort',
                'price' => 2450000,
                'description' => 'Gitar akustik dengan top solid spruce yang menghasilkan resonansi suara lebih matang, hangat, dan jaringannya kuat untuk jangka panjang.',
                'image' => 'eart70.jpg',
                'type' => 'Gitar Akustik',
            ],
            [
                'name' => 'Takamine GD11MCE Acoustic-Electric',
                'brand' => 'Takamine',
                'price' => 3850000,
                'description' => 'Gitar akustik elektrik berbahan mahoni penuh dengan cutaway dan preamp TP-4T built-in yang praktis untuk performa panggung.',
                'image' => 'takamine.jpg',
                'type' => 'Gitar Akustik',
            ],
            [
                'name' => 'Epiphone Les Paul Standard',
                'brand' => 'Epiphone',
                'price' => 7800000,
                'description' => 'Gitar elektrik ikonik dengan bodi mahoni tebal dan pickup humbucker yang menghasilkan sustain panjang serta distorsi bertenaga.',
                'image' => 'epiphone.jpg',
                'type' => 'Gitar Elektrik',
            ],
            [
                'name' => 'Jackson JS22 Dinky',
                'brand' => 'Jackson',
                'price' => 4300000,
                'description' => 'Gitar elektrik dengan radius fretboard cepat dan pickup high-output humbucking, sangat ideal untuk genre musik rock cepat dan metal.',
                'image' => 'jacson.jpg',
                'type' => 'Gitar Elektrik',
            ],
            [
                'name' => 'Yamaha TRBX174 Bass Gitar',
                'brand' => 'Yamaha',
                'price' => 3100000,
                'description' => 'Bass elektrik 4 senar serbaguna dengan kombinasi pickup split-coil dan single-coil untuk fleksibilitas nada di berbagai genre musik.',
                'image' => 'yamaha_trbx.jpg',
                'type' => 'Gitar Bass',
            ],
            [
                'name' => 'Music Man StingRay Bass',
                'brand' => 'Music Man',
                'price' => 28000000,
                'description' => 'Gitar bass legendaris dengan pickup humbucker aktif yang menghasilkan karakter suara tebal, punchy, dan sangat ikonik di kancah musik profesional.',
                'image' => 'music_man.webp',
                'type' => 'Gitar Bass',
            ],
            [
                'name' => 'Roland TD-1DMK V-Drums',
                'brand' => 'Roland',
                'price' => 11200000,
                'description' => 'Drum elektrik dengan dual-ply mesh head ganda pada snare dan tom untuk pantulan stik yang realistis serta senyap saat latihan di rumah.',
                'image' => 'roland_td.jpg',
                'type' => 'Drum',
            ],
            [
                'name' => 'Yamaha Stage Custom Birch Drum Set',
                'brand' => 'Yamaha',
                'price' => 13500000,
                'description' => 'Drum akustik set berbahan kayu birch penuh yang menghasilkan suara bersih, attack yang tajam, serta sustain yang sangat seimbang.',
                'image' => 'yamaha_stage.jpg',
                'type' => 'Drum',
            ],
            [
                'name' => 'Casio CT-S1 Casiotone',
                'brand' => 'Casio',
                'price' => 2900000,
                'description' => 'Keyboard portabel minimalis berdesain modern dan elegan, menghadirkan suara berkualitas tinggi dalam bodi yang sangat ringkas dan ringan.',
                'image' => 'casio.jpg',
                'type' => 'Keyboard',
            ],
            [
                'name' => 'Korg B2 Digital Piano',
                'brand' => 'Korg',
                'price' => 6700000,
                'description' => 'Piano digital dengan tuts berbobot natural (NH), dilengkapi berbagai pilihan suara piano konser kelas dunia dan konektivitas USB audio/MIDI.',
                'image' => 'korg.png',
                'type' => 'Keyboard',
            ],
            [
                'name' => 'Jupiter JTR700 Trumpet',
                'brand' => 'Jupiter',
                'price' => 8900000,
                'description' => 'Trumpet standar berkualitas tinggi dengan intonasi yang akurat dan katup monel yang tahan lama, sangat bagus untuk siswa dan musisi orkestra.',
                'image' => 'jupiter_jtr.jpg',
                'type' => 'Alat Tiup',
            ],
            [
                'name' => 'Cremona SV-130 Violin Outfit 4/4',
                'brand' => 'Cremona',
                'price' => 3400000,
                'description' => 'Biola set pelajar dengan finishing transparan hangat, kayu tonewood pilihan, dan senar berkualitas untuk menghasilkan tone suara jernih.',
                'image' => 'cremona.jpg',
                'type' => 'Alat Gesek',
            ],
            [
                'name' => 'Fender CD-60S Dreadnought',
                'brand' => 'Fender',
                'price' => 2300000,
                'description' => 'Gitar akustik dengan bodi spruce solid yang memberikan suara cerah dan nyaman dimainkan untuk pemain dari berbagai tingkat keahlian.',
                'image' => 'fender.webp',
                'type' => 'Gitar Akustik',
            ],
            [
                'name' => 'Ibanez AW54OPN Artwood',
                'brand' => 'Ibanez',
                'price' => 3100000,
                'description' => 'Gitar akustik berseri Artwood dengan konstruksi mahoni penuh berpori terbuka, menghasilkan resonansi hangat dan natural.',
                'image' => 'ibanez_aw.jpg',
                'type' => 'Gitar Akustik',
            ],
            [
                'name' => 'PRS SE Custom 24',
                'brand' => 'PRS',
                'price' => 11500000,
                'description' => 'Gitar elektrik kelas atas dengan top maple yang indah, neck birdbeak yang nyaman, serta pickup 85/15 "S" untuk kejernihan suara maksimal.',
                'image' => 'prs_se.jpg',
                'type' => 'Gitar Elektrik',
            ],
            [
                'name' => 'Schecter Omen Extreme-6',
                'brand' => 'Schecter',
                'price' => 6900000,
                'description' => 'Gitar elektrik dengan bodi mahoni, top quilted maple yang elegan, serta pickup berdaya output tinggi untuk gaya musik rock dan metal.',
                'image' => 'schecter.jpg',
                'type' => 'Gitar Elektrik',
            ],
            [
                'name' => 'Fender Player Precision Bass',
                'brand' => 'Fender',
                'price' => 12800000,
                'description' => 'Bass legendaris 4 senar dengan pickup split single-coil berkarakter punchy yang mendominasi berbagai panggung musik dunia.',
                'image' => 'fender_player.jpg',
                'type' => 'Gitar Bass',
            ],
            [
                'name' => 'Warwick RockBass Corvette',
                'brand' => 'Warwick',
                'price' => 9400000,
                'description' => 'Bass elektrik ergonomis dengan bodi melengkung yang nyaman, menghadirkan suara growling khas yang sangat tajam dan bertenaga.',
                'image' => 'warwick.jpg',
                'type' => 'Gitar Bass',
            ],
            [
                'name' => 'Tama Imperialstar Drum Set',
                'brand' => 'Tama',
                'price' => 10500000,
                'description' => 'Paket drum akustik komplit berkualitas tinggi yang sudah termasuk perangkat keras (hardware) dan dudukan simbal yang kokoh.',
                'image' => 'tama.jpg',
                'type' => 'Drum',
            ],
            [
                'name' => 'Alesis Nitro Mesh Kit',
                'brand' => 'Alesis',
                'price' => 7500000,
                'description' => 'Set drum elektrik dengan head jaring (mesh heads) sepenuhnya yang senyap, responsif, serta dilengkapi modul suara kaya fitur.',
                'image' => 'alesis.jpg',
                'type' => 'Drum',
            ],
            [
                'name' => 'Yamaha P-125 Digital Piano',
                'brand' => 'Yamaha',
                'price' => 9200000,
                'description' => 'Piano digital portabel 88 tuts dengan sistemGraded Hammer Standard (GHS) untuk sensasi sentuhan akustik yang autentik.',
                'image' => 'yamaha_p125.jpg',
                'type' => 'Keyboard',
            ],
            [
                'name' => 'Korg Kross 2 Synthesizer',
                'brand' => 'Korg',
                'price' => 11000000,
                'description' => 'Workstation keyboard ringan portabel dengan ratusan suara instrumen pro, fitur perekam audio, dan dukungan tenaga baterai.',
                'image' => 'korg_kross.jpg',
                'type' => 'Keyboard',
            ],
            [
                'name' => 'Marshall MG15CF Amplifier',
                'brand' => 'Marshall',
                'price' => 2100000,
                'description' => 'Amplifier gitar kompak 15 watt dengan tata suara khas Marshall, memiliki channel clean dan overdrive serta input aux untuk backing track.',
                'image' => 'marshall__mg.jpg',
                'type' => 'Amplifier',
            ],
            [
                'name' => 'Yamaha YFL-222 Flute',
                'brand' => 'Yamaha',
                'price' => 11800000,
                'description' => 'Flute standar untuk pelajar yang dirancang presisi dari nikel-silver, memberikan respons tiupan yang ringan serta intonasi yang akurat.',
                'image' => 'yamaha_yfl.jpg',
                'type' => 'Alat Tiup',
            ],
        ];

        foreach ($instruments as $instrument) {
            Instrument::create($instrument);
        }
    }
}