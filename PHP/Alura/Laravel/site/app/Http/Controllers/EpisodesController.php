<?php
  namespace App\Http\Controllers;

  use App\Models\Season;
  use App\Repositories\EpisodesRepository;
  use Illuminate\Http\Request;

  class EpisodesController extends Controller
  {
    public function __construct(private EpisodesRepository $repository) {}
      public function index(Season $season) {
        $successMessage = session("success.message");
          return view('episodes.index', ['episodes' => $season->episodes])->with('successMessage', $successMessage);
      }

      public function update(Request $request, Season $season) {
          $message = $this->repository->update($request, $season);

          return to_route('episodes.index', $season->id)->with('success.message', $message);
      }
  }
?>
