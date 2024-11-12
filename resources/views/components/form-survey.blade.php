<div class="modal fade" tabindex="-1" id="kt_modal_2" style="z-index: 1; margin-top: 60px; padding-bottom: 50px">
    <div class="modal-dialog" style="max-width: 750px">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Survey Pengguna</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z" />
                    </svg>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body text-start">
                <form class="form-data" enctype="multipart/form-data" data-type="survey">
                    <input type="hidden" name="id">
                    <input type="hidden" name="uuid">
                    <div class="mb-10">
                        <label class="form-label">Nama Pengisi</label>
                        <input type="text" id="nama_pengisi" class="form-control" name="nama_pengisi">
                        <small class="text-danger nama_pengisi_error"></small>
                    </div>

                    <div class="mb-10">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select form-select-solid" id="jenis_kelamin" name="jenis_kelamin"
                            aria-label="Default select example" data-placeholder="-- pilih --">
                            <option>-- Pilih --</option>
                            <option value="laki-laki">Laki - laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <small class="text-danger jenis_kelamin_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">No HP</label>
                        <input type="number" id="no_hp" class="form-control" name="no_hp">
                        <small class="text-danger no_hp_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                        <small class="text-danger email_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan">
                        <small class="text-danger jurusan_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Tahun Lulus</label>
                        <input type="number" id="tahun_lulus" class="form-control" name="tahun_lulus">
                        <small class="text-danger tahun_lulus_error"></small>
                    </div>

                    <div class="mb-10">
                        <label for="status_pekerjaan" class="form-label">Status Pekerjaan</label>
                        <select class="form-select form-select-solid" id="status_pekerjaan" name="status_pekerjaan"
                            aria-label="Default select example" data-placeholder="-- pilih --">
                            <option>-- Pilih --</option>
                            <option value="bekerja">Bekerja</option>
                            <option value="tidak bekerja">Tidak Bekerja</option>
                            <option value="menganggur">Menganggur</option>
                        </select>
                        <small class="text-danger status_pekerjaan_error"></small>
                    </div>

                    <div class="mb-10 d-flex align-items-center">
                        <label class="form-label w-100">Kepuasan terhadap pendidikan yang
                            diterima</label>
                        <div class="d-flex align-items-center gap-5 justify-content-end w-100">
                            <div class="d-grid justify-content-center" style="justify-items: center;">
                                <label class="form-label">Sangat Baik</label>
                                <input class="form-check-input" type="radio" value="sangat baik"
                                    name="kepuasan_pendidikan" />
                            </div>
                            <div class="d-grid justify-content-center" style="justify-items: center;">
                                <label class="form-label">Baik</label>
                                <input class="form-check-input" type="radio" value="baik"
                                    name="kepuasan_pendidikan" />
                            </div>
                            <div class="d-grid justify-content-center" style="justify-items: center;">
                                <label class="form-label">Cukup</label>
                                <input class="form-check-input" type="radio" value="cukup"
                                    name="kepuasan_pendidikan" />
                            </div>
                            <div class="d-grid justify-content-center" style="justify-items: center;">
                                <label class="form-label">Kurang</label>
                                <input class="form-check-input" type="radio" value="kurang"
                                    name="kepuasan_pendidikan" />
                            </div>
                        </div>
                    </div>
                    <small class="text-danger kepuasan_pendidikan_error"></small>

                    <div class="mb-10 d-flex align-items-center">
                        <label class="form-label w-100">Kepuasan terhadap fasilitas yang di
                            dapat</label>
                        <div class="d-flex align-items-center gap-5 justify-content-end w-100">
                            <div class="d-grid justify-content-center" style="justify-items: center;">
                                <label class="form-label">Sangat Baik</label>
                                <input class="form-check-input" type="radio" value="sangat baik"
                                    name="kepuasan_fasilitas" />
                            </div>
                            <div class="d-grid justify-content-center" style="justify-items: center;">
                                <label class="form-label">Baik</label>
                                <input class="form-check-input" type="radio" value="baik"
                                    name="kepuasan_fasilitas" />
                            </div>
                            <div class="d-grid justify-content-center" style="justify-items: center;">
                                <label class="form-label">Cukup</label>
                                <input class="form-check-input" type="radio" value="cukup"
                                    name="kepuasan_fasilitas" />
                            </div>
                            <div class="d-grid justify-content-center" style="justify-items: center;">
                                <label class="form-label">Kurang</label>
                                <input class="form-check-input" type="radio" value="kurang"
                                    name="kepuasan_fasilitas" />
                            </div>
                        </div>
                    </div>
                    <small class="text-danger kepuasan_fasilitas_error"></small>

                    <div class="mb-10">
                        <label class="form-label">Harapan</label>
                        <textarea name="harapan" id="harapan" class="form-control" cols="30" rows="10"></textarea>
                        <small class="text-danger harapan_error"></small>
                    </div>

                    <div class="mb-10">
                        <label class="form-label">Saran</label>
                        <textarea name="saran" id="saran" class="form-control" cols="30" rows="10"></textarea>
                        <small class="text-danger saran_error"></small>
                    </div>

                    <div class="separator separator-dashed mt-8 mb-5"></div>
                    <div class="d-flex gap-5">
                        <button type="submit" class="btn btn-primary btn-sm btn-submit d-flex align-items-center"><i
                                class="bi bi-file-earmark-diff"></i> Simpan</button>
                        <button type="reset" id="side_form_close_survey" data-bs-dismiss="modal"
                            class="btn mr-2 btn-light btn-cancel btn-sm d-flex align-items-center"
                            style="background-color: #ea443e65; color: #EA443E"><i class="bi bi-trash-fill"
                                style="color: #EA443E"></i>Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
