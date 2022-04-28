<div>
    <table class="table table-hover table-striped table-bordered table-responsive">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Nama User</th>
                <th>Lokasi</th>
                <th>Pemegang Hak</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                <tr>
                    <td scope="row">{{ $posts->firstItem() + $key }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->location }}</td>
                    <td>{{ $post->owner }}</td>
                    <td>{{ $post->category }}</td>
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a wire:click.prevent="confirmConfirm({{ $post->id }})" role="button" class="btn btn-warning">Konfirmasi</a>
                            <a href="{{ route('admin.detail', $post->slug) }}"role="button" class="btn btn-primary">Detail</a>
                            <a wire:click.prevent="confirmDelete({{ $post->id }})" role="button" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
