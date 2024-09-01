<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <style>


        .story-text {
            text-align: justify;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .download-button {
            display: block;
            margin: 0 auto;
            margin-top: 20px;
        }

        .btn{
            background-color: #58DF55;
            border: none;
        }
    </style>

    <div class="container py-5">
        <div class="card d-flex justify-content-center">
            <img src="https://www.anakbisa.com/wp-content/uploads/2023/10/jaka-tarub-dan-dewi-nawang-wulan-2.png" style="height: 50vh" alt="Jaka Tarub Illustration" class="img">
        </div>

        <h1 class="text-center mb-4 py-5">Jaka Tarub</h1>

        <p class="text-center">
            Sangkuriang termasuk dalam cerita rakyat. Perkiraan waktu membaca adalah 4 menit. Baca cerita ini untuk dapatkan 10 poin
        </p>

        <div class="card">
            <div class="card-body">
                <p>Pada masa lalu hiduplah seorang pemuda bernama Jaka Tarub. Dia merupakan pemuda desa yang gemar berburu. Suatu hari, dia sedang berburu burung di tengah hutan.

                    Selama seharian Jaka Tarub belum menemukan burung buruan. Dia masuk hutan semakin dalam. Di tengah belantara, sayup-sayup dia mendengar suara beberapa wanita sedang berbincang.

                    Suara perempuan itu beradu dengan suara air gemericik. Karena penasaran, Jaka Tarub mencari sumber suara tersebut.

                    Betapa terkejutnya dia saat melihat ternyata ada sekelompok bidadari yang tengah mandi di telaga. Paras para bidadari itu sangatlah cantik. Kemudian timbul sebuah ide nakal.

                    Jaka Tarub mengambil salah satu baju milik bidadari itu. Kemudian dia kembali bersembunyi sambil membawa pakaian itu.

                    Menjelang sore, para bidadari itu selesai mandi. Mereka mengenakan pakaian mereka kembali dan pulang menuju langit.

                    Namun, ada satu bidadari yang tertinggal dan tidak ikut pulang. Sebab, dia kehilangan pakaiannya. Bak malaikat penolong, Jaka Tarub muncul meminjamkan kain kepada bidadari itu. Bidadari bernama Nawang Wulan itu lantas diajak pulang ke rumah.

                    Mereka berdua kemudian menikah. Nawang Wulan kini juga harus bekerja seperti layaknya manusia, seperti memasak dan mencuci.

                    Namun, sebagai seorang bidadari dia memiliki kesaktian. Setiap hari dia hanya memasukkan sehelai padi ke dalam periuk. Anehnya, hasilnya bisa menjadi nasi yang cukup dimakan sekeluarga.

                    Namun, kesaktiannya itu bisa hilang jika ada orang yang membuka periuk saat dia memasak nasi. Dia selalu berpesan kepada Jaka Tarub untuk tidak membuka periuk itu.
                </p>

                <p>Rasa penasaran itu akibatnya sangat besar. Kini, kesaktian Nawang Wulan lenyap. Kini dia harus memasak beras untuk bisa menyiapkan makan bersama keluarganya. Persediaan beras di lumbung yang selama ini tidak pernah berkurang lama-kelamaan semakin terkikis.

                    Setiap hari Nawang Wulan mengambil persediaan beras di lumbung. Saat persediaan menipis, dia ternyata justru menemukan sehelai baju di lumbung. Baju itu merupakan kepunyaannya yang hilang saat mandi di telaga.
                </p>

                <p>Nawang Wulan baru sadar bahwa pakaian itu memang sengaja dicuri dan disembunyikan oleh Jaka Tarub. Dia lantas segera mengenakan pakaian itu kembali dan berubah menjadi bidadari.

                    Setelah berpesan kepada Jaka Tarub untuk terus merawat anak mereka, Nawangsih, akhirnya Nawang Wulan pulang kembali ke kayangan.
                </p>
            </div>

        </div>

        <a href="#" class="btn download-button" style="font-weight: bold;">Unduh</a>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Seru kan ceritanya</h5>
                        <p class="card-text">Ayo kerjain soal biar dapat poin!</p>
                        <a class="btn" style="font-weight: bold" href="<?php echo e(route('library.show-soal')); ?>">Kerjakan soal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hp\Documents\Allan\Coding\Web\aksara_zen\resources\views/library/show.blade.php ENDPATH**/ ?>