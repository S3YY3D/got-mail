<?php

namespace App\Console\Commands;

use App\Models\Contact;
use Illuminate\Console\Command;

class CheckDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check database for contacts with empty phone values';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $contacts = Contact::whereNull('phone')->orWhere('phone', '')->get();

        if ($contacts->isEmpty()) {
            $this->info('No contacts with empty phone values found.');
        } else {
            $this->info('Contacts with empty phone values:');
            foreach ($contacts as $contact) {
                $this->line("{$contact->first_name}");
            }
        }
    }
}
