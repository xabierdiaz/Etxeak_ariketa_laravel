
@extends('base')

@section('content')
<div class="container w-25 border p-4">
    <div class="row mx-auto">
        <form method="POST" action="{{ route('etxea-aldatu-db', ['id' => $etxe->id]) }}">
            @method('PATCH')
            @csrf

            <div class="mb-3 col">
                <input type="text" class="form-control" name="izena" placeholder="Izena" value="{{ $etxe->izena }}">
                <button type="submit" class="btn btn-primary">etxea aldatu</button>
            </div>
        </form>
    </div>
</div>
@endsection