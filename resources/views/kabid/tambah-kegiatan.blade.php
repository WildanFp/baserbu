@extends('layouts.user')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h1 style="margin-left: 0px; color: #63AC59">
                <i class="fas fa-arrow-circle-left"></i>
            </h1>
            <div class="row mt-4 mb-4">
                <div class="col-6">
                    <h3 class="heading-section">
                        <strong>Lengkapi Kegiatan Baru</strong>
                    </h3>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="judulLaporan" class="col-sm-3 col-form-label">Nama Kegiatan</label>
                <div class="col">
                    <input type="text" class="form-control" id="judulLaporan" placeholder="Ketik Judul Kegiatan Anda"
                        required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bidang" class="col-sm-3 col-form-label">Penanggung Jawab</label>
                <div class="col-sm-6">
                    <select class="browser-default custom-select border border-secondary border-opacity-25 rounded"
                        id="statusLaporan">
                        <option selected>Pilih Penanggung Jawab...</option>
                        <option value="1">Hendro</option>
                        <option value="2">Kartika</option>
                        <option value="3">Alam</option>
                    </select>
                </div>
            </div>
            <div class="d-flex flex-row-reverse">
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>
    </div>
@endsection
