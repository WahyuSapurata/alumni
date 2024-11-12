 <!--begin::Testimonials Section-->
 <div id="berita" class="mt-20 mb-n20 position-relative z-index-2">
     <!--begin::Container-->
     <div class="container">
         <div class="row">
             <div class="col-md-8">
                 <div style="width: max-content; font-size: 15px; font-weight: bold; border-bottom: 2px solid #12CE5D">
                     Berita Utama</div>

                 <div class="row py-5" style="row-gap: 20px">
                     @foreach ($berita as $item)
                     @php
                        if (!function_exists('potongTeks')) {
                            function potongTeks($teks, $panjang_maks = 200)
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

                        $teks_pendek = potongTeks(strip_tags($item->isi_berita));
                        @endphp

                         <div class="col-md-6">
                             <div class="card h-470px" style="border: 1px solid rgba(0, 0, 0, .3); border-radius: 4px">
                                 <img src="{{ asset('berita/' . $item->gambar) }}" class="w-100 h-200px"
                                     style="border-radius: 4px" alt="">
                                 <div class="card-body d-grid p-5 gap-2">
                                     <div class="small text-muted"><small class="fst-italic">Publish :</small>
                                         {{ $item->tanggal_publikasi }}</div>
                                     <a href="{{ route('detail-berita', ['params' => $item->uuid]) }}"
                                         class="fw-bolder fs-5">
                                         {{ $item->judul_berita }}
                                     </a>
                                     <div style="font-size: 12px">{{ $teks_pendek }}</div>
                                     <a href="{{ route('detail-berita', ['params' => $item->uuid]) }}"
                                         class="btn btn-success">Read More</a>
                                 </div>
                             </div>
                         </div>
                     @endforeach

                     <!-- Tampilkan link navigasi pagination -->
                     <ul class="pagination">
                         <!-- Link navigasi untuk halaman sebelumnya -->
                         <li class="page-item previous {{ $berita->previousPageUrl() ? '' : 'disabled' }}">
                             <a href="{{ $berita->previousPageUrl() }}" class="page-link"><i class="previous"></i></a>
                         </li>

                         <!-- Link navigasi untuk setiap halaman -->
                         @for ($i = 1; $i <= $berita->lastPage(); $i++)
                             <li class="page-item {{ $i == $berita->currentPage() ? 'active' : '' }}">
                                 <a href="{{ $berita->url($i) }}" class="page-link">{{ $i }}</a>
                             </li>
                         @endfor

                         <!-- Link navigasi untuk halaman berikutnya -->
                         <li class="page-item next {{ $berita->nextPageUrl() ? '' : 'disabled' }}">
                             <a href="{{ $berita->nextPageUrl() }}" class="page-link"><i class="next"></i></a>
                         </li>
                     </ul>

                 </div>
             </div>
             <div class="col-md-4">
                 <div style="width: max-content; font-size: 15px; font-weight: bold; border-bottom: 2px solid #12CE5D">
                     Berita Terkini</div>
                 <div class="d-grid py-5 gap-5">
                     @foreach ($newBerita as $itemNew)
                         <div class="card" style="border: 1px solid rgba(0, 0, 0, .3); border-radius: 4px">
                             <div class="card-body p-4">
                                 <div class="d-flex gap-4">
                                     <img src="{{ asset('berita/' . $itemNew->gambar) }}" alt=""
                                         class="w-100px rounded-1">
                                     <div class="d-grid">
                                         <a href="{{ route('detail-berita', ['params' => $item->uuid]) }}"
                                             class="small fw-bolder">{{ $itemNew->judul_berita }}</a>
                                         <div class="small text-muted"><small class="fst-italic">Publish :</small>
                                             {{ $itemNew->tanggal_publikasi }}
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </div>
