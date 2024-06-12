@extends('layouts.main')
@section('title', 'Form Add Kaos')
@section('artikel')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <!-- form add kaos -->
        <form action="/update/{{ $mv->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Merek</label>
                <input type="text" name="merek" class="form-control" value="{{ $mv->Merek }}" required>
            </div>

            <div class="form-group">
                <label>Ukuran</label>
                <select name = "ukuran" class="form-control">
                    <option value="0">-Pilih Ukuran-</option>
                    <option value="S" {{ ($mv->Ukuran == "S") ? "Selected":"" }}>S</option>
                    <option value="M" {{ ($mv->Ukuran == "M") ? "Selected":"" }}>M</option>
                    <option value="L" {{ ($mv->Ukuran == "L") ? "Selected":"" }}>L</option>
                </select>
            </div>
            <div class="form-group">
                <label>Year</label>
                <input type="number" min="1900" max="2100" name="year" class="form-control" value="{{ $mv->Year }}"
                    required>
            </div>
            <div class="form-group">
                <label>Poster</label>
                <input type="file" name="Poster" class="form-control-file" accept="image/*">
            </div>
            <div class="form-group">
                <img src="{{ asset('/storage/'.$mv->Poster)}}" alt="{{ $mv->Poster }}" height="80" width="80">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection