
@extends('base')

@section('content')
  <center>
    <div class="cointainer w-25 border p-4 mt-4">

      <!--control de errores-->
      @error('izena')
        <a>Pertsonaren izena eta abizena 3 karaktere eduki behar ditu gutxienez !!!</a>
        </br></br></br>
      @enderror

      @if (session('success'))
        <div class="alert alert-danger">{{session('success')}}</div>
        </br></br></br>
      @endif

      <!--insert-->
        <form action=" {{ route('pertsonasartu') }} " method="POST">
            @csrf
             <div class="mb-4">
                <label class="form-label">Pertsonaren Izena</label>
                <input type="text" class="form-control" name="izena">
                </br>
                <label class="form-label">Pertsonaren Abizena</label>
                <input type="text" class="form-control" name="abizena">
            </div>

            <select name="etxea" class="form-select">
                @foreach ($etxe as $et)
                <option value="{{ $et->id }}" >{{ $et -> izena }}</option>
                @endforeach
            </select>
          <button type="submit" class="btn btn-primary">Pertsona Sartu</button>
        </form>

    <!--view and delete-->
    </br>
    </br>
    </br>
    @foreach ($pertso as $per)
      <p>Izen abizenak: &nbsp;   {{$per -> izena}} {{$per -> abizena}}</p> <!--&nbsp; esto es un espacio en blanco-->
      <p>Etxebizitza: &nbsp; {{$per -> etxea -> izena}}</p>
      <form action="{{route('pertsonaezabatu', [$per -> id])}}" method="POST">
        @method('DELETE')
        @csrf
        <button>Ezabatu</button>
      </form>
        <a href="">editatu</a>
      </form>
      <br/><br/><br/>
    @endforeach
    <div>
  </center>
@endsection