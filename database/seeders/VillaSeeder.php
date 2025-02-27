<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $villas = [
            // South Africa (Africa)
            [
                'name' => 'Sunset Villa',
                'image' => 'assets/images/villa/africa/1.png',
                'address' => '123 Ocean Drive, Camps Bay, Cape Town 8005, South Africa',
                'price' => 1500.00,
                'bed_count' => 4,
                'bath_count' => 3,
                'guest_count' => 8,
                'country_id' => 1, // South Africa
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Ocean Breeze Villa',
                'image' => 'assets/images/villa/africa/2.png',
                'address' => '45 Victoria Road, Clifton, Cape Town 8005, South Africa',
                'price' => 1700.00,
                'bed_count' => 5,
                'bath_count' => 4,
                'guest_count' => 10,
                'country_id' => 1, // South Africa
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Savannah Retreat',
                'image' => 'assets/images/villa/africa/3.png',
                'address' => '78 Kruger Park Lane, Hoedspruit 1380, South Africa',
                'price' => 1400.00,
                'bed_count' => 4,
                'bath_count' => 3,
                'guest_count' => 8,
                'country_id' => 1, // South Africa
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Luxury Safari Lodge',
                'image' => 'assets/images/villa/africa/4.png',
                'address' => '16 Safari Road, Sabi Sands Game Reserve, Mpumalanga 1350, South Africa',
                'price' => 2500.00,
                'bed_count' => 6,
                'bath_count' => 5,
                'guest_count' => 12,
                'country_id' => 1, // South Africa
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Cape Town Bliss',
                'image' => 'assets/images/villa/africa/5.png',
                'address' => '291 Beach Boulevard, Sea Point, Cape Town 8001, South Africa',
                'price' => 2200.00,
                'bed_count' => 5,
                'bath_count' => 4,
                'guest_count' => 10,
                'country_id' => 1, // South Africa
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Luxury Vineyard Villa',
                'image' => 'assets/images/villa/africa/6.png',
                'address' => '42 Wine Estate Drive, Stellenbosch 7600, South Africa',
                'price' => 2800.00,
                'bed_count' => 6,
                'bath_count' => 5,
                'guest_count' => 12,
                'country_id' => 1, // South Africa
                'created_at' => $now,
                'updated_at' => $now,
            ],
            
            // Thailand
            [
                'name' => 'Tropical Paradise Villa',
                'image' => 'assets/images/villa/thailand/1.png',
                'address' => '15 Moo 3, Choeng Thale, Thalang District, Phuket 83110, Thailand',
                'price' => 1800.00,
                'bed_count' => 4,
                'bath_count' => 3,
                'guest_count' => 8,
                'country_id' => 5, // Thailand
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Ocean View Villa',
                'image' => 'assets/images/villa/thailand/2.png',
                'address' => '107/25 Moo 3, Kamala Beach, Kathu, Phuket 83150, Thailand',
                'price' => 2000.00,
                'bed_count' => 5,
                'bath_count' => 4,
                'guest_count' => 10,
                'country_id' => 5, // Thailand
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Zen Garden Villa',
                'image' => 'assets/images/villa/thailand/3.png',
                'address' => '84 Moo 4, Bophut, Koh Samui, Surat Thani 84320, Thailand',
                'price' => 1500.00,
                'bed_count' => 4,
                'bath_count' => 3,
                'guest_count' => 8,
                'country_id' => 5, // Thailand
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Luxury Thai Villa',
                'image' => 'assets/images/villa/thailand/4.png',
                'address' => '19/56 Soi Naya, Rawai, Mueang Phuket, Phuket 83130, Thailand',
                'price' => 2500.00,
                'bed_count' => 6,
                'bath_count' => 5,
                'guest_count' => 12,
                'country_id' => 5, // Thailand
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Mountain Retreat Villa',
                'image' => 'assets/images/villa/thailand/5.png',
                'address' => '121 Moo 1, Mae Rim, Chiang Mai 50180, Thailand',
                'price' => 2300.00,
                'bed_count' => 5,
                'bath_count' => 4,
                'guest_count' => 10,
                'country_id' => 5, // Thailand
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Beachfront Luxury Villa',
                'image' => 'assets/images/villa/thailand/6.png',
                'address' => '68/10 Moo 5, Ban Tai, Koh Phangan, Surat Thani 84280, Thailand',
                'price' => 2800.00,
                'bed_count' => 6,
                'bath_count' => 5,
                'guest_count' => 12,
                'country_id' => 5, // Thailand
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Seaside Villa',
                'image' => 'assets/images/villa/thailand/7.png',
                'address' => '56/24 Moo 6, Lamai Beach, Koh Samui, Surat Thani 84310, Thailand',
                'price' => 3000.00,
                'bed_count' => 7,
                'bath_count' => 6,
                'guest_count' => 14,
                'country_id' => 5, // Thailand
                'created_at' => $now,
                'updated_at' => $now,
            ],
            
            // Australia
            [
                'name' => 'Beachfront Villa',
                'image' => 'assets/images/villa/aus/1.png',
                'address' => '45 Hastings Street, Noosa Heads, Queensland 4567, Australia',
                'price' => 2000.00,
                'bed_count' => 5,
                'bath_count' => 4,
                'guest_count' => 10,
                'country_id' => 2, // Australia
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Outback Villa',
                'image' => 'assets/images/villa/aus/2.png',
                'address' => '78 Red Centre Way, Alice Springs, Northern Territory 0870, Australia',
                'price' => 1800.00,
                'bed_count' => 4,
                'bath_count' => 3,
                'guest_count' => 8,
                'country_id' => 2, // Australia
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Coastal Retreat Villa',
                'image' => 'assets/images/villa/aus/3.png',
                'address' => '23 Great Ocean Road, Apollo Bay, Victoria 3233, Australia',
                'price' => 2300.00,
                'bed_count' => 6,
                'bath_count' => 5,
                'guest_count' => 12,
                'country_id' => 2, // Australia
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Luxury Vineyard Villa',
                'image' => 'assets/images/villa/aus/4.png',
                'address' => '56 Vineyard Drive, Barossa Valley, South Australia 5352, Australia',
                'price' => 2500.00,
                'bed_count' => 6,
                'bath_count' => 5,
                'guest_count' => 12,
                'country_id' => 2, // Australia
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Island Escape Villa',
                'image' => 'assets/images/villa/aus/5.png',
                'address' => '17 Resort Drive, Hamilton Island, Queensland 4803, Australia',
                'price' => 3500.00,
                'bed_count' => 7,
                'bath_count' => 6,
                'guest_count' => 14,
                'country_id' => 2, // Australia
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Luxury Eco Villa',
                'image' => 'assets/images/villa/aus/6.png',
                'address' => '89 Rainforest Way, Daintree, Queensland 4873, Australia',
                'price' => 3000.00,
                'bed_count' => 6,
                'bath_count' => 5,
                'guest_count' => 12,
                'country_id' => 2, // Australia
                'created_at' => $now,
                'updated_at' => $now,
            ],
            
            // Spain
            [
                'name' => 'Mediterranean Villa',
                'image' => 'assets/images/villa/spain/1.png',
                'address' => 'Calle Palmera 25, Marbella, Málaga 29602, Spain',
                'price' => 1200.00,
                'bed_count' => 3,
                'bath_count' => 2,
                'guest_count' => 6,
                'country_id' => 3, // Spain
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Gothic Villa',
                'image' => 'assets/images/villa/spain/2.png',
                'address' => 'Carrer de Mallorca 401, Barcelona 08013, Spain',
                'price' => 1800.00,
                'bed_count' => 4,
                'bath_count' => 3,
                'guest_count' => 8,
                'country_id' => 3, // Spain
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Andalusian Villa',
                'image' => 'assets/images/villa/spain/3.png',
                'address' => 'Calle Castillo 8, Seville 41003, Spain',
                'price' => 1600.00,
                'bed_count' => 4,
                'bath_count' => 3,
                'guest_count' => 8,
                'country_id' => 3, // Spain
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Seaside Villa',
                'image' => 'assets/images/villa/spain/4.png',
                'address' => 'Paseo Maritimo 32, Ibiza Town 07800, Spain',
                'price' => 2500.00,
                'bed_count' => 6,
                'bath_count' => 5,
                'guest_count' => 12,
                'country_id' => 3, // Spain
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Hilltop Villa',
                'image' => 'assets/images/villa/spain/5.png',
                'address' => 'Calle Mirador 15, Granada 18010, Spain',
                'price' => 2200.00,
                'bed_count' => 5,
                'bath_count' => 4,
                'guest_count' => 10,
                'country_id' => 3, // Spain
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Spanish Colonial Villa',
                'image' => 'assets/images/villa/spain/6.png',
                'address' => 'Avenida de la Palmera 17, Córdoba 14011, Spain',
                'price' => 2800.00,
                'bed_count' => 6,
                'bath_count' => 5,
                'guest_count' => 12,
                'country_id' => 3, // Spain
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Modern Spanish Villa',
                'image' => 'assets/images/villa/spain/7.png',
                'address' => 'Calle Velázquez 48, Madrid 28001, Spain',
                'price' => 3000.00,
                'bed_count' => 7,
                'bath_count' => 6,
                'guest_count' => 14,
                'country_id' => 3, // Spain
                'created_at' => $now,
                'updated_at' => $now,
            ],
            
            // Switzerland (Switz)
            [
                'name' => 'Alpine Retreat Villa',
                'image' => 'assets/images/villa/swizz/1.png',
                'address' => '24 Dorfstrasse, Zermatt 3920, Switzerland',
                'price' => 2200.00,
                'bed_count' => 5,
                'bath_count' => 4,
                'guest_count' => 10,
                'country_id' => 4, // Switzerland
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Lakeview Villa',
                'image' => 'assets/images/villa/swizz/2.png',
                'address' => '78 Quai du Mont-Blanc, Geneva 1201, Switzerland',
                'price' => 2500.00,
                'bed_count' => 6,
                'bath_count' => 5,
                'guest_count' => 12,
                'country_id' => 4, // Switzerland
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Swiss Chalet Villa',
                'image' => 'assets/images/villa/swizz/3.png',
                'address' => '35 Promenade, Gstaad 3780, Switzerland',
                'price' => 2000.00,
                'bed_count' => 4,
                'bath_count' => 3,
                'guest_count' => 8,
                'country_id' => 4, // Switzerland
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Mountain View Villa',
                'image' => 'assets/images/villa/swizz/4.png',
                'address' => '42 Bergstrasse, Interlaken 3800, Switzerland',
                'price' => 2800.00,
                'bed_count' => 6,
                'bath_count' => 5,
                'guest_count' => 12,
                'country_id' => 4, // Switzerland
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Swiss Luxury Retreat',
                'image' => 'assets/images/villa/swizz/5.png',
                'address' => '19 Via Serlas, St. Moritz 7500, Switzerland',
                'price' => 3200.00,
                'bed_count' => 7,
                'bath_count' => 6,
                'guest_count' => 14,
                'country_id' => 4, // Switzerland
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Alpine Escape Villa',
                'image' => 'assets/images/villa/swizz/6.png',
                'address' => '56 Seestrasse, Lucerne 6003, Switzerland',
                'price' => 3500.00,
                'bed_count' => 7,
                'bath_count' => 6,
                'guest_count' => 14,
                'country_id' => 4, // Switzerland
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('villas')->insert($villas);
    }
    }

