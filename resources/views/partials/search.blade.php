<div class="card bg-dark text-white mb-5">
    <img src="{{ asset('images/dwlim.jpg') }}" class="card-img" alt="...">
    <div class="card-img-overlay top-50 translate-middle-y">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <nav class="bg-dark bg-opacity-75 col-4">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link col-6 text-warning active" id="nav-jual-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-jual" type="button" role="tab" aria-controls="nav-jual"
                            aria-selected="true">Jual</button>
                        <button class="nav-link col-6 text-warning" id="nav-sewa-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-sewa" type="button" role="tab" aria-controls="nav-sewa"
                            aria-selected="false">Sewa</button>
                    </div>
                </nav>
                <div class="tab-content bg-dark h-auto px-5 py-5 bg-opacity-75" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-jual" role="tabpanel" aria-labelledby="nav-jual-tab">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-sizing-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-lg" placeholder="Cari....">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-sewa" role="tabpanel" aria-labelledby="nav-sewa-tab">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-sizing-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-lg" placeholder="Cari....">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
