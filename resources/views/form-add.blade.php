@extends('layouts.main')
@section('title', 'Form Add Kaos')
@section('artikel')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <!-- form add kaos -->
        <form action="/save" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Merek</label>
                <input type="text" name="Merek" class="form-control" required>
            </div>

            <!-- <div class="form-group">
                <label>Ukuran</label>
                <input type="text" name="Ukuran" class="form-control" required>
            </div> -->
            <div class="form-group">
                <label>Ukuran</label>
                <select name = "Ukuran" class="form-control">
                    <option value="0 --">-Pilih Ukuran-</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select>
            </div>
            <div class="form-group">
                <label>Year</label>
                <input type="number" min="1900" max="2100" name="Year" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Poster</label>
                <input type="file" name="Poster" class="form-control-file" accept="image/*">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection