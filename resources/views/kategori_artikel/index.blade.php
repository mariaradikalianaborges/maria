@extends('layouts.app')

@section('content')
<a href="{!! route('kategori_artikel.create') !!}" class="btn btn-primary">Tambah Data</a>

        <table border= "1">
        <tr> 
        <td>id </td>
        <td>nama</td>
        <td>users_id </td>
        <td>aksi</td>
        </tr>

        @foreach($kategori_artikel as $item)

        <tr>

        <td> {!! $item ->id !!}</td>
        <td> {!! $item ->nama!!}</td>
        <td> {!! $item ->users_id !!}</td>
        <td>
            <a href="{!! route('kategori_artikel.show',[$item->id]) !!}" class="btn btn-succes">
            Lihat
            </a>

        </tr>

        @endforeach
    </table>


@endsection