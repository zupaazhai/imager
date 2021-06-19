<?php

namespace Zupaazhai\Imager\Commands;

use Illuminate\Console\Command;

class ImagerCommand extends Command
{
    public $signature = 'imager';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
