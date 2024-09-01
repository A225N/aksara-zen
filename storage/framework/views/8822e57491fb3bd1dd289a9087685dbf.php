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
        .badge{
            color: black;
            border: none;
        }

        .tbody{
            background-color: transparent;
        }


        th, td{
            background-color: #F2F5FC !important;
        }
    </style>

     <?php $__env->slot('title', null, []); ?> 
        Leaderboard
     <?php $__env->endSlot(); ?>

    <div class="container mb-4">
        <div class="row py-1">
            <div class="col">
                <h5>Anda peringkat:</h5>
                <h5 class="badge fs-2" style="background-color: #58DF55;">#3344</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Score</th>
                </tr>
            </thead>
            <tbody class="tbody">
                <tr>
                    <th scope="row">#1</th>
                    <td><span class="badge badge-primary">Nama</span></td>
                    <td>112233</td>
                </tr>
                <tr>
                    <th scope="row">#2</th>
                    <td><span class="badge badge-primary">Nama</span></td>
                    <td>XXXXX</td>
                </tr>
                <tr>
                    <th scope="row">#3</th>
                    <td><span class="badge badge-primary">Nama</span></td>
                    <td>XXXXX</td>
                </tr>
                <tr>
                    <th scope="row">#4</th>
                    <td><span class="badge badge-primary">Nama</span></td>
                    <td>XXXXX</td>
                </tr>
                <tr>
                    <th scope="row">#5</th>
                    <td><span class="badge badge-primary">Nama</span></td>
                    <td>XXXXX</td>
                </tr>
                <tr>
                    <th scope="row">#3344</th>
                    <td><span class="badge badge-primary">Anda</span></td>
                    <td>XXXXX</td>
                </tr>
            </tbody>
        </table>
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
<?php /**PATH C:\Users\hp\Documents\Allan\Coding\Web\aksara_zen\resources\views/leaderboard/index.blade.php ENDPATH**/ ?>