<?php

namespace App\Repositories;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;

interface EpisodesRepository {
  public function update(Request $request, Season $season) : string;
}
