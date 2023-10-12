<form method="post" action="{{ $action }}">
    @csrf
    @if($update)
      @method('PUT')
    @endif
    <div class="mb-3">
        <label for="name" class="form-label">Nome da Serie: </label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control"
            @isset($value) value="{{ $value }}" @endisset>
    </div>

    <button type="submit" class="btn btn-outline-primary">{{ $btnText }}</button>
</form>
