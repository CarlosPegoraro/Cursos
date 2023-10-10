<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Series;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::query()->orderBy("name", "asc")->get();
        $successMessage = session("success.message");

        return view("series.index")->with("series", $series)->with("successMessage", $successMessage);
    }
    public function create()
    {
        return view("series.create");
    }
    public function store(Request $request)
    {
        $series = Series::create($request->all());

        return to_route("series.index")->with("success.message", "{$series->name} foi adicionada com sucesso");
    }
    public function destroy(Series $series) {

        $series->delete();

        return to_route("series.index")->with("success.message", "{$series->name} foi removida com sucesso");
    }
    public function edit(Series $series) {
        return view("series.edit")->with("serie", $series);
    }
    public function update(Series $series, Request $request) {
        $series->fill($request->all());
        $series->save();

        return to_route("series.index")->with("success.message", "Serie {$series->name} atualizada com sucesso");
    }
}
