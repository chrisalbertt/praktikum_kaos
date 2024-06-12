@extends('layouts.main')
@section('title', 'kaos')
@section('artikel')
<div class="card">
    <div class="card-header">
        <a href="/kaos/add-form" class="btn btn-secondary"><i class="bi bi-plus-square"></i> Kaos</a>
    </div>
    <div class="card-body">
        @if (@session('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('alert')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <!-- tabel -->
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Merek</th>
                    <th>Ukuran</th>
                    <th>Year</th>
                    <th>Poster</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mv as $idx => $m )
                <tr>
                    <td>{{ $idx+1}}</td>
                    <td>{{ $m->Merek}}</td>
                    <td>{{ $m->Ukuran}}</td>
                    <td>{{ $m->Year}}</td>
                    <td>
                        <img src="{{ asset('/storage/'.$m->Poster)}}" alt="{{ $m->Poster }}" height="80" width="80">
                    </td>
                    <td>
                    <a href="/kaos/edit-form/{{$m->id}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                       <a href="/delete/{{ $m->id }}" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
</div>
@endsection