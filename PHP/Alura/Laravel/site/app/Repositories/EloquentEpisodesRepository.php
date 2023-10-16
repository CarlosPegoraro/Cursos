<?php

namespace App\Repositories;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\EpisodesRepository;


class EloquentEpisodesRepository implements EpisodesRepository
{
  public function update(Request $request, Season $season) : string
  {
    return DB::transaction(function () use ($request, $season) {
      $watchedEpisodes = $request->episodes === null ? []: $request->episodes;

      $episodeIds = $season->episodes->pluck('id')->toArray();
      $unwatchedEpisodes = array_diff($episodeIds, $watchedEpisodes);

      Episode::whereIn('id', $watchedEpisodes)->update(['watched' => true]);
      Episode::whereIn('id', $unwatchedEpisodes)->update(['watched' => false]);

      // $returnEpisodes = implode(', ', $watchedEpisodes);
      $returnEpisodes = "Os episodios foram marcados com sucesso";
      return "{$returnEpisodes}";
    });
  }
}
