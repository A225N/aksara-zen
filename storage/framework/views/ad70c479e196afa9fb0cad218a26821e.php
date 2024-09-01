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
        .btn{
            background-color: #58DF55;
            border: none;
        }
        .form-control{
            border-color: #58DF55;
        }
    </style>
    <div class="container py-5">
        <div class="card d-flex justify-content-center mb-4">
            <h3 class="container card-title d-flex justify-content-center py-3">Apa pesan moral yang dapat dipetik?</h3>
            <div class="container form-group">
                <textarea class="form-control mb-3" rows="5" placeholder="Masukkan jawabanmu di sini"></textarea>
            </div>
        </div>
        <h4 class="card-title">Jawabanmu betul</h4>
        <p class="card-text">
            +20 poin
        </p>
        <p class="card-text">
            Koreksi Al
        </p>
        <p class="card-text">
            Jawabanmu sudah betul. Pesan moral yang bisa diambil dari kisah ini adalah
            sepintar apa pun kita menyembunyikan sesuatu, pada akhirnya akan terbongkar juga
        </p>
    </div>

    <div class="container">
        <h2 class="mt-4">Bacaan yang mungkin anda suka</h2>
        <div class="row mt-3">
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
            <div class="col-md-6">
                <a class="card mb-3" href="">
                    <img src="https://arrahim.id/wp-content/uploads/2024/05/Malin-Kundang-2.png" style="height: 50vh;" class="card-img-top" alt="Judul Literatur Anggep Aja Agak Panjang">
                    <div class="card-body">
                        <h5 class="card-title">Cerita Malin Kundang</h5>
                        <p class="card-text">
                            <span class="badge badge-success">Cerita rakyat</span>
                            <span class="badge badge-info">4 menit</span>
                            <span class="badge badge-warning">10 poin</span>
                        </p>
                        <p class="card-text">
                            Tertarik oleh keindahan dan pesona Nawang Wulan, Jaka Tarub berencana untuk mengambil salah satu selendang...
                        </p>
                    </div>
                </a>
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
<?php /**PATH C:\Users\hp\Documents\Allan\Coding\Web\aksara_zen\resources\views/library/show-koreksi.blade.php ENDPATH**/ ?>