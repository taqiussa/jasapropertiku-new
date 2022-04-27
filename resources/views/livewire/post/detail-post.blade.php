<div>
    <div class="card">
        <img class="card-img-top" src="{{ Storage::url($post->photo) }}" alt="detail image">
        <div class="card-body">
            <h4 class="card-title">{{ $post->title }}</h4>
            <p class="card-text"><b>Nama Penjual : </b>{{ $post->user->name }}</p>
            <p class="card-text"><b>Kategori : </b>{{  $post->category  }}</p>
            <p class="card-text"><b>Harga ditawarkan : </b>Rp. {{ number_format($post->price,0,'.','.')}}</p>
            <p class="card-text"><b>Kategori Hak : </b>{{ $post->rights }}</p>
            <p class="card-text"><b>No. Sertifikat : </b>{{ $post->certificate }}</p>
            <p class="card-text"><b>Nama Pemegang Hak : </b>{{ $post->owner }}</p>
            <p class="card-text"><b>Luas Area : </b>{{ $post->area }}</p>
            <p class="card-text"><b>Lokasi : </b>{{ $post->location }}</p>
            <p class="card-text"><b>Deskripsi : </b>{{ $post->description }}</p>
        </div>
    </div>
    <div class="d-flex justify-content-between px-3 py-3">
        <a role="button" class="btn btn-success" href="#">Hubungi</a>
        <a role="button" class="btn btn-secondary" href="{{ route('posts.index') }}">Kembali</a>
    </div>
</div>
