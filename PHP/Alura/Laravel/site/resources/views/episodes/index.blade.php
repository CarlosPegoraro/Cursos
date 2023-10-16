<x-layout title="Episodes">

    @isset($successMessage)
        <div class="alert alert-success bg-sucess">
            {{ $successMessage }}
        </div>
    @endisset
    
    <form method="post">
        @csrf
        <ul class="list-group">
            @foreach ($episodes as $episode)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Episodio: {{ $episode->number }}
                    <input type="checkbox" name="episodes[]" value='{{ $episode->id }}'
                        @if ($episode->watched) checked @endif />
                </li>
            @endforeach
        </ul>
        <button type="submit" class="btn btn-primary my-3">Salvar</button>
        <a href="{{ route('series.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</x-layout>
