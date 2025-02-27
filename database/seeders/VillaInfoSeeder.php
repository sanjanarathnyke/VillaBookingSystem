<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillaInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $villaInfo = [
            ['villa_id' => 33, 'fun_discovery' => 'Surrounded by lush greenery, perfect for relaxation.', 'amenities' => 'Pool, WiFi, Air Conditioning', 'overview' => 'A peaceful retreat surrounded by nature.'],
            ['villa_id' => 34, 'fun_discovery' => 'A modern villa with a breathtaking mountain view.', 'amenities' => 'Smart TV, Gym, Private Parking', 'overview' => 'A luxurious escape with panoramic mountain scenery.'],
            ['villa_id' => 35, 'fun_discovery' => 'Enjoy a peaceful stay by the ocean with direct beach access.', 'amenities' => 'Oceanfront, Infinity Pool, BBQ Grill', 'overview' => 'A dream beachfront getaway with stunning ocean views.'],
            ['villa_id' => 36, 'fun_discovery' => 'A hidden paradise with stunning waterfall views.', 'amenities' => 'Hot Tub, Private Garden, Workspace', 'overview' => 'A tranquil villa nestled near a natural waterfall.'],
            ['villa_id' => 37, 'fun_discovery' => 'Perfect for adventure lovers, located near hiking trails.', 'amenities' => 'Fireplace, Mini Bar, Game Room', 'overview' => 'An adventure-seeker’s paradise near nature trails.'],
            ['villa_id' => 38, 'fun_discovery' => 'Luxury villa with a private rooftop lounge.', 'amenities' => 'Rooftop Bar, Home Theater, Spa', 'overview' => 'An exclusive rooftop retreat with premium amenities.'],
            ['villa_id' => 39, 'fun_discovery' => 'A historic villa with an elegant architectural design.', 'amenities' => 'Library, Wine Cellar, Art Gallery', 'overview' => 'A timeless masterpiece showcasing historical elegance.'],
            ['villa_id' => 40, 'fun_discovery' => 'Experience the charm of countryside living.', 'amenities' => 'Farm Access, Horse Riding, Outdoor Firepit', 'overview' => 'A cozy countryside villa offering a rural retreat.'],
            ['villa_id' => 41, 'fun_discovery' => 'Ideal for honeymooners seeking a romantic escape.', 'amenities' => 'Candlelit Dinners, Jacuzzi, Couples Spa', 'overview' => 'A romantic hideaway perfect for couples.'],
            ['villa_id' => 42, 'fun_discovery' => 'An eco-friendly villa powered by renewable energy.', 'amenities' => 'Solar Power, Rainwater Harvesting, Organic Garden', 'overview' => 'A sustainable retreat focused on green living.'],
            ['villa_id' => 43, 'fun_discovery' => 'A beachside villa offering stunning sunset views.', 'amenities' => 'Beachfront, Kayaking, Snorkeling', 'overview' => 'A serene beachfront villa with incredible sunsets.'],
            ['villa_id' => 44, 'fun_discovery' => 'A luxurious escape with a floating infinity pool.', 'amenities' => 'Infinity Pool, Private Butler, Helicopter Access', 'overview' => 'An ultra-luxury villa floating over water.'],
            ['villa_id' => 45, 'fun_discovery' => 'A remote retreat in the heart of the jungle.', 'amenities' => 'Treehouse, Wildlife Tours, Nature Trails', 'overview' => 'An adventurous stay deep within the jungle.'],
            ['villa_id' => 46, 'fun_discovery' => 'A perfect blend of traditional and modern architecture.', 'amenities' => 'Courtyard, Antique Decor, Cultural Workshops', 'overview' => 'A cultural gem merging old-world charm with luxury.'],
            ['villa_id' => 47, 'fun_discovery' => 'A yacht villa offering direct access to the sea.', 'amenities' => 'Private Dock, Yacht Rental, Deep-Sea Fishing', 'overview' => 'A premium villa with a marina lifestyle.'],
            ['villa_id' => 48, 'fun_discovery' => 'A golf lover’s paradise with a private course.', 'amenities' => 'Golf Course, Tennis Court, Clubhouse', 'overview' => 'A golfer’s dream villa with exclusive amenities.'],
            ['villa_id' => 49, 'fun_discovery' => 'A snow retreat with private skiing access.', 'amenities' => 'Ski-in/Ski-out, Heated Floors, Sauna', 'overview' => 'A winter wonderland perfect for ski lovers.'],
            ['villa_id' => 50, 'fun_discovery' => 'A modern glass villa with a panoramic city view.', 'amenities' => 'Sky Lounge, Rooftop Jacuzzi, Concierge Service', 'overview' => 'A luxury high-rise villa with stunning city views.'],
            ['villa_id' => 51, 'fun_discovery' => 'A tropical escape with a hidden lagoon.', 'amenities' => 'Lagoon Access, Hammocks, Outdoor Showers', 'overview' => 'A hidden tropical sanctuary with a private lagoon.'],
            ['villa_id' => 52, 'fun_discovery' => 'A vineyard villa perfect for wine lovers.', 'amenities' => 'Wine Tasting, Private Vineyard, Cellar', 'overview' => 'A vineyard retreat for wine enthusiasts.'],
            ['villa_id' => 53, 'fun_discovery' => 'A castle-inspired villa for a royal experience.', 'amenities' => 'Grand Hall, Chandeliers, Medieval Decor', 'overview' => 'A regal experience in a castle-style villa.'],
            ['villa_id' => 54, 'fun_discovery' => 'A cliffside villa with breathtaking ocean views.', 'amenities' => 'Infinity Pool, Outdoor Cinema, Spa', 'overview' => 'A scenic getaway perched atop an ocean cliff.'],
            ['villa_id' => 55, 'fun_discovery' => 'A villa floating on a lake for a unique stay.', 'amenities' => 'Boat Rental, Fishing Deck, Sunset View', 'overview' => 'A floating retreat with spectacular lake views.'],
            ['villa_id' => 56, 'fun_discovery' => 'A futuristic villa with smart automation.', 'amenities' => 'Voice Control, Automated Lights, AI Butler', 'overview' => 'A cutting-edge smart villa with AI features.'],
            ['villa_id' => 57, 'fun_discovery' => 'A historical mansion with a secret underground lounge.', 'amenities' => 'Wine Cellar, Hidden Library, Fireplaces', 'overview' => 'A vintage mansion with a touch of mystery.'],
            ['villa_id' => 58, 'fun_discovery' => 'A biker’s villa with a private garage.', 'amenities' => 'Bike Rental, Garage, Racing Simulators', 'overview' => 'Designed for bike enthusiasts with a passion for adventure.'],
            ['villa_id' => 59, 'fun_discovery' => 'Surrounded by lush greenery, perfect for relaxation.', 'amenities' => 'Pool, WiFi, Air Conditioning', 'overview' => 'A peaceful retreat surrounded by nature.'],
            ['villa_id' => 60, 'fun_discovery' => 'A modern villa with a breathtaking mountain view.', 'amenities' => 'Smart TV, Gym, Private Parking', 'overview' => 'A luxurious escape with panoramic mountain scenery.'],
            ['villa_id' => 61, 'fun_discovery' => 'Enjoy a peaceful stay by the ocean with direct beach access.', 'amenities' => 'Oceanfront, Infinity Pool, BBQ Grill', 'overview' => 'A dream beachfront getaway with stunning ocean views.'],
            ['villa_id' => 62, 'fun_discovery' => 'A hidden paradise with stunning waterfall views.', 'amenities' => 'Hot Tub, Private Garden, Workspace', 'overview' => 'A tranquil villa nestled near a natural waterfall.'],
            ['villa_id' => 63, 'fun_discovery' => 'Perfect for adventure lovers, located near hiking trails.', 'amenities' => 'Fireplace, Mini Bar, Game Room', 'overview' => 'An adventure-seeker’s paradise near nature trails.'],
            ['villa_id' => 64, 'fun_discovery' => 'Luxury villa with a private rooftop lounge.', 'amenities' => 'Rooftop Bar, Home Theater, Spa', 'overview' => 'An exclusive rooftop retreat with premium amenities.'],
            ['villa_id' => 65, 'fun_discovery' => 'A historic villa with an elegant architectural design.', 'amenities' => 'Library, Wine Cellar, Art Gallery', 'overview' => 'A timeless masterpiece showcasing historical elegance.'],
            ['villa_id' => 66, 'fun_discovery' => 'Experience the charm of countryside living.', 'amenities' => 'Farm Access, Horse Riding, Outdoor Firepit', 'overview' => 'A cozy countryside villa offering a rural retreat.'],
            ['villa_id' => 67, 'fun_discovery' => 'Ideal for honeymooners seeking a romantic escape.', 'amenities' => 'Candlelit Dinners, Jacuzzi, Couples Spa', 'overview' => 'A romantic hideaway perfect for couples.'],
            ['villa_id' => 68, 'fun_discovery' => 'An eco-friendly villa powered by renewable energy.', 'amenities' => 'Solar Power, Rainwater Harvesting, Organic Garden', 'overview' => 'A sustainable retreat focused on green living.'],
            ['villa_id' => 69, 'fun_discovery' => 'A beachside villa offering stunning sunset views.', 'amenities' => 'Beachfront, Kayaking, Snorkeling', 'overview' => 'A serene beachfront villa with incredible sunsets.'],
            ['villa_id' => 70, 'fun_discovery' => 'A luxurious escape with a floating infinity pool.', 'amenities' => 'Infinity Pool, Private Butler, Helicopter Access', 'overview' => 'An ultra-luxury villa floating over water.'],
            ['villa_id' => 71, 'fun_discovery' => 'A remote retreat in the heart of the jungle.', 'amenities' => 'Treehouse, Wildlife Tours, Nature Trails', 'overview' => 'An adventurous stay deep within the jungle.'],
            ['villa_id' => 72, 'fun_discovery' => 'A perfect blend of traditional and modern architecture.', 'amenities' => 'Courtyard, Antique Decor, Cultural Workshops', 'overview' => 'A cultural gem merging old-world charm with luxury.'],
            ['villa_id' => 73, 'fun_discovery' => 'A yacht villa offering direct access to the sea.', 'amenities' => 'Private Dock, Yacht Rental, Deep-Sea Fishing', 'overview' => 'A premium villa with a marina lifestyle.'],
            ['villa_id' => 74, 'fun_discovery' => 'A golf lover’s paradise with a private course.', 'amenities' => 'Golf Course, Tennis Court, Clubhouse', 'overview' => 'A golfer’s dream villa with exclusive amenities.'],
            ['villa_id' => 75, 'fun_discovery' => 'A snow retreat with private skiing access.', 'amenities' => 'Ski-in/Ski-out, Heated Floors, Sauna', 'overview' => 'A winter wonderland perfect for ski lovers.'],
            ['villa_id' => 76, 'fun_discovery' => 'A modern glass villa with a panoramic city view.', 'amenities' => 'Sky Lounge, Rooftop Jacuzzi, Concierge Service', 'overview' => 'A luxury high-rise villa with stunning city views.'],
            ['villa_id' => 77, 'fun_discovery' => 'A tropical escape with a hidden lagoon.', 'amenities' => 'Lagoon Access, Hammocks, Outdoor Showers', 'overview' => 'A hidden tropical sanctuary with a private lagoon.'],
            ['villa_id' => 78, 'fun_discovery' => 'A vineyard villa perfect for wine lovers.', 'amenities' => 'Wine Tasting, Private Vineyard, Cellar', 'overview' => 'A vineyard retreat for wine enthusiasts.'],
            ['villa_id' => 79, 'fun_discovery' => 'A castle-inspired villa for a royal experience.', 'amenities' => 'Grand Hall, Chandeliers, Medieval Decor', 'overview' => 'A regal experience in a castle-style villa.'],
            ['villa_id' => 80, 'fun_discovery' => 'A cliffside villa with breathtaking ocean views.', 'amenities' => 'Infinity Pool, Outdoor Cinema, Spa', 'overview' => 'A scenic getaway perched atop an ocean cliff.'],
            ['villa_id' => 81, 'fun_discovery' => 'A villa floating on a lake for a unique stay.', 'amenities' => 'Boat Rental, Fishing Deck, Sunset View', 'overview' => 'A floating retreat with spectacular lake views.'],
            ['villa_id' => 82, 'fun_discovery' => 'A futuristic villa with smart automation.', 'amenities' => 'Voice Control, Automated Lights, AI Butler', 'overview' => 'A cutting-edge smart villa with AI features.'],
            ['villa_id' => 83, 'fun_discovery' => 'A historical mansion with a secret underground lounge.', 'amenities' => 'Wine Cellar, Hidden Library, Fireplaces', 'overview' => 'A vintage mansion with a touch of mystery.'],
            ['villa_id' => 84, 'fun_discovery' => 'A biker’s villa with a private garage.', 'amenities' => 'Bike Rental, Garage, Racing Simulators', 'overview' => 'Designed for bike enthusiasts with a passion for adventure.'],
            ['villa_id' => 85, 'fun_discovery' => 'Surrounded by lush greenery, perfect for relaxation.', 'amenities' => 'Pool, WiFi, Air Conditioning', 'overview' => 'A peaceful retreat surrounded by nature.'],
            ['villa_id' => 86, 'fun_discovery' => 'A modern villa with a breathtaking mountain view.', 'amenities' => 'Smart TV, Gym, Private Parking', 'overview' => 'A luxurious escape with panoramic mountain scenery.'],
            ['villa_id' => 87, 'fun_discovery' => 'Enjoy a peaceful stay by the ocean with direct beach access.', 'amenities' => 'Oceanfront, Infinity Pool, BBQ Grill', 'overview' => 'A dream beachfront getaway with stunning ocean views.'],
            ['villa_id' => 88, 'fun_discovery' => 'A hidden paradise with stunning waterfall views.', 'amenities' => 'Hot Tub, Private Garden, Workspace', 'overview' => 'A tranquil villa nestled near a natural waterfall.'],
            ['villa_id' => 89, 'fun_discovery' => 'Perfect for adventure lovers, located near hiking trails.', 'amenities' => 'Fireplace, Mini Bar, Game Room', 'overview' => 'An adventure-seeker’s paradise near nature trails.'],
            ['villa_id' => 90, 'fun_discovery' => 'Luxury villa with a private rooftop lounge.', 'amenities' => 'Rooftop Bar, Home Theater, Spa', 'overview' => 'An exclusive rooftop retreat with premium amenities.'],
            ['villa_id' => 91, 'fun_discovery' => 'A historic villa with an elegant architectural design.', 'amenities' => 'Library, Wine Cellar, Art Gallery', 'overview' => 'A timeless masterpiece showcasing historical elegance.'],
            ['villa_id' => 92, 'fun_discovery' => 'Experience the charm of countryside living.', 'amenities' => 'Farm Access, Horse Riding, Outdoor Firepit', 'overview' => 'A cozy countryside villa offering a rural retreat.'],
            ['villa_id' => 93, 'fun_discovery' => 'Ideal for honeymooners seeking a romantic escape.', 'amenities' => 'Candlelit Dinners, Jacuzzi, Couples Spa', 'overview' => 'A romantic hideaway perfect for couples.'],
            ['villa_id' => 94, 'fun_discovery' => 'An eco-friendly villa powered by renewable energy.', 'amenities' => 'Solar Power, Rainwater Harvesting, Organic Garden', 'overview' => 'A sustainable retreat focused on green living.'],
            ['villa_id' => 95, 'fun_discovery' => 'A beachside villa offering stunning sunset views.', 'amenities' => 'Beachfront, Kayaking, Snorkeling', 'overview' => 'A serene beachfront villa with incredible sunsets.'],
            ['villa_id' => 96, 'fun_discovery' => 'A luxurious escape with a floating infinity pool.', 'amenities' => 'Infinity Pool, Private Butler, Helicopter Access', 'overview' => 'An ultra-luxury villa floating over water.'],
        ];

        DB::table('villainfo')->insert($villaInfo);
    }
}
