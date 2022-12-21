
@extends('base')

@section('content')
<div class="container w-25 border p-4">
    <div class="row mx-auto">
        <form method="POST" action="{{ route('pertsona-aldatu-db', ['id' => $per->id]) }}">
            @method('PATCH')
            @csrf

            <div class="mb-3 col">
                <input type="text" class="form-control" name="izena" placeholder="Izena" value="{{ $per->izena }}">
                <input type="text" class="form-control" name="abizena" placeholder="Abizena" value="{{ $per->abizena }}">

                <select class="form-select" name="etxea_idea">
                @foreach ($etxe as $et)
                <option value="{{ $et->id }}" > {{ $et -> izena }} </option>
                @endforeach
                </select>
                
                <button type="submit" class="btn btn-primary">pertsona aldatu</button>
            </div>
        </form>
    </div>
</div>
@endsection