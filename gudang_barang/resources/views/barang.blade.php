@extends('layout')

@section('content')

    <div class="row">
        <table class="table table-sm table-striped table-condensed">
            <thead>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
                <th>ID Supplier</th>
            </thead>
            <tbody>
                @foreach($data_barang as $barang)
                    <tr>
                        <td>{{ $barang->id }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ "Rp ".number_format($barang->harga, 2, ',', '.')  }}</td>
                        <td>{{ $barang->stok}}</td>
                        <td>{{ $barang->id_supplier}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection