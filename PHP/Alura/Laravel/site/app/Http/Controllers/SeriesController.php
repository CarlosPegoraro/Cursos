<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Season;
use Illuminate\Http\Request;

use App\Models\Series;
use App\Models\Episode;

class SeriesController extends Controller
{
  public function index()
  {
    $series = Series::all();
    $successMessage = session("success.message");

    return view("series.index")->with("series", $series)->with("successMessage", $successMessage);
  }
  public function create()
  {
    return view("series.create");
  }
  public function store(SeriesFormRequest $request)
  {
    $series = Series::create($request->all());
    $seasons = [];
    for ($i = 1; $i <= $request->seasonQty; $i++) {
      $seasons[] = [
        'series_id' => $series->id,
        'number' => $i,
      ];
    }
    Season::insert($seasons);

    $episodes = [];
    foreach ($series->seasons as $season) {
      for ($j = 1; $j <= $request->episodesPerSeason; $j++) {
        $episodes[] = [
          'season_id' => $season->id,
          'number' => $j
        ];
      }
    }
    Episode::insert($episodes);

    return to_route("series.index")->with("success.message", "{$series->name} foi adicionada com sucesso");
  }
  public function destroy(Series $series)
  {

    $series->delete();

    return to_route("series.index")->with("success.message", "{$series->name} foi removida com sucesso");
  }
  public function edit(Series $series)
  {
    return view("series.edit")->with("serie", $series);
  }
  public function update(Series $series, SeriesFormRequest $request)
  {
    $series->fill($request->all());
    $series->save();

    return to_route("series.index")->with("success.message", "Serie {$series->name} atualizada com sucesso");
  }
}
