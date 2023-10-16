<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;

use App\Models\Series;
use App\Repositories\SeriesRepository;

class SeriesController extends Controller
{
  public function __construct(private SeriesRepository $repository) {

  }
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
    $series = $this->repository->add($request);

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
