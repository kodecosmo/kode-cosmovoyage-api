<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        // Create the required the databse if not exists and the tables.
        $this->call('migrate:refresh');

        // Seeding fake/dummy data
        $this->call('db:seed');

        // Clear the configurations
        $this->call('config:clear');
        
        // Caching configurations
        $this->call('config:cache');
        
        // Caching events
        $this->call('event:cache');
        
        // Caching routes
        $this->call('route:cache');
        
        // Caching views
        $this->call('view:cache');
        
        // Create an admin account
        $this->call('app:create-admin-account');

        // Create an user account
        $this->call('app:create-user-account');
    }
}
