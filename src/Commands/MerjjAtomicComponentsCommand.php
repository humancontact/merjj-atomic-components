<?php

namespace Humancontact\MerjjAtomicComponents\Commands;

use Illuminate\Console\Command;

class MerjjAtomicComponentsCommand extends Command
{
    public $signature = 'merjj-atomic-components';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
