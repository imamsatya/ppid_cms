<?php if (isset($component)) { $__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50 = $component; } ?>
<?php $component = App\View\Components\Frontend\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Frontend\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startPush('head-scripts'); ?>
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/home/index.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/profile/kontak/index.css')); ?>" rel="stylesheet" />
        <style>
            p::first-letter {
                text-transform: none;
            }

            span {
                text-transform: none;
            }
        </style>
    <?php $__env->stopPush(); ?>
    <!-- Informasi -->
    <section class="informasi_kontak">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="images">
                        <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_marker.png')); ?>" class="img-fluid"
                            alt="" />
                    </div>
                    <label class="mt-3">Alamat</label>
                    <p for=""><?php echo e($kontak->alamat ?? ''); ?></p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="images">
                        <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_telp.png')); ?>" class="img-fluid"
                            alt="" />
                    </div>
                    <label class="mt-3">Telepon</label>
                    <p for=""><?php echo e($kontak->telepon ?? ''); ?></p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="images">
                        <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_email.png')); ?>" class="img-fluid"
                            alt="" />
                    </div>
                    <label class="mt-3">Pesan</label>
                    <p for=""><?php echo e($kontak->email ?? ''); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Informasi -->

    <!-- Map -->
    <section class="mapping">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <label for="">Waktu Pelayanan Informasi Publik</label>
                    
                    <?php echo $kontak->waktu_pelayanan ?? ''; ?>

                </div>
                <div class="col-md-6">
                    <iframe
                        src=<?php echo e('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.619850991507!2d' . ($kontak->longitude ?? '') . '!3d' . ($kontak->latitude ?? '') . '!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42e9e42817d%3A0xeec68bcf239dda0!2sJl.%20Medan%20Merdeka%20Sel.%20No.13%2C%20RT.11%2FRW.2%2C%20Gambir%2C%20Kecamatan%20Gambir%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010110!5e0!3m2!1sid!2sid!4v1662772084242!5m2!1sid!2sid'); ?>

                        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Map -->

    <!-- Ruang Pelayanan -->
    <section class="ruang_pelayanan text-center">
        <div class="container">
            <label class="mb-4" for="">Ruang Pelayanan Informasi</label>
            <div class="row">
                <div class="owl-carousel header-carousel position-relative">

                    <?php if($dokumentasi): ?>
                        <?php $__currentLoopData = $dokumentasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dokumentasi_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="owl-carousel-item position-relative"
                                style="background-image: url(<?php echo e(asset('storage/' . $dokumentasi_row->image_path ?? '')); ?>">


                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                

                
            </div>
        </div>

    </section>
    <!-- Ruang Pelayanan -->
     <?php $__env->slot('bannerText1', null, []); ?> 
        Profil / Kontak
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('bannerText2', null, []); ?> 
            Kontak
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('isActiveProfil', null, []); ?> 
                active
                 <?php $__env->endSlot(); ?>
                <?php $__env->startPush('child-scripts'); ?>
                    <script>
                        $(".header-carousel").owlCarousel({
                            loop: true,
                            autoplay: true,
                            responsive: {
                                0: {
                                    items: 1,
                                },
                                600: {
                                    items: 2,
                                },
                                1000: {
                                    items: 1,
                                },
                            },
                            nav: true,

                            navText: [
                                "<div class='nav-button owl-prev-custom'><img src='<?php echo e(asset('ppid_fe/assets/images/content/content-image/down-arrow.png')); ?>'></div>",
                                "<div class='nav-button owl-next-custom'><img src='<?php echo e(asset('ppid_fe/assets/images/content/content-image/up-arrow.png')); ?>'></div>",
                            ],
                            autoplayTimeout: 5000, //2000ms = 2s;
                            autoplayHoverPause: true,
                            // <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        });
                    </script>

                    <style>
                        .banner .data_banner {
                            padding-bottom: 80px;
                            margin-top: 80px;
                            background-image: url(<?php echo e(asset('storage/' . $kontak->banner_path ?? '')); ?>);
                            background-repeat: no-repeat;
                            /*Prevent showing multiple background images*/
                            background-size: 100% 300px;
                            height: 300px;
                            padding: 100px 100px 100px 100px;
                        }
                    </style>
                <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50)): ?>
<?php $component = $__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50; ?>
<?php unset($__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50); ?>
<?php endif; ?>
<?php /**PATH /var/www/ppid_cms/resources/views/frontend/profil/profile-kontak.blade.php ENDPATH**/ ?>