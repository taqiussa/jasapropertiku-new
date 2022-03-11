<div class="card col-lg-6 mx-1 my-1 py-1">
    <div
        class="card-header fs-3 border border-success border-bottom-0 border-top-0 border-5 d-flex justify-content-between bg-success bg-opacity-10">
        <span>
            Ubah Profil
        </span>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="updateProfil">
            <div class="mb-3 row">
                <label class="form-label fs-5">Foto Profil</label>
                @if (auth()->user()->photo)
                    <div class="{{ $photo || auth()->user()->photo ? 'col-7' : '' }}">
                        <input wire:model.defer="photo" type="file" class="form-control">
                        @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div wire:loading wire:target="photo">
                            Please wait while uploading...
                        </div>
                    </div>
                    <div class="col-5">
                        @if ($photo)
                            <img src="{{ $photo->temporaryUrl() }}" alt="" class="img img-thumbnail">
                            @else
                            <img src="{{ asset('storage/' . auth()->user()->photo) }}" alt="" class="img img-thumbnail">
                        @endif
                    </div>
                @else
                    <div class="{{ $photo ? 'col-7' : '' }}">
                        <input wire:model.defer="photo" type="file" class="form-control">
                        @error('photo')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div wire:loading wire:target="photo">
                            Please wait while uploading...
                        </div>
                    </div>
                    <div class="col-5">
                        @if ($photo)
                        <img src="{{ $photo->temporaryUrl() }}" alt="" class="img img-thumbnail">
                        @endif
                    </div>
                @endif
            </div>
            <div class="form-floating mb-3">
                <input wire:model.defer="name" type="text" class="form-control" id="floatingNama"
                    placeholder="Nama Lengkap..." autocomplete="off">
                <label for="floatingNama">Nama Lengkap</label>
            </div>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input wire:model.defer="birthplace" type="text" class="form-control" id="floatingTempatLahir"
                    placeholder="Tempat Lahir..." autocomplete="off">
                <label for="floatingTempatLahir">Tempat Lahir</label>
            </div>
            @error('birthplace')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input wire:model.defer="birthdate" type="date" class="form-control" id="floatingTanggalLahir"
                    autocomplete="off">
                <label for="floatingTanggalLahir">Tanggal Lahir</label>
            </div>
            @error('birthdate')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <textarea wire:model.defer="address" class="form-control" placeholder="Alamat Lengkap"
                    id="floatingAlamat"></textarea>
                <label for="floatingAlamat">Alamat Lengkap</label>
            </div>
            @error('address')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <select wire:model="province" class="form-select" id="floatingProvinsi"
                    aria-label="Floating label select example">
                    <option value="">Pilih Provinsi</option>
                    @foreach ($provinces as $provinsi)
                    <option value="{{ $provinsi->code }}">{{ $provinsi->name }}</option>
                    @endforeach
                </select>
                <label for="floatingProvinsi">Provinsi</label>
            </div>
            @error('province')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <select wire:model="city" class="form-select" id="floatingKota"
                    aria-label="Floating label select example">
                    @if ($cities)
                        <option value="">Pilih Kota</option>
                        @foreach ($cities as $kota)
                        <option value="{{ $kota->code }}">{{ $kota->name }}</option>
                        @endforeach
                    @else
                    <option value="">Pilih Kota</option>
                    @endif
                </select>
                <label for="floatingKota">Kota</label>
            </div>
            @error('city')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <select wire:model="district" class="form-select" id="floatingKecamatan"
                    aria-label="Floating label select example">
                    @if ($districts)
                        <option value="">Pilih Kecamatan</option>
                        @foreach ($districts as $kecamatan)
                        <option value="{{ $kecamatan->code }}">{{ $kecamatan->name }}</option>
                        @endforeach
                    @else
                    <option value="">Pilih Kecamatan</option>
                    @endif
                </select>
                <label for="floatingKecamatan">Kecamatan</label>
            </div>
            @error('district')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <select wire:model="village" class="form-select" id="floatingDesa"
                    aria-label="Floating label select example">
                    @if ($villages)
                        <option value="">Pilih Desa</option>
                        @foreach ($villages as $desa)
                        <option value="{{ $desa->code }}">{{ $desa->name }}</option>
                        @endforeach
                    @else
                    <option value="">Pilih Desa</option>
                    @endif
                </select>
                <label for="floatingDesa">Desa</label>
            </div>
            @error('village')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <select wire:model.defer="gender" class="form-select" id="floatingJenisKelamin"
                    aria-label="Floating label select example">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <label for="floatingJenisKelamin">Jenis Kelamin</label>
            </div>
            @error('gender')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input wire:model.defer="whatsapp" type="text" class="form-control" id="floatingNoWhatsApp"
                    placeholder="No. WhatsApp">
                <label for="floatingNoWhatsApp">No. WhatsApp</label>
            </div>
            @error('whatsapp')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="d-flex justify-content-end">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
