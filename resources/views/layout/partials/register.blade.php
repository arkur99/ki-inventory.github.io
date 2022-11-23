<div class="modal fade" id="register-modal">
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
                   <div class="row">
                    <div class="col">
                        <label for="firstname">Nama Depan</label>
                        <input type="text" class="form-control" id="firstname">
                    </div>
                    <div class="col mb-2">
                        <label for="firstname">Nama Belakang</label>
                        <input type="text" class="form-control" id="backname">
                    </div>
                    <div class="mb-3">
                        <label for="firstname">Alamat Email</label>
                        <input type="text" class="form-control" id="email">
                    </div>

                    <div class="mb-3">
                        <label for="" class="mb-2">Jenis Kelamin</label>
                        <select name="gender" id="gender" class="form-control">
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                        </select>
                    </div>

                    <div class="col mb-2">
                        <label for="firstname" >Unggah CV/Resume Anda</label>
                        <input type="file" class="form-control" id="file">
                    </div>

                    <div class="mb-3">
                        <label for="" class="mb-3">Ringkasan Tentang Anda</label>
                        <textarea name="" id="" class="form-control" placeholder="Describe Yourself"></textarea>
                    </div>
                    <hr class="my-3">
                    
                    <div class="form-group mb-4">
                        <label for="password" class="mb-2">Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password">
                            <span class="input-group-text"><i class="fa-regular fa-eye-slash"></i></span>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="password" class="mb-2">Konfirmasi Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password">
                            <span class="input-group-text"><i class="fa-regular fa-eye-slash"></i></span>
                        </div>
                    </div>

                   </div>
                </form>
                <button class="btn btn-success rounded-pill w-100">
                    Lanjutkan Registrasi
                </button>
                <!-- <input type="submit" class="btn bg-primary text-white w-100 py-2 mb-4 rounded-pill" width="100%" value="Login"> -->
            </div>
            <div class="modal-footer" >
                <p class="text-center w-100">Sudah memiliki akun?<span class="text-primary" role="button" data-bs-toggle="modal" data-bs-target="#login-modal"> disini</span></p>
            </div>
        </div>
    </div>
</div>