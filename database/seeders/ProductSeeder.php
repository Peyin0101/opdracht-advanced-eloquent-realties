<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Wireless Mouse', 'description' => 'A high-precision wireless mouse with ergonomic design.'],
            ['name' => 'Bluetooth Speaker', 'description' => 'Portable Bluetooth speaker with excellent sound quality.'],
            ['name' => 'USB-C Hub', 'description' => 'Multi-port USB-C hub with HDMI, USB 3.0, and Ethernet ports.'],
            ['name' => 'Mechanical Keyboard', 'description' => 'Durable mechanical keyboard with customizable RGB lighting.'],
            ['name' => 'Noise Cancelling Headphones', 'description' => 'Over-ear headphones with active noise cancellation.'],
            ['name' => 'Smartwatch', 'description' => 'Smartwatch with fitness tracking and notifications.'],
            ['name' => 'External Hard Drive', 'description' => '1TB external hard drive with USB 3.0 connectivity.'],
            ['name' => 'Gaming Monitor', 'description' => '27-inch gaming monitor with 144Hz refresh rate.'],
            ['name' => 'Wireless Charger', 'description' => 'Fast wireless charger compatible with multiple devices.'],
            ['name' => 'Action Camera', 'description' => '4K action camera with waterproof casing.'],
            ['name' => 'Laptop Stand', 'description' => 'Adjustable laptop stand with cooling fan.'],
            ['name' => 'Portable SSD', 'description' => '500GB portable SSD with high-speed data transfer.'],
            ['name' => 'Smart Light Bulb', 'description' => 'Wi-Fi enabled smart light bulb with color changing feature.'],
            ['name' => 'Fitness Tracker', 'description' => 'Fitness tracker with heart rate monitor and sleep tracking.'],
            ['name' => 'Drone', 'description' => 'Compact drone with 4K camera and GPS.'],
            ['name' => 'VR Headset', 'description' => 'Virtual reality headset with immersive experience.'],
            ['name' => 'Electric Toothbrush', 'description' => 'Rechargeable electric toothbrush with multiple modes.'],
            ['name' => 'Robot Vacuum', 'description' => 'Smart robot vacuum cleaner with app control.'],
            ['name' => 'Smart Thermostat', 'description' => 'Wi-Fi enabled smart thermostat with energy-saving features.'],
            ['name' => 'E-Reader', 'description' => 'E-Reader with high-resolution display and adjustable light.'],
        ];

        foreach ($products as $productData) {
            $product = new Product();
            $product->name = $productData['name'];
            $product->description = $productData['description'];
            $product->save();
        }
    }
}
