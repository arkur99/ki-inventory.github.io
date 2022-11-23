<div class="modal face" id="job-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header p-2 align-items-start">
                <div class="d-flex flex-column justify-content-center w-100 align-items-center">
                    <img src="{{ url('img/altie.png')}}" alt="Al Ittihad" width="50px">
                    <h6>Pondok Pesantren Al-Ittihad</h6>
                    <p class="caption">karang tengan cianjur</p>
                    <h6 class="mt-3">formulir lowongan kerja</h6>
                </div>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">
                            Nama Perusahaan
                        </label>
                        <input type="text" name="" class="form-control" id="companyName" placeholder="nama perusahaan">
                    </div>
                    <div class="mb-2 row">
                        <div class="col">
                            <label for="recipient-name" class="col-form-labe">
                                Bidang Perusahaan
                            </label>
                            <select name="" id="" class="form-select">
                                <option selected>Informasi Teknologi</option>
                                <option value="1">one</option>
                                <option value="2">two</option>
                                <option value="3">three</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="recipient-name" class="col-form-label">Ukuran Perusahaan</label>
                                <select class="form-select">
                                    <option selected>0 - 50 Karyawan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Lokasi Perusahaan</label>
                        <input type="text" class="form-control" id="companyAddress">
                    </div>
                    <hr class="mt-4 mb-5">
                    <div class="mb-3 mt-3">
                        <label for="recipient-name" class="col-form-label">Judul lowongan pekerjaan</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Deskripsikan tugas pada lowongan ini</label>
                        <textarea class="form-control" id="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Perkiraan gaji untuk lowongan ini</label>
                        <select class="form-select">
                            <option selected>Gaji diantara</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3 row">
                        <div class="col">
                            <input type="text" class="form-control" id="startfrom">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="highest">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Tingkat Jenis pekerjaan</label>
                            <select class="form-select">
                                <option selected>Pegawai tetap (Non-manajemen)</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Skill yang harus dikuasai</label>
                        <input type="text" class="form-control" id="skill">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Skill yang harus dikuasai</label>
                        <input type="text" class="form-control" id="skill">
                    </div>
                    <div class="mb-3 row">
                        <label for="Kategori" class="form-label">Tingkat pendidikan</label>
                        <div class="col">
                            <div class="mb-3">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked"> SMA/SMK Sederajat </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked"> Diplomat 4 </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked"> Strata 2 </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked"> Profesional bersertifikasi </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked"> Diplomat 3</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked"> Strata 1</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked"> Strata 3 </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">Semua lulusan</label>
                            </div>
                        </div>
                    </div>
                </form>
                <button type="button" class="btn bg-primary rounded-pill w-100 text-white py-2 mt-3">SIMPAN & PUBLISH</button>
                <button type="button" class="btn btn-outline-warning py-2 mt-3 w-100 rounded-pill">SIMPAN LALU TAMBAH BARU</button>
            </div>
        </div>
    </div>
</div>