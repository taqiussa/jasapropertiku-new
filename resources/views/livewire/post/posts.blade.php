<div>
    <div class="row">
        <div class="col-lg-12">
            @if ($counts)
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h1>Daftar Properti Dijual / Disewakan</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-4">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top"
                                        src="{{ Storage::url($post->photo) }}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted d-flex mb-2">
                                        <span><i class=" fas fa-calendar-alt"></i>
                                            &nbsp;</span>
                                        <span><a href="" class="text-decoration-none">
                                                <i class=" fas fa-user"></i> &nbsp; </a>
                                        </span>
                                        <span>
                                            <a href="" class="text-decoration-none"><i class="fas fa-tag"></i>
                                                &nbsp; </a>
                                        </span>
                                    </div>
                                    <h2 class="card-title h4">
                                        <a href="{{ route('posts.show', $post->slug) }}" class="text-decoration-none">
                                            {{ $post->title }}
                                        </a>
                                    </h2>
                                    <h2 class="card-title h4">
                                            Rp. {{ number_format($post->price,0,'.','.')}}
                                    </h2>
                                    <p class="card-text"></p>
                                    <a class="btn btn-primary" href="{{ route('posts.show', $post->slug) }}">Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title h4">
                                    Hasil Pencarian Tidak Ditemukan...
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
