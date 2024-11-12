<div class="modal fade" tabindex="-1" id="kt_modal_1" style="z-index: 1; margin-top: 60px; padding-bottom: 50px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Regsitrasi Alumni</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z" />
                    </svg>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body text-start">
                <form class="form-data" enctype="multipart/form-data" data-type="alumni">
                    <input type="hidden" name="id">
                    <input type="hidden" name="uuid">
                    <div class="mb-10">
                        <label class="form-label">Nama Alumni</label>
                        <input type="text" id="name" class="form-control" name="name">
                        <small class="text-danger name_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">NIM</label>
                        <input type="text" id="username" class="form-control" name="username">
                        <small class="text-danger username_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" name="email">
                        <small class="text-danger email_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Fakultas</label>
                        <input type="text" id="fakultas" class="form-control" name="fakultas">
                        <small class="text-danger fakultas_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Jurusan</label>
                        <input type="text" id="jurusan" class="form-control" name="jurusan">
                        <small class="text-danger jurusan_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Password</label>
                        <input type="password" id="password" class="form-control" name="password">
                        <small class="text-danger password_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Ulangi Password</label>
                        <input type="text" id="password_confirmation" class="form-control"
                            name="password_confirmation">
                        <small class="text-danger password_confirmation_error"></small>
                    </div>

                    <div class="separator separator-dashed mt-8 mb-5"></div>
                    <div class="d-flex gap-5">
                        <button type="submit" class="btn btn-primary btn-sm btn-submit d-flex align-items-center"><i
                                class="bi bi-file-earmark-diff"></i> Simpan</button>
                        <button type="reset" id="side_form_close" data-bs-dismiss="modal"
                            class="btn mr-2 btn-light btn-cancel btn-sm d-flex align-items-center"
                            style="background-color: #ea443e65; color: #EA443E"><i class="bi bi-trash-fill"
                                style="color: #EA443E"></i>Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
