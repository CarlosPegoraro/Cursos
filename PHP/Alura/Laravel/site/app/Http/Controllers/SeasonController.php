<?php

namespace App\Http\Controllers;

use App\Models\Series;

class SeasonController extends Controller
{
    public function index(Series $series) {
      $seasons = $series->seasons()->with('episodes')->get() /*Menor performace*/;
      // $seasons = Season::query()->with('episodes')->where('series_id', $series)->get() tras maior performece;

      return view('seasons.index')->with('seasons', $seasons)->with('series', $series);
    }
}
