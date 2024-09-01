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
     <?php $__env->slot('title', null, []); ?> 
        Event
     <?php $__env->endSlot(); ?>

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <a class="card mb-3" href="<?php echo e(route('event.show')); ?>">
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
<?php /**PATH C:\Users\hp\Documents\Allan\Coding\Web\aksara_zen\resources\views/event/index.blade.php ENDPATH**/ ?>