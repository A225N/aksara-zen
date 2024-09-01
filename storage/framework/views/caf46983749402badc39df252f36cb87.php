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
            <img src="https://natureconservancy-h.assetsadobe.com/is/image/content/dam/tnc/nature/en/photos/ykan/slider/Perempuan.jpg?crop=0%2C12%2C1920%2C1056&wid=4000&hei=2200&scl=0.48" style="height: 50vh" alt="Jaka Tarub Illustration" class="img">
        </div>

        <h1 class="text-center mb-4 py-5">Perempuan Untuk Alam</h1>

        <div class="card">
            <div class="card-body">
                <p>Kesetaraan gender adalah bagian dari agenda konservasi YKAN. Perayaan Hari Bumi tahun 2022 digunakan sebagai momentum untuk memperkenalkan, menyoroti dan memberikan penghargaan terhadap perempuan dalam upaya konservasi alam. YKAN mendorong para audiens untuk berefleksi dan berbagi kisah mengenai alam,
                     konservasi, dan para perempuan dibaliknya. Adapun kampanye Hari Bumi tahun 2022 ini akan dirayakan setahun penuh, dimulai dari tanggal 22 April 2022 hingga 22 April 2023, sebagai upaya pengingat bahwa setiap hari dalam kehidupan kita, dapat dirayakan sebagai kehidupan dimana kita dan bumi tak terpisahkan.
                </p>

                <p>
                    1. Karya harus orisinal dan mengangkat cerita sebenar-benarnya (tidak mengada-ada)
                </p>
                <p>
                    2. Ceritakan kisah tentang peran perempuan di sekitarmu yang telah memberikan kontribusinya pada alam dan memberikan dampak bagi lingkungan atau kehidupan.   Ceritakan mengapa perempuan yang diceritakan itu berhak menjadi PAHLAWAN ALAM YKAN.
                </p>
                <p>
                    3. Unggah ceritamu di media sosial (Instagram, Facebook, Twitter, TikTok, Lainnya)

                </p>
                <p>
                    4. Pastikan akun sosial mediamu tidak diprivat/dikunci
                </p>
                <p>
                    5. Follow dan tag/mention akun sosial media YKAN
                </p>
                <p>
                    6. Beri tagar #PerempuanUntukAlam di caption
                </p>
                <p>
                    7. Submit link postinganmu melalui: bit.ly/PerempuanUntukAlam
                </p>
            </div>

        </div>

        <a href="#" class="btn download-button" style="font-weight: bold;">Daftar</a>
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
<?php /**PATH C:\Users\hp\Documents\Allan\Coding\Web\aksara_zen\resources\views/event/show.blade.php ENDPATH**/ ?>