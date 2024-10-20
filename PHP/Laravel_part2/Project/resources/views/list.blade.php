@extends('layout.main')
@section('container')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="m-b-md">
            <a href="{{ url('barang/create') }}" class="btn btn-primary">Create</a>
        </div>
        <table>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
            </tr>
            @foreach($listBarang as $value)
            <tr>
                <td>{{ $value->code }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->stok }}</td>
            </tr>
            @endforeach
        </table>                
    </div>
</div>

@endsection
 