<x-layout>

    <x-slot:title>
        Library
    </x-slot:title>

    <div class="container">

        <div class="row mt-3">
            <div class="col-md-6">
                <a class="card mb-3" href="{{ route('library.show') }}">
                    <img src="https://www.anakbisa.com/wp-content/uploads/2023/10/jaka-tarub-dan-dewi-nawang-wulan-2.png" style="height:50vh" class="card-img-top" alt="Judul Literatur Anggep Aja Agak Panjang">
                    <div class="card-body">
                        <h5 class="card-title">Cerita Legenda Jaka Tarub</h5>
                        <p class="card-text">
                            <span class="badge text-wrap">Cerita rakyat</span>
                            <span class="badge badge-info">4 menit</span>
                            <span class="badge badge-warning">10 poin</span>
                        </p>
                        <p class="card-text">
                            Tertarik oleh keindahan dan pesona Nawang Wulan, Jaka Tarub berencana untuk mengambil salah satu selendang...
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="card mb-3" href="">
                    <img src="https://i.pinimg.com/564x/ea/3b/89/ea3b89c602c8620c91aa81afa82072a7.jpg" style="height: 50vh;" class="card-img-top" alt="Judul Literatur Anggep Aja Agak Panjang">
                    <div class="card-body">
                        <h5 class="card-title">Legenda Timun Mas</h5>
                        <p class="card-text">
                            <span class="badge badge-success">Cerita rakyat</span>
                            <span class="badge badge-info">4 menit</span>
                            <span class="badge badge-warning">10 poin</span>
                        </p>
                        <p class="card-text">
                            Pada suatu hari, di sebuah desa di daerah Jawa Tengah, ada seorang janda paruh baya yang tinggal sendirian...
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>

</x-layout>
