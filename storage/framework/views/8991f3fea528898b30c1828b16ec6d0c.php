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
        <div>   </div>
    </div>

    <div class="container d-flex justify-content-center">
        <a class="btn" href="<?php echo e(route('library.show-koreksi')); ?>" style="font-weight: bold">Kumpulkan</a>
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
<?php /**PATH C:\Users\hp\Documents\Allan\Coding\Web\aksara_zen\resources\views/library/show-soal.blade.php ENDPATH**/ ?>