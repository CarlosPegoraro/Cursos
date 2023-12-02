@component('mail::message')

# {{ $nomeSerie }} criada

A série {{ $nomeSerie }} com {{ $qtdTemporadas }} temporadas e {{ $episodiosPorTemporada }} epísodios foi criada

@component('mail::button', ['url' => route('seasons.index', $idSerie)])
    Ver Serie
@endcomponent

@endcomponent
