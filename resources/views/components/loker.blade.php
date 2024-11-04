 <!--begin::Testimonials Section-->
 <div id="loker" class="mt-20 pt-20 mb-n20 position-relative z-index-2">
     <!--begin::Container-->
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div style="width: max-content; font-size: 15px; font-weight: bold; border-bottom: 2px solid #12CE5D">
                     Loker (Lowongan Pekerjaan)</div>

                 <div class="row py-5" style="row-gap: 20px">
                     @foreach ($loker as $item)
                         @php
                         if (!function_exists('potongTeksLoker')) {
                             function potongTeksLoker($teks, $panjang_maks = 200)
                             {
                                 // Memastikan teks panjangnya lebih dari panjang maksimum
                                 if (strlen($teks) > $panjang_maks) {
                                     // Potong teks hingga panjang maksimum
                                     $teks = substr($teks, 0, $panjang_maks);

                                     // Cari posisi spasi terakhir agar tidak memotong kata secara sembarang
                                     $posisi_spasi_terakhir = strrpos($teks, ' ');

                                     // Potong lagi hingga spasi terakhir untuk memastikan potongan teks berakhir pada kata
                                     $teks = substr($teks, 0, $posisi_spasi_terakhir);

                                     // Tambahkan elipsis untuk menunjukkan bahwa teks dipotong
                                     $teks .= '...';
                                 }

                                 return $teks;
                             }
                            }

                             $teks_pendek = potongTeksLoker(strip_tags($item->deskripsi));
                         @endphp
                         <div class="col-md-4">
                             <div class="card shadow-lg h-470px">
                                 <div class="card-body d-grid gap-2">
                                     <a target="_blank" href="{{ $item->link }}" class="fw-bolder fs-5">
                                         {{ $item->nama_loker }}
                                     </a>
                                     <div class="d-flex align-items-center gap-2 small">
                                         <i class="bi bi-building text-info"></i>
                                         <div>{{ $item->perusahaan }}</div>
                                     </div>
                                     <div class="d-flex align-items-center gap-2 small">
                                         <i class="bi bi-pin-map text-danger"></i>
                                         <div>{{ $item->lokasi }}</div>
                                     </div>
                                     <div style="font-size: 12px">{{ $teks_pendek }}</div>
                                 </div>
                             </div>
                         </div>
                     @endforeach

                     <!-- Tampilkan link navigasi pagination -->
                     <ul class="pagination">
                         <!-- Link navigasi untuk halaman sebelumnya -->
                         <li class="page-item previous {{ $loker->previousPageUrl() ? '' : 'disabled' }}">
                             <a href="{{ $loker->previousPageUrl() }}" class="page-link"><i class="previous"></i></a>
                         </li>

                         <!-- Link navigasi untuk setiap halaman -->
                         @for ($i = 1; $i <= $loker->lastPage(); $i++)
                             <li class="page-item {{ $i == $loker->currentPage() ? 'active' : '' }}">
                                 <a href="{{ $loker->url($i) }}" class="page-link">{{ $i }}</a>
                             </li>
                         @endfor

                         <!-- Link navigasi untuk halaman berikutnya -->
                         <li class="page-item next {{ $loker->nextPageUrl() ? '' : 'disabled' }}">
                             <a href="{{ $loker->nextPageUrl() }}" class="page-link"><i class="next"></i></a>
                         </li>
                     </ul>

                 </div>
             </div>
         </div>
     </div>
 </div>
