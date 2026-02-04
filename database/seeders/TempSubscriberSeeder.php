<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Subscriber;

class TempSubscriberSeeder extends Seeder
{
    public function run()
    {
        User::all()->each(function ($user) {
            // Check if user already has subscribers to avoid duplicates if run multiple times
            if (Subscriber::where('user_id', $user->id)->count() == 0) {
                Subscriber::create([
                    'user_id' => $user->id,
                    'name' => 'Fan of ' . $user->name,
                    'email' => 'fan_' . $user->id . '@example.com',
                ]);
            }
        });
    }
}
