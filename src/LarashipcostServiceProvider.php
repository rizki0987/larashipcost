<?php

namespace ThiccPan\Larashipcost;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ThiccPan\Larashipcost\Commands\LarashipcostCommand;

class LarashipcostServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larashipcost')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larashipcost_table')
            ->hasCommand(LarashipcostCommand::class);
    }
}
