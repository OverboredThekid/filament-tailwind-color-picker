<?php

namespace HappyToDev\FilamentTailwindColorPicker;

use Filament\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentTailwindColorPickerServiceProvider extends PackageServiceProvider
{
    public static string $name = 'Filament-Tailwind-Color-Picker';
    
    // To add needed styles to the backend
    protected array $styles = [
        'filament-tailwind-color-picker-styles' => __DIR__.'/../resources/dist/ftcp.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews()
            ->hasAssets();
    }
}
