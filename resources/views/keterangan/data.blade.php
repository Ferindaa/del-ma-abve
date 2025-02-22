@extends('layouts.user')

@section('title', 'Catatan Perjalanan')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">

                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif

                <form method="GET" action="{{ url('keterangan') }}" class="mb-2">
                    <input type="text" name="keyword" value="{{ $keyword }}">
                    <button type="submit">Search</button>
                </form>

                <div class="card">
                    <div class="card-body">
                        <table class="table mb-4">
                            <thead>
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Suhu Tubuh</th>
                                <th scope="col">Tanggal Input</th>
                                <th scope="col">Edit</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item => $dt)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $dt->tanggal }}</td>
                                    <td>{{ $dt->waktu }}</td>
                                    <td>{{ $dt->lokasi }}</td>
                                    <td>{{ $dt->suhu_tubuh }} C </td>
                                    <td>{{ $dt->created_at }}</td>
                                    <td><a href="{{ url('keterangan/'.$dt->id.'/edit') }}" type="button" class="btn btn-warning"><i class="fas fa-pen"></a></td>
                                </tr> 
                            @endforeach
                            </tbody> 
                        </table>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection