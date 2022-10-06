<?php

namespace ThiccPan\Larashipcost\Commands;

use Illuminate\Console\Command;

class LarashipcostCommand extends Command
{
    public $signature = 'larashipcost';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
