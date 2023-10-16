<?php

namespace App\Providers;

use App\Repositories\EloquentEpisodesRepository;
use App\Repositories\EloquentSeriesRepository;
use App\Repositories\EpisodesRepository;
use App\Repositories\SeriesRepository;
use Illuminate\Support\ServiceProvider;

class SeriesRepositoryProvider extends ServiceProvider
{
    public array $bindings = [
      SeriesRepository::class => EloquentSeriesRepository::class,
      EpisodesRepository::class => EloquentEpisodesRepository::class
    ];
}
