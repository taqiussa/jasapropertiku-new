@extends('layouts.app')
@section('content')
    <div class="min-vh-100 my-5 d-flex justify-content-center row px-2">
        @include('partials.user.user-submenu')
        <div class="card col-lg-6 mx-1 my-1 py-1">
            <div class="card-header fs-3 border border-success border-bottom-0 border-top-0 border-5 d-flex justify-content-between bg-success bg-opacity-10">
                <span>
                    User Profile 
                </span>
                <a href="{{ route('user.edit', auth()->user()->slug) }}" class="btn btn-success" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                    Edit Profile
                </a>
            </div>
            <div class="card-body">
                <div class="img my-2">
                    <img src="{{ Storage::url('app/'.auth()->user()->photo) }}" alt="" class="img-thumbnail rounded-circle">
                </div>
                <div class="form-floating mb-3">
                    <input disabled value="{{ auth()->user()->name }}" type="text" class="form-control" id="floatingNama" placeholder="Nama Lengkap..."
                        autocomplete="off">
                    <label for="floatingNama">Nama Lengkap</label>
                </div>
                <div class="form-floating mb-3">
                    <input disabled value="{{ auth()->user()->birthplace }}" type="text" class="form-control" id="floatingTempatLahir" placeholder="Tempat Lahir..."
                        autocomplete="off">
                    <label for="floatingTempatLahir">Tempat Lahir</label>
                </div>
                <div class="form-floating mb-3">
                    <input disabled value="{{ auth()->user()->birthdate }}" type="date" class="form-control" id="floatingTanggalLahir"
                        autocomplete="off">
                    <label for="floatingTanggalLahir">Tanggal Lahir</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea disabled class="form-control" placeholder="Alamat Lengkap" id="floatingAlamat">{{ auth()->user()->address }}</textarea>
                    <label for="floatingAlamat">Alamat Lengkap</label>
                </div>
                <div class="form-floating mb-3">
                    <select disabled class="form-select" id="floatingProvinsi" aria-label="Floating label select example">
                        <option value="" selected>{{ auth()->user()->indonesiaProvince->name ?? '' }}</option>
                    </select>
                    <label for="floatingProvinsi">Provinsi</label>
                </div>
                <div class="form-floating mb-3">
                    <select disabled class="form-select" id="floatingKota" aria-label="Floating label select example">
                        <option value="" selected>{{ auth()->user()->indonesiaCity->name ?? '' }}</option>
                    </select>
                    <label for="floatingKota">Kota</label>
                </div>
                <div class="form-floating mb-3">
                    <select disabled class="form-select" id="floatingKecamatan" aria-label="Floating label select example">
                        <option value="" selected>{{ auth()->user()->indonesiaDistrict->name ?? '' }}</option>
                    </select>
                    <label for="floatingKecamatan">Kecamatan</label>
                </div>
                <div class="form-floating mb-3">
                    <select disabled class="form-select" id="floatingDesa" aria-label="Floating label select example">
                        <option value="" selected>{{ auth()->user()->indonesiaVillage->name ?? '' }}</option>
                    </select>
                    <label for="floatingDesa">Desa</label>
                </div>
                <div class="form-floating mb-3">
                    <select disabled class="form-select" id="floatingJenisKelamin" aria-label="Floating label select example">
                        <option selected>{{ auth()->user()->gender }}</option>
                    </select>
                    <label for="floatingJenisKelamin">Jenis Kelamin</label>
                </div>
                <div class="form-floating mb-3">
                    <input disabled value="{{ auth()->user()->whatsapp }}" type="text" class="form-control" id="floatingNoWhatsApp" placeholder="No. WhatsApp">
                    <label for="floatingNoWhatsApp">No. WhatsApp</label>
                </div>
            </div>
        </div>
    </div>
@endsection
