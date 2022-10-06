<?php

namespace ThiccPan\Larashipcost\Commands;

use Illuminate\Console\Command;

class LarashipcostCommand extends Command
{
    public $signature = 'larashipcost {command}';

    public $description = 'My command';

    public function handle(): string
    {
        $data = "success";
        return $data;
    }
}
