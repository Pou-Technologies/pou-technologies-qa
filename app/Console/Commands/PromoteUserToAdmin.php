<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PromoteUserToAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:promote {email}';

    protected $description = 'Promote a user to the admin role';

    public function handle()
    {
        $user = \App\Models\User::where('email', $this->argument('email'))->first();

        if (!$user) {
            $this->error('User not found.');
            return;
        }

        $user->update(['role' => 'admin']);
        $this->info("User {$user->email} promoted to admin successfully.");
    }
}
