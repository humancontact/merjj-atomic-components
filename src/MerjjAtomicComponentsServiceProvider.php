<?php

namespace Humancontact\MerjjAtomicComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Humancontact\MerjjAtomicComponents\Commands\MerjjAtomicComponentsCommand;

class MerjjAtomicComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('merjj-atomic-components')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_merjj-atomic-components_table')
            ->hasCommand(MerjjAtomicComponentsCommand::class);
    }
}
