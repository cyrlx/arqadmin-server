<?php

namespace ArqAdmin\Providers;

use Illuminate\Support\ServiceProvider;

class ArqAdminRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \ArqAdmin\Repositories\DocumentoRepository::class,
            \ArqAdmin\Repositories\DocumentoRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\FundoRepository::class,
            \ArqAdmin\Repositories\FundoRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\SubfundoRepository::class,
            \ArqAdmin\Repositories\SubfundoRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\GrupoRepository::class,
            \ArqAdmin\Repositories\GrupoRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\SubgrupoRepository::class,
            \ArqAdmin\Repositories\SubgrupoRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\SerieRepository::class,
            \ArqAdmin\Repositories\SerieRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\SubserieRepository::class,
            \ArqAdmin\Repositories\SubserieRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\DossieRepository::class,
            \ArqAdmin\Repositories\DossieRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\AcervoRepository::class,
            \ArqAdmin\Repositories\AcervoRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\ConservacaoRepository::class,
            \ArqAdmin\Repositories\ConservacaoRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\LcAcondicionamentoRepository::class,
            \ArqAdmin\Repositories\LcAcondicionamentoRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\LcCompartimentoRepository::class,
            \ArqAdmin\Repositories\LcCompartimentoRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\EspeciedocumentalRepository::class,
            \ArqAdmin\Repositories\EspeciedocumentalRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\LcMovelRepository::class,
            \ArqAdmin\Repositories\LcMovelRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\LcSalaRepository::class,
            \ArqAdmin\Repositories\LcSalaRepositoryEloquent::class
        );

        $this->app->bind(
            \ArqAdmin\Repositories\DtUsoRepository::class,
            \ArqAdmin\Repositories\DtUsoRepositoryEloquent::class
        );

    }
}
