<div class="card col-lg-6 mx-1 my-1 py-1">
    <div
        class="card-header fs-3 border border-success border-bottom-0 border-top-0 border-5 d-flex justify-content-between bg-success bg-opacity-10">
        <span>
            Ubah Profil
        </span>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="createPost">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Judul Iklan....">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
    </div>
</div>
