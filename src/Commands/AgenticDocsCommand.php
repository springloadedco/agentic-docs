<?php

namespace Springloaded\AgenticDocs\Commands;

use Illuminate\Console\Command;

class AgenticDocsCommand extends Command
{
    public $signature = 'agentic-docs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
