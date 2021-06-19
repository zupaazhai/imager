<?php

namespace Zupaazhai\Imager;

use Illuminate\View\Compilers\BladeCompiler;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Zupaazhai\Imager\Commands\ImagerCommand;
use Zupaazhai\Imager\Components\Image;

class ImagerServiceProvider extends PackageServiceProvider
{
    /**
     * Get short name
     *
     * @return string
     */
    public function shortName(): string
    {
        return 'imager';
    }

    /**
     * Config package
     *
     * @param Package $package
     *
     * @return void
     */
    public function configurePackage(Package $package): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/imager.php', $this->shortName());

        $package
            ->name('imager')
            ->hasViews()
            ->hasConfigFile()
            ->hasCommand(ImagerCommand::class);

        $this->registerBladeComponent();
    }

    /**
     * Register blade component
     *
     * @return void
     */
    public function registerBladeComponent(): void
    {
        $config = config($this->shortName());

        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) use ($config) {
            $blade->component(Image::class, $config['name'], '');
        });
    }
}
