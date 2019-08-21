@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="text-center">
                <h1>Carros</h1>
            </div>

        </div>
    </div>
    s

    @foreach ($carros as $carro)
        <div class="col-4">
            <th scope="col">marca</th>
            @if ($carro->marca == 'toyota')
                <td> <p style="color: #ff1156; font-weight:bold;"><strong>{{$carro->placa}}</strong></p></td>
            @elseif($carro->marca == 'mazda')
                <td> <p style="color: #26ff43; "> <strong>{{$carro->placa}}</strong> Los Mazda son los mejores</p></td>
            @else
                <td> <p> <strong>{{$carro->placa}}</strong></p></td>
            @endif

        </div>
        <div class="col-10">
            <th scope="col">Placa</th>
        <td>{{ $carro->placa }}</td>
        </div>



    @endforeach



@endsection