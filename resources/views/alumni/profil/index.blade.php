@extends('layouts.layout')
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body p-5">
                        <form class="form-data">
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="uuid" value="">
                            <input type="hidden" name="uuid_alumni" value="{{ $data_alumni->alumni->uuid ?? '' }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="fw-bolder fs-4 mb-5">Informasi Pribadi</div>
                                    <div class="card">
                                        <div class="mb-10">
                                            <label class="form-label">Nama Lengakap</label>
                                            <input type="text" id="name" class="form-control" disabled
                                                value="{{ $data_alumni->name }}">
                                            <small class="text-danger name_error"></small>
                                        </div>

                                        <div class="mb-10">
                                            <label class="form-label">NIM</label>
                                            <input type="text" id="nim" class="form-control" disabled
                                                value="{{ $data_alumni->username }}">
                                            <small class="text-danger nim_error"></small>
                                        </div>

                                        <div class="mb-10">
                                            <label class="form-label">Tanggal Lahir</label>
                                            <input type="text" id="tanggal_lahir" class="form-control kt_datepicker_7"
                                                value="{{ $data_alumni->alumni->tanggal_lahir ?? '' }}"
                                                name="tanggal_lahir">
                                            <small class="text-danger tanggal_lahir_error"></small>
                                        </div>

                                        <div class="mb-10">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select class="form-select form-select-solid" name="jenis_kelamin"
                                                aria-label="Default select example" data-placeholder="-- pilih --">
                                                <option value="">-- Pilih --</option>
                                                <option value="laki-laki"
                                                    {{ isset($data_alumni->alumni->jenis_kelamin) && $data_alumni->alumni->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>
                                                    Laki - laki</option>
                                                <option value="perempuan"
                                                    {{ isset($data_alumni->alumni->jenis_kelamin) && $data_alumni->alumni->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>
                                                    Perempuan</option>
                                            </select>
                                            <small class="text-danger jenis_kelamin_error"></small>
                                        </div>

                                        <div class="mb-10">
                                            <label class="form-label">Alamat</label>
                                            <input type="text" id="alamat" class="form-control"
                                                value="{{ $data_alumni->alumni->alamat ?? '' }}" name="alamat">
                                            <small class="text-danger alamat_error"></small>
                                        </div>

                                        <div class="mb-10">
                                            <label class="form-label">Email</label>
                                            <input type="text" disabled id="email" class="form-control"
                                                value="{{ $data_alumni->email }}">
                                            <small class="text-danger email_error"></small>
                                        </div>

                                        <div class="mb-10">
                                            <label class="form-label">Nomor Telepon</label>
                                            <input type="number" id="nomor_hp" class="form-control"
                                                value="{{ $data_alumni->alumni->nomor_hp ?? '' }}" name="nomor_hp">
                                            <small class="text-danger nomor_hp_error"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fw-bolder fs-4 mb-5">Informasi Akademik</div>
                                    <div class="card">
                                        <div class="mb-10">
                                            <label class="form-label">Fakultas</label>
                                            <input type="text" id="fakultas" class="form-control" disabled
                                                value="{{ $data_alumni->fakultas }}">
                                            <small class="text-danger fakultas_error"></small>
                                        </div>

                                        <div class="mb-10">
                                            <label class="form-label">Jurusan</label>
                                            <input type="text" id="jurusan" class="form-control" disabled
                                                value="{{ $data_alumni->jurusan }}">
                                            <small class="text-danger jurusan_error"></small>
                                        </div>

                                        <div class="mb-10">
                                            <label class="form-label">Tahun Masuk</label>
                                            <input type="number" id="tahun_masuk" class="form-control" name="tahun_masuk"
                                                value="{{ $data_alumni->alumni->tahun_masuk ?? '' }}">
                                            <small class="text-danger tahun_masuk_error"></small>
                                        </div>

                                        <div class="mb-10">
                                            <label class="form-label">Tahun Lulus</label>
                                            <input type="number" id="tahun_lulus" class="form-control"
                                                name="tahun_lulus" value="{{ $data_alumni->alumni->tahun_lulus ?? '' }}">
                                            <small class="text-danger tahun_lulus_error"></small>
                                        </div>

                                        <div class="mb-10">
                                            <label class="form-label">Priode</label>
                                            <input type="text" id="periode" class="form-control" name="periode"
                                                value="{{ $data_alumni->alumni->periode ?? '' }}">
                                            <small class="text-danger periode_error"></small>
                                        </div>

                                        <div class="mb-10">
                                            <label for="predikat" class="form-label">Predikat</label>
                                            <select class="form-select form-select-solid" name="predikat"
                                                aria-label="Default select example" data-placeholder="-- pilih --">
                                                <option value="">-- Pilih --</option>
                                                <option value="cumlaude"
                                                    {{ isset($data_alumni->alumni->predikat) && $data_alumni->alumni->predikat == 'cumlaude' ? 'selected' : '' }}>
                                                    Cumlaude</option>
                                                <option value="sangat memuaskan"
                                                    {{ isset($data_alumni->alumni->predikat) && $data_alumni->alumni->predikat == 'sangat memuaskan' ? 'selected' : '' }}>
                                                    Sangat Memuaskan</option>
                                                <option value="memuaskan"
                                                    {{ isset($data_alumni->alumni->predikat) && $data_alumni->alumni->predikat == 'memuaskan' ? 'selected' : '' }}>
                                                    Memuaskan</option>
                                            </select>
                                            <small class="text-danger predikat_error"></small>
                                        </div>

                                        <div class="mb-10">
                                            <label class="form-label">IPK</label>
                                            <input type="number" id="ipk" class="form-control" name="ipk"
                                                value="{{ $data_alumni->alumni->ipk ?? '' }}">
                                            <small class="text-danger ipk_error"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fw-bolder fs-4 mb-5">Informasi Pekerjaan</div>
                                    <div class="card">
                                        <div class="mb-10">
                                            <label class="form-label">Pekerjaan</label>
                                            <select class="form-select form-select-solid" id="pekerjaan" name="pekerjaan"
                                                aria-label="Default select example" data-placeholder="-- pilih --">
                                                <option value="">-- Pilih --</option>
                                                <option value="bekerja"
                                                    {{ isset($data_alumni->alumni->pekerjaan) && $data_alumni->alumni->pekerjaan == 'bekerja' ? 'selected' : '' }}>
                                                    Bekerja</option>
                                                <option value="tidak bekerja"
                                                    {{ isset($data_alumni->alumni->pekerjaan) && $data_alumni->alumni->pekerjaan == 'tidak bekerja' ? 'selected' : '' }}>
                                                    Tidak Bekerja</option>
                                            </select>
                                            <small class="text-danger pekerjaan_error"></small>
                                        </div>

                                        <div id="status-perusahaan" style="display: none;">
                                            <div class="mb-10">
                                                <label class="form-label">Perusahan Tempat Bekerja</label>
                                                <input type="text" id="perusahaan" class="form-control"
                                                    name="status[]" value="{{ $data_alumni->alumni->status[0] ?? '' }}">
                                                <small class="text-danger status_error"></small>
                                            </div>

                                            <div class="mb-10">
                                                <label class="form-label">Posisi</label>
                                                <input type="text" id="posisi" class="form-control"
                                                    name="status[]" value="{{ $data_alumni->alumni->status[1] ?? '' }}">
                                                <small class="text-danger status_error"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="mb-10">
                                            <label class="form-label">Foto</label>
                                            <input type="file" accept="image/*" id="foto" class="form-control"
                                                name="foto">
                                            <small class="text-danger foto_error"></small>

                                            <div class="mt-3" id="fotoInfoContainer">
                                                <img id="img-foto"
                                                    src="{{ isset($data_alumni->alumni) && isset($data_alumni->alumni->foto) ? asset('profil/' . $data_alumni->alumni->foto) : '' }}"
                                                    alt="no foto" style="max-width:100%;">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="mb-10">
                                            <label class="form-label">Foto Bukti Keterangan Alumni</label>
                                            <input type="file" accept="image/*" id="ket_alumni" class="form-control"
                                                name="ket_alumni">
                                            <small class="text-danger ket_alumni_error"></small>

                                            <div class="mt-3" id="ketAlumniInfoContainer">
                                                <img id="img-ket_alumni"
                                                    src="{{ isset($data_alumni->alumni) && isset($data_alumni->alumni->ket_alumni) ? asset('bukti/' . $data_alumni->alumni->ket_alumni) : '' }}"
                                                    alt="no surat keterangan" style="max-width:100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed mb-5"></div>
                            <div class="d-flex gap-5 justify-content-end">
                                <button type="submit"
                                    class="btn btn-primary btn-sm btn-submit d-flex align-items-center"><i
                                        class="bi bi-file-earmark-diff"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
@section('script')
    <script>
        let control = new Control();

        $(".kt_datepicker_7").flatpickr({
            dateFormat: "d-m-Y",
        });

        $(document).ready(function() {
            $('#foto').change(function() {
                previewImage(this, '#fotoInfoContainer', '.foto_error');
            });

            $('#ket_alumni').change(function() {
                previewImage(this, '#ketAlumniInfoContainer', '.ket_alumni_error');
            });

            function previewImage(input, containerSelector, errorSelector) {
                var container = $(containerSelector);
                var errorElement = $(errorSelector);

                // Reset error message
                errorElement.text('');

                // Cek apakah file yang dipilih adalah gambar
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        // Tampilkan gambar
                        container.html('<img src="' + e.target.result + '" style="max-width:100%;">');
                    };

                    reader.readAsDataURL(input.files[0]);
                } else {
                    // Tampilkan pesan error jika file tidak valid
                    errorElement.text('Pilih file gambar yang valid.');
                    container.html('');
                }
            }
        });

        $(document).ready(function() {
            function toggleStatusPerusahaan() {
                var selectedOptions = $('#pekerjaan').val();
                var alumniStatus = @json($data_alumni->alumni->pekerjaan ?? '');
                if (selectedOptions === 'bekerja' || alumniStatus === 'bekerja') {
                    $('#status-perusahaan').show();
                } else {
                    $('#status-perusahaan').hide();
                }
            }

            // Initial check on page load
            toggleStatusPerusahaan();

            // Event listener for change on #pekerjaan select
            $('#pekerjaan').on('change', function() {
                toggleStatusPerusahaan();
            });
        });

        $(document).on('submit', ".form-data", function(e) {
            e.preventDefault();

            var pekerjaan = $('#pekerjaan').val();
            if (pekerjaan !== 'bekerja') {
                $("input[name='status[]']").val(null);
            }

            control.submitFormMultipartData('/alumni/add-profil', 'Update', 'Profil', 'POST');
        });
    </script>
@endsection
