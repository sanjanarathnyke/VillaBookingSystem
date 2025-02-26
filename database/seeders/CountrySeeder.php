<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $countries = [
            [
                'image' => 'assets/images/villa/countries/afrca.jpg',
                'name' => 'South Africa',
                'language_spoke' => 'Afrikaans, English, Zulu, Xhosa, and others',
                'capital' => 'Pretoria (administrative), Cape Town (legislative), Bloemfontein (judicial)',
                'currency' => 'South African Rand (ZAR)',
                'visa_requirements' => 'Visa requirements vary by nationality. Many Western countries can visit for up to 90 days without a visa. Other nationalities need to apply for a visa before arrival.',
                'area' => 1221037.00,
                'description' => 'South Africa, officially the Republic of South Africa, is the southernmost country in Africa. With diverse landscapes from coastal regions to mountains and savannas, it\'s known for its wildlife, wine regions, and cultural diversity. The country has 11 official languages and a rich history, including the legacy of apartheid and the leadership of Nelson Mandela.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'image' => 'assets/images/villa/countries/aus.png',
                'name' => 'Australia',
                'language_spoke' => 'English',
                'capital' => 'Canberra',
                'currency' => 'Australian Dollar (AUD)',
                'visa_requirements' => 'Most visitors require a visa or Electronic Travel Authority (ETA) before arrival. Working Holiday visas are available for citizens of certain countries aged 18-30.',
                'area' => 7692024.00,
                'description' => 'Australia is the world\'s sixth-largest country by total area, known for its natural wonders, wide-open spaces, beaches, deserts, and unique wildlife including kangaroos and koalas. The country has a diverse multicultural society, vibrant cities like Sydney and Melbourne, and iconic landmarks such as the Sydney Opera House and Great Barrier Reef.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'image' => 'assets/images/villa/countries/spain.png',
                'name' => 'Spain',
                'language_spoke' => 'Spanish (Castilian), Catalan, Galician, Basque',
                'capital' => 'Madrid',
                'currency' => 'Euro (EUR)',
                'visa_requirements' => 'EU citizens can enter freely. Non-EU visitors from many countries can stay up to 90 days within a 180-day period without a visa as part of the Schengen Agreement.',
                'area' => 505990.00,
                'description' => 'Spain is a diverse country with rich history, vibrant culture, and beautiful landscapes. Known for its passionate flamenco dancing, delicious cuisine including paella and tapas, world-famous festivals like La Tomatina and Running of the Bulls, and architectural marvels from Antoni Gaudí. Spain offers everything from Mediterranean beaches to mountain ranges and historic cities.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'image' => 'assets/images/villa/countries/swis.png',
                'name' => 'Switzerland',
                'language_spoke' => 'German, French, Italian, Romansh',
                'capital' => 'Bern',
                'currency' => 'Swiss Franc (CHF)',
                'visa_requirements' => 'EU/EFTA citizens can enter and stay without a visa. Most other nationalities can visit for up to 90 days without a visa if part of the Schengen Agreement. Longer stays require a visa or residence permit.',
                'area' => 41285.00,
                'description' => 'Switzerland is a landlocked country known for its stunning Alpine scenery, pristine lakes, picturesque villages, and world-class skiing. The country is famous for its political neutrality, banking system, luxury watches, and chocolate. With four national languages, Switzerland has a rich cultural diversity while maintaining high standards of living and infrastructure.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'image' => 'assets/images/villa/countries/thailand.png',
                'name' => 'Thailand',
                'language_spoke' => 'Thai',
                'capital' => 'Bangkok',
                'currency' => 'Thai Baht (THB)',
                'visa_requirements' => 'Many nationalities receive visa exemptions for stays of 30-90 days. Longer stays require tourist visas, which can be extended. Different visa types are available for various purposes including education, retirement, and business.',
                'area' => 513120.00,
                'description' => 'Thailand is a Southeast Asian country known for its tropical beaches, opulent royal palaces, ancient ruins, and ornate temples featuring Buddha figures. The capital Bangkok is a modern city with vibrant street life. Thailand is famous for its delicious cuisine, friendly people, affordable cost of living, and the perfect blend of traditional culture with modern amenities, making it a popular destination for tourists and expatriates.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('countries')->insert($countries);
    }
}
