@extends('layouts.layout')
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <div class="row">

                <div class="card">
                    <div class="card-body p-0">
                        <div class="container">
                            <div class="py-5 table-responsive">
                                <table id="kt_table_data"
                                    class="table table-striped table-rounded border border-gray-300 table-row-bordered table-row-gray-300">
                                    <thead class="text-center">
                                        <tr class="fw-bolder fs-6 text-gray-800">
                                            <th>No</th>
                                            <th>Nama Pengisi</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No HP</th>
                                            <th>Email</th>
                                            <th>Jurusan</th>
                                            <th>Tahun_lulus</th>
                                            <th>Status Pekerjaan</th>
                                            <th>Kepuasan Pendidikan</th>
                                            <th>Kepuasan Fasilitas</th>
                                            <th>Harapan</th>
                                            <th>Saran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>

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

        $(document).on('keyup', '#search_', function(e) {
            e.preventDefault();
            control.searchTable(this.value);
        })

        const initDatatable = async () => {
            // Destroy existing DataTable if it exists
            if ($.fn.DataTable.isDataTable('#kt_table_data')) {
                $('#kt_table_data').DataTable().clear().destroy();
            }

            // Initialize DataTable
            $('#kt_table_data').DataTable({
                responsive: true,
                pageLength: 10,
                order: [
                    [0, 'asc']
                ],
                processing: true,
                ajax: '/admin/get-data-survey',
                columns: [{
                    data: null,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                }, {
                    data: 'nama_pengisi',
                    className: 'text-center',
                }, {
                    data: 'jenis_kelamin',
                    className: 'text-center',
                }, {
                    data: 'no_hp',
                    className: 'text-center',
                }, {
                    data: 'email',
                    className: 'text-center',
                }, {
                    data: 'jurusan',
                    className: 'text-center',
                }, {
                    data: 'tahun_lulus',
                    className: 'text-center',
                }, {
                    data: 'status_pekerjaan',
                    className: 'text-center',
                }, {
                    data: 'kepuasan_pendidikan',
                    className: 'text-center',
                }, {
                    data: 'kepuasan_fasilitas',
                    className: 'text-center',
                }, {
                    data: 'harapan',
                    className: 'text-center',
                }, {
                    data: 'saran',
                    className: 'text-center',
                }],

                rowCallback: function(row, data, index) {
                    var api = this.api();
                    var startIndex = api.context[0]._iDisplayStart;
                    var rowIndex = startIndex + index + 1;
                    $('td', row).eq(0).html(rowIndex);
                },
            });
        };

        $(function() {
            initDatatable();
        });
    </script>
@endsection
