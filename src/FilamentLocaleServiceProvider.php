<?php

namespace Baleethai\FilamentLocale;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentLocaleServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-locale';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-locale' => __DIR__.'/../resources/dist/filament-locale.css',
    ];

    protected array $scripts = [
        'plugin-filament-locale' => __DIR__.'/../resources/dist/filament-locale.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-locale' => __DIR__ . '/../resources/dist/filament-locale.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
