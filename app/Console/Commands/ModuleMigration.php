<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ModuleMigration extends Command
{
    protected $signature = 'migrate:modules';

    protected $description = 'Run Database Migrations';

    public function handle(): void
    {
        $this->info('HEHEHE');
    }
}
