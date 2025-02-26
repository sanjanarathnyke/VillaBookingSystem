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
                'description_about' => 'A luxurious villa with ocean views, perfect for a relaxing vacation in South Africa.',
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
                'description_about' => 'A beautiful villa surrounded by nature, offering a serene escape in South Africa.',
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
                'description_about' => 'Nestled in the heart of the savannah, this villa provides a unique experience in South Africa.',
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
                'description_about' => 'A private safari lodge offering luxury and adventure in the wilds of South Africa.',
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
                'description_about' => 'A beachfront villa in Cape Town, offering breathtaking views and premium amenities.',
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
                'description_about' => 'Surrounded by vineyards, this luxurious villa provides an unforgettable experience in South Africa.',
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
                'description_about' => 'This villa offers a tropical getaway with modern amenities in beautiful Thailand.',
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
                'description_about' => 'A villa by the beach with stunning ocean views and a perfect place to relax in Thailand.',
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
                'description_about' => 'This peaceful villa is set in a lush garden, offering a tranquil retreat in Thailand.',
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
                'description_about' => 'A luxury villa offering high-end amenities and exquisite views in Thailand.',
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
                'description_about' => 'Nestled in the mountains, this villa offers a stunning retreat in Thailand.',
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
                'description_about' => 'Enjoy ultimate luxury by the beach in this stunning villa in Thailand.',
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
                'description_about' => 'A seaside villa offering an unforgettable experience with panoramic views of the ocean.',
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
                'description_about' => 'Located near the famous beaches of Australia, this villa offers stunning views and luxurious amenities.',
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
                'description_about' => 'An amazing villa located in the heart of the Australian Outback with a unique experience.',
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
                'description_about' => 'A coastal retreat villa offering a perfect blend of luxury and nature in Australia.',
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
                'description_about' => 'A wine lover’s dream, this villa is located near Australia’s famous vineyards.',
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
                'description_about' => 'A private island villa offering luxurious seclusion and breathtaking ocean views.',
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
                'description_about' => 'An eco-friendly luxury villa with sustainable features in Australia.',
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
                'description_about' => 'A charming villa with a Mediterranean feel, perfect for a holiday in Spain.',
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
                'description_about' => 'A gothic-inspired villa in the heart of Spain with stunning architectural details.',
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
                'description_about' => 'A traditional Andalusian villa with a mix of modern amenities and historic charm.',
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
                'description_about' => 'A luxurious seaside villa with breathtaking views of the Spanish coastline.',
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
                'description_about' => 'Perched on a hill, this villa offers stunning views and luxurious comfort.',
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
                'description_about' => 'A stunning Spanish colonial villa with historic charm and modern luxury.',
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
                'description_about' => 'A sleek modern villa combining contemporary design with traditional Spanish elements.',
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
                'description_about' => 'A luxury retreat in the Swiss Alps, perfect for winter vacations and skiing.',
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
                'description_about' => 'A charming villa overlooking Lake Geneva with panoramic views.',
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
                'description_about' => 'A cozy Swiss chalet villa with rustic charm and modern amenities.',
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
                'description_about' => 'A luxurious villa with breathtaking views of the Swiss Alps.',
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
                'description_about' => 'A high-end luxury villa in the heart of the Swiss Alps.',
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
                'description_about' => 'An alpine escape villa offering total privacy and serenity in the Swiss mountains.',
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

