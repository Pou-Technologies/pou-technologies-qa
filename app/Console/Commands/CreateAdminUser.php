<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create-admin {name} {email} {password}';

    protected $description = 'Create an initial admin user for the platform';

    public function handle()
    {
        $user = \App\Models\User::create([
            'name' => $this->argument('name'),
            'email' => $this->argument('email'),
            'password' => \Illuminate\Support\Facades\Hash::make($this->argument('password')),
            'role' => 'admin',
        ]);

        $this->info("Admin user {$user->email} created successfully.");
    }
}
