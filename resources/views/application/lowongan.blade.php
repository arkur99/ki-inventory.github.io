@extends('layout.main')
@section ('content')
@include('layout.partials.jobform')

<div class="content">
    <div class="d-flex justify-content-between mx-5 mt-5" >
       <h5>
        <div class="fw-blood">
        <i class="fa-solid fa-arrow-left me-2"></i>
        DAFTAR LOWONGAN PEKERJAAN
        </div>
        </h5>
        <div >
            <nav >
            <ol class="breadcrumb">
                <li class="breadcrumb-item">lowongan</li>
                <li class="breadcrumb-item active"> daftar pekerjaan</li>
            </ol>
            </nav>
        </div>
    </div>
    <div>
        <p>Cari lowongan kerja yang cocok</p>
    </div>
    <div class="d-flex mx-5 mt-2 px-5">
        <div class="w-75 me-4">
            <div class="form-group mb-4">
                <div class="input-group">
                    <input type="text" placeholder="cari pekerjaan disini" class="form-control">
                    <span class="input-group-text"><i class="fas fa-magnifying-glass"></i></span>
                </div>
            </div>
            <x-jobcard></x-jobcard>
            <div class="bg-light d-flex justify-content py-2" role="button">
                Lihat Lowongan Lainnya
            </div>
        </div>
        <div>
        <button class="rounded-pill px-5 py-3 btn bg-success text-white" style="width: 350px;" data-bs-toggle="modal" data-bs-target="#job-modal"><i class="fas fa-plus me-2" >Tambah Lowongan</i></button>
            <div class="mt-5 p-5 bg-light rounded">
                <h6 class="fw-bold">Filter</h6>
                <form action="" class="mt-3">
                    <div class="mb-3">
                        <label for="" class="form-label">Urutkan menurut</label>
                        <select name="" id="" class="form-select">
                            <option selected value="">Relevansi</option>
                            <option value="1">one</option>
                            <option value="2">two</option>
                            <option value="3">three</option>
                        </select>
                    </div>
                    <div class="mb-3 ">
                        <label for="tipe_pekerjaan" class="form-table">Tipe pekerjaan</label>
                        <select name="" id="" class="form-select">
                            <option selected >Purna Waktu</option>
                            <option value="1">one</option>
                            <option value="2">two</option>
                            <option value="3">three</option>
                        </select>
                    </div>
                    <div class="mb-3 ">
                        <label for="areal" class="form-table">Area</label>
                        <select name="" id="" class="form-select">
                            <option selected >Indonesia</option>
                            <option value="1">one</option>
                            <option value="2">two</option>
                            <option value="3">three</option>
                        </select>
                                       
                        <select name="" id="" class="form-select">
                            <option selected >jawa Barat</option>
                            <option value="1">one</option>
                            <option value="2">two</option>
                            <option value="3">three</option>
                          
                        </select>
                        <select name="" id="" class="form-select">
                            <option selected >Semua Area</option>
                            <option value="1">one</option>
                            <option value="2">two</option>
                            <option value="3">three</option>
                          
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="kategori" class="form-label">Kategori</label>
                    </div>
                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input " name="" value="" id="flexcheckchecked">
                        <label class="form-check-label" for="flexcheckchecked">Informasi Teknologi</label>
                    </div>
                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input " name="" value="" id="flexcheckchecked">
                        <label class="form-check-label" for="flexcheckchecked">Penjualan & Pemasaran</label>
                    </div>
                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input " name="" value="" id="flexcheckchecked">
                        <label class="form-check-label" for="flexcheckchecked">Desain & Kreatif</label>
                    </div>
                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input " name="" value="" id="flexcheckchecked">
                        <label class="form-check-label" for="flexcheckchecked">Akuntasi & Keuangan</label>
                    </div>
                </form>
            </div>
        </div>

    </div>
    
</div>

@endsection