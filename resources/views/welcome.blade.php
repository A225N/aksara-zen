<x-layout>

<style>
    .card{
        border: none;
    }

    .badge{
        color: black;
        background-color: #58DF55;
    }

    a{
        text-decoration: none;
    }

    .btn-profile2 {
            border: none;
            height: 100px;
            width: 100px;
            background-color: #6FB3D8;
            border-radius: 50%;
    }

    .progress-bar{
        background-color: #58DF55;
    }
</style>

<main class="container mt-4">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">

                    <div class="row mt-6">
                        <div class="col-md-8">

                            <h2 class="card-title">Halo, Dik Maul</h2>
                            <p class="card-text">Bacaan dibaca hari ini</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="progress" style="max-width: 100%">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="max-width: 10px"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text">1/2</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="btn-profile2">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Peringkat:</h5>
                    <h5 class="card-title badge fs-1" style="background-color: #58DF55">#3344</h5>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-4">Event</h2>
    <div class="row mt-3">
        <div class="col-md-6">
            <a class="card mb-3" href="{{ route('event.show') }}">
                <img src="https://natureconservancy-h.assetsadobe.com/is/image/content/dam/tnc/nature/en/photos/ykan/slider/Perempuan.jpg?crop=0%2C12%2C1920%2C1056&wid=4000&hei=2200&scl=0.48" style="height: 50vh" class="card-img-top" alt="Pekan Bahasa dan Sastra Nasional 2024">
                <div class="card-body">
                    <h5 class="card-title">Perempuan Untuk Alam</h5>
                    <p class="card-text">
                        <span class="badge badge-primary">Nasional</span>
                        <span class="badge badge-warning">Kompetisi</span>
                        <span class="badge badge-info">Ajang</span>
                    </p>
                    <p class="card-text">
                        Kesetaraan gender adalah bagian dari agenda konservasi YKAN. Perayaan Hari Bumi tahun 2022 digunakan sebagai...
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="card mb-3" href="">
                <img src="https://disippus.trenggalekkab.go.id/media/2021/08/Slider.png" style="height: 50vh" class="card-img-top" alt="Pekan Bahasa dan Sastra Nasional 2024">
                <div class="card-body">
                    <h5 class="card-title">Lomba Menulis Cerita Trenggalek</h5>
                    <p class="card-text">
                        <span class="badge badge-success">Menulis</span>
                        <span class="badge badge-info">Ajang</span>
                        <span class="badge badge-warning">Kompetisi</span>
                    </p>
                    <p class="card-text">
                        Melalui Lomba Bercerita Bahasa Daerah diharapkan Agar kita mengenal kembali budaya berupa cerita yang...
                    </p>
                </div>
            </a>
        </div>
    </div>

    <h2 class="mt-4">Baca hari ini</h2>
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
</main>

</x-layout>
