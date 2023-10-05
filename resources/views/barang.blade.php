<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends('layout')
@include('navbar')

@section('title', 'Stok Barang')
@section('header', 'Stok Barang')

@section('content')

<div class="container">
<table border="1px" class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>ID Supplier</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_barang as $barang)
            <tr> 
                <td>{{ $barang->id }}</td> 
                <td> {{ $barang->nama_barang }} </td>
                <td> {{ "Rp".number_format($barang->harga, 2, ',', '.') }} </td>
                <td>{{ $barang->stok}}</td> 
                <td>{{ $barang->id_supplier}}</td> 
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
</html>