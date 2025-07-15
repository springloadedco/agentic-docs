<?php

namespace Springloaded\AgenticDocs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Springloaded\AgenticDocs\Commands\AgenticDocsCommand;

class AgenticDocsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('agentic-docs')
            ->hasConfigFile()
            ->hasCommand(AgenticDocsCommand::class);
    }
}
