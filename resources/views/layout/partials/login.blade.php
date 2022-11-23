<div class="modal fade" id="login-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-2">
            <div class="modal-header p-2 ">
                
                <div class="d-flex flex-column justify-content-center w-100 align-items-center">
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    <img src="{{ url('img/altie.png') }}" width="60px" >
                    <h6>Pondok Pesantren Al-Ittihad</h6>
                    <p class="text-secondary">karangtengah Cianjur</p>
                    <h6>MASUK UNTUK MELANJUTKAN</h6>
                </div>
               
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-4">
                        <label for="surel" class="mb-2">Alamat Surel</label>
                        <input type="text" class="form-control" name="surel" id="surel" placeholder="Email">
                    </div>
                    <div class="form-group mb-4">
                        <label for="password" class="mb-2">Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password">
                            <span class="input-group-text"><i class="fa-regular fa-eye-slash"></i></span>
                        </div>
                    </div>
                </form>
                <input type="submit" class="btn bg-primary text-white w-100 py-2 mb-4 rounded-pill" width="100%" value="Login">
            </div>
            <div class="modal-footer" >
                <p class="text-center w-100">Belum punya akun? <span class="text-primary" role="button" data-bs-toggle="modal" data-bs-target="#register-modal"> Daftar disini</span></p>
            </div>
        </div>
    </div>
</div>