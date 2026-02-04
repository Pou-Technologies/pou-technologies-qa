<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            // Web Design
            ['name' => 'Landing Page', 'category' => 'Web Design', 'base_price' => 500, 'description' => 'Single page website with contact form, responsive design, and basic SEO.'],
            ['name' => 'Business Website (5 pages)', 'category' => 'Web Design', 'base_price' => 1200, 'description' => 'Professional multi-page website including Home, About, Services, Contact, and one custom page.'],
            ['name' => 'E-commerce Store', 'category' => 'Web Design', 'base_price' => 2500, 'description' => 'Full online store with product catalog, shopping cart, checkout, and payment processing.'],
            ['name' => 'Portfolio Website', 'category' => 'Web Design', 'base_price' => 800, 'description' => 'Elegant portfolio site to showcase your work with gallery and contact sections.'],

            // Development
            ['name' => 'Custom Web Application', 'category' => 'Development', 'base_price' => 5000, 'description' => 'Tailored web application built to your specifications with admin panel.'],
            ['name' => 'API Integration', 'category' => 'Development', 'base_price' => 750, 'description' => 'Connect your website with third-party services and APIs.'],
            ['name' => 'Database Design', 'category' => 'Development', 'base_price' => 600, 'description' => 'Custom database architecture and implementation.'],

            // Hosting
            ['name' => 'Basic Hosting (1 year)', 'category' => 'Hosting', 'base_price' => 150, 'description' => 'Reliable web hosting with SSL certificate, email, and basic support.'],
            ['name' => 'Premium Hosting (1 year)', 'category' => 'Hosting', 'base_price' => 300, 'description' => 'High-performance hosting with priority support, daily backups, and advanced security.'],
            ['name' => 'Domain Registration', 'category' => 'Hosting', 'base_price' => 25, 'description' => 'Register your custom domain name for one year.'],

            // Branding
            ['name' => 'Logo Design', 'category' => 'Branding', 'base_price' => 250, 'description' => '3 logo concepts with 2 revision rounds, delivered in multiple formats.'],
            ['name' => 'Brand Identity Package', 'category' => 'Branding', 'base_price' => 600, 'description' => 'Logo, color palette, typography, and brand guidelines document.'],

            // Marketing
            ['name' => 'Social Media Package (Monthly)', 'category' => 'Marketing', 'base_price' => 400, 'description' => 'Content creation, posting schedule, and engagement management.'],
            ['name' => 'SEO Basic (Monthly)', 'category' => 'Marketing', 'base_price' => 300, 'description' => 'On-page optimization, keyword research, and monthly reporting.'],
            ['name' => 'Google Ads Setup', 'category' => 'Marketing', 'base_price' => 350, 'description' => 'Campaign setup, keyword targeting, and conversion tracking configuration.'],

            // Support
            ['name' => 'Maintenance Retainer (Monthly)', 'category' => 'Support', 'base_price' => 100, 'description' => 'Regular updates, security patches, and up to 2 hours of support.'],
            ['name' => 'Emergency Support (Hourly)', 'category' => 'Support', 'base_price' => 75, 'description' => 'Urgent technical support and troubleshooting.'],
            ['name' => 'Training Session (1 hour)', 'category' => 'Support', 'base_price' => 50, 'description' => 'One-on-one training on how to manage your website.'],
        ];

        foreach ($services as $index => $service) {
            Service::firstOrCreate(
                ['name' => $service['name']],
                array_merge($service, ['sort_order' => $index])
            );
        }
    }
}
