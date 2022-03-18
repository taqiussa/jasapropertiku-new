<div class="card mx-1 my-1 py-1">
    <div
        class="card-header fs-3 border border-success border-bottom-0 border-top-0 border-5 d-flex justify-content-between bg-success bg-opacity-10">
        <span>
            Pasang Iklan
        </span>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="savePost">
            <div class="input-group-lg mb-3">
                <label for="judul" class="form-label fs-5">Judul Iklan</label>
                <input wire:model.defer="title" id="judul" type="text" class="form-control"
                    placeholder="Judul Iklan....">
            </div>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group-lg mb-3">
                <label for="kategoriJual" class="form-label fs-5">Kategori Jual/Sewa</label>
                <select wire:model.defer="category" id="kategoriJual" class="form-select"
                    aria-label="Default select example">
                    <option value="">Pilih Kategori</option>
                    <option value="Jual">Jual</option>
                    <option value="Sewa">Sewa</option>
                </select>
            </div>
            @error('category')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <label for="harga" class="form-label fs-5">Harga</label>
            <div class="input-group input-group-lg mb-3">
                <span class="input-group-text">Rp.</span>
                <input wire:model.lazy="price" id="harga" type="text" class="form-control">
            </div>
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group-lg mb-3">
                <label for="kategoriHak" class="form-label fs-5">Kategori Hak</label>
                <select wire:model.defer="rights" id="kategoriHak" class="form-select"
                    aria-label="Default select example">
                    <option value="">Pilih Kategori Hak</option>
                    <option value="Hak Milik">Hak Milik</option>
                    <option value="Hak Guna Bangun">Hak Guna Bangun</option>
                    <option value="Hak Pakai">Hak Pakai</option>
                    <option value="Hak Pengelolaan">Hak Pengelolaan</option>
                    <option value="Hak Guna Usaha">Hak Guna Usaha</option>
                </select>
            </div>
            @error('rights')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group-lg mb-3">
                <label for="noSertifikat" class="form-label fs-5">No. Sertifikat</label>
                <input wire:model.defer="certificate" id="noSertifikat" type="text" class="form-control"
                    placeholder="No. Sertifikat....">
            </div>
            @error('certificate')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group-lg mb-3">
                <label for="namaPemegangHak" class="form-label fs-5">Nama Pemegang Hak</label>
                <input wire:model.defer="owner" id="namaPemegangHak" type="text" class="form-control"
                    placeholder="Nama Sesuai Sertifikat....">
            </div>
            @error('owner')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <label for="luasArea" class="form-label fs-5">Luas Area</label>
            <div class="input-group input-group-lg mb-3">
                <input wire:model.defer="area" id="luasArea" type="number" class="form-control">
                <span class="input-group-text">m&sup2;</span>
            </div>
            @error('area')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group-lg mb-3">
                <label for="lokasi" class="form-label fs-5">Lokasi Properti</label>
                <input wire:model.defer="location" id="lokasi" type="text" class="form-control"
                    placeholder="Lokasi RT RW Desa....">
            </div>
            @error('location')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <label for="fotoProperti" class="form-label fs-5">Foto Properti</label>
            <div class="input-group mb-3">
                <input wire:model="photo" id="fotoProperti" type="file" class="form-control">
            </div>
            @error('photo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div wire:loading wire:target="photo">
                Please wait while uploading...
            </div>
            <div class="mb-3">
                @if ($photo)
                    <img src="{{ $photo->temporaryUrl() }}" alt="" class="img img-thumbnail">
                @endif
            </div>
            <div class="input-group-lg mb-3">
                <label for="deskripsi" class="form-label fs-5">Deskripsi</label>
                <textarea wire:model.defer="description" class="form-control" id="deskripsi" rows="3"></textarea>
            </div>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="d-flex justify-content-end">
                <button class="btn btn-success btn-lg" type="submit">Pasang Iklan</button>
            </div>
        </form>
    </div>
</div>
