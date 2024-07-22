<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('About Us')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="background-color: rgb(157, 169, 223);">
                <div class="p-6 text-gray-900">
                    <section id="me" class="me">
                        <div class="my-img">
                            <img src="<?php echo e(asset('image/aku.jpg')); ?>" alt="">
                        </div>
                        <div class="desk">
                            <h1>salma afifah</h1>
                            <p>2203421025</p>
                            <p>BM 4A</p>
                            <ul class="social-icon">
                                <li><a href="https://www.instagram.com/sal_afifa/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href="https://twitter.com/lookmeay"><ion-icon name="logo-twitter"></ion-icon></a></li> 
                                <li><a href="https://www.tiktok.com/@kukischoc"><ion-icon name="logo-tiktok"></ion-icon></a></li> 
                                <li><a href="https://id.pinterest.com/salfafifah/"><ion-icon name="logo-pinterest"></ion-icon></a></li>
                            </ul>
                        </div>
                        <div class="my-img">
                            <img src="<?php echo e(asset('image/ekabiru.jpg')); ?>" alt="">
                        </div>
                        <div class="desk">
                            <h1>Eka Safitri</h1>
                            <p>2203421036</p>
                            <p>BM 4A</p>
                            <ul class="social-icon">
                                <li><a href="https://www.instagram.com/ekaaasfitri/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href="https://x.com/yyeayyyy?t=yrTwijaHJvSxoDFcrBbJqw&s=09"><ion-icon name="logo-twitter"></ion-icon></a></li> 
                                <li><a href="https://www.tiktok.com/@chclatzs?_t=8o0upkWx8WA&_r=1"><ion-icon name="logo-tiktok"></ion-icon></a></li> 
                                <li><a href="https://pin.it/5kcd1tuSj"><ion-icon name="logo-pinterest"></ion-icon></a></li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<link rel="stylesheet" href="<?php echo e(asset('css/restyle.css')); ?>"><?php /**PATH C:\xampp\htdocs\newwebsite\resources\views/aboutus.blade.php ENDPATH**/ ?>