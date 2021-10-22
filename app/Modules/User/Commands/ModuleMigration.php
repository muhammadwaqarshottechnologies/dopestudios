<?php

namespace App\Modules\User\Commands;

use Illuminate\Console\Command;

class ModuleMigration extends Command
{
    protected $signature = 'migrate:user';

    protected $description = 'Run Database Migrations';

    public function handle(): void
    {
        $this->info('HEHEHE');
    }
}
