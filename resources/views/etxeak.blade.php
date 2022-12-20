
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
        <form action=" {{ route('etxeasartu') }} " method="POST">
            @csrf
             <div class="mb-4">
                <label class="form-label">Etxearen Izena</label>
                <input type="text" class="form-control" name="izena">
                </br>
            </div>
          <button type="submit" class="btn btn-primary">Etxea Sartu</button>
        </form>

    <!--view and delete-->
    </br>
    </br>
    </br>
    @foreach ($etxe as $et)
      <a>Izen Abizenak---><a>
      <a>{{$et -> izena}}</a>
      <form action="{{route('etxeaezabatu', [$et -> id])}}" method="POST">
        @method('DELETE')
        @csrf
        <button>Ezabatu</button>
      </form>
      <!--edit link-->
        <a href="{{ route('etxeak-aldatu', ['id' => $et->id]) }}">editatu</a>
      </form>
      <br/><br/><br/>
    @endforeach
    <div>
  </center>
@endsection