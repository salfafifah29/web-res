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
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="background-color: rgb(157, 169, 223)">
                <div class="p-6 text-gray-900" style="color: #ffffff;font-size: 30px">
                    <?php echo e(__("You're logged in!")); ?>

                </div>
                <div class="map-container">
                    <div class="mapBg"></div>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.719099997164!2d106.8236706!3d-6.3707762!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec1cabb59bdf%3A0x28b4f84e4677f329!2sJakarta%20State%20Polytechnic!5e0!3m2!1sen!2sid!4v1715444661121!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="contactMethod">
                    <div class="method">
                        <i class="fa-solid fa-location-dot contactIcon"></i>
                        <article class="text">
                            <h1 class="sub-heading">Location</h1>
                            <p class="para">Politeknik Negeri Jakarta</p>
                        </article>
                    </div>
    
                    <div class="method">
                        <i class="fa-solid fa-envelope contactIcon"></i>
                        <article class="text">
                            <h1 class="sub-heading">Email</h1>
                            <p class="para">Email: sushisho@gmail.com</p>
                        </article>
                    </div>
    
                    <div class="method">
                        <i class="fa-solid fa-phone contactIcon"></i>
                        <article class="text">
                            <h1 class="sub-heading">Phone</h1>
                            <p class="para">0987654321</p>
                        </article>
                    </div>
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
<link rel="stylesheet" href="<?php echo e(asset('css/restyle.css')); ?>"><?php /**PATH C:\xampp\htdocs\newwebsite\resources\views/dashboard.blade.php ENDPATH**/ ?>