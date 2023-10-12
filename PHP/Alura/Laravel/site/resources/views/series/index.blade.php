<x-layout title="Home">
    <div class="container d-flex flex-column gap-4">
        <a href="{{route("series.create")}}" class="btn btn-primary">Adicionar Series</a>

        @isset($successMessage)
        <div class="alert alert-success bg-sucess">
            {{ $successMessage }}
        </div>
        @endisset

        <ul class="list-group">
            @foreach ($series as $mapedSeries)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{route('seasons.index', $mapedSeries->id)}}">
                      {{$mapedSeries->name}}
                    </a>

                    <span class="d-flex gap-3">
                        <a href="{{ route("series.edit", $mapedSeries->id) }}" class="btn btn-primary btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <form action="{{route("series.destroy", $mapedSeries->id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
