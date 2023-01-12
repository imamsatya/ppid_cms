<?php if (isset($component)) { $__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0 = $component; } ?>
<?php $component = App\View\Components\Admin\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('subMenuTitle', null, []); ?> 
        Prosedur Layanan
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('mainMenuTitle', null, []); ?> 
            Standar Layanan
             <?php $__env->endSlot(); ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10">
                    
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                fill="currentColor" />
                            <rect x="9" y="13.0283" width="7.3536" height="1.2256" rx="0.6128"
                                transform="rotate(-45 9 13.0283)" fill="currentColor" />
                            <rect x="9.86664" y="7.93359" width="7.3536" height="1.2256" rx="0.6128"
                                transform="rotate(45 9.86664 7.93359)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column text-white pe-0 pe-sm-10">
                        <!--begin::Title-->
                        <h4 class="mb-2 text-white">Error !</h4>
                        <!--end::Title-->

                        <!--begin::Content-->
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Close-->
                    <button type="button"
                        class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                        data-bs-dismiss="alert">
                        <span class="svg-icon svg-icon-2x svg-icon-light"><svg width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M6 19.7C5.7 19.7 5.5 19.6 5.3 19.4C4.9 19 4.9 18.4 5.3 18L18 5.3C18.4 4.9 19 4.9 19.4 5.3C19.8 5.7 19.8 6.29999 19.4 6.69999L6.7 19.4C6.5 19.6 6.3 19.7 6 19.7Z"
                                    fill="currentColor" />
                                <path
                                    d="M18.8 19.7C18.5 19.7 18.3 19.6 18.1 19.4L5.40001 6.69999C5.00001 6.29999 5.00001 5.7 5.40001 5.3C5.80001 4.9 6.40001 4.9 6.80001 5.3L19.5 18C19.9 18.4 19.9 19 19.5 19.4C19.3 19.6 19 19.7 18.8 19.7Z"
                                    fill="currentColor" />
                            </svg></span>
                    </button>
                    <!--end::Close-->
                </div>

            <?php endif; ?>
            <?php if(\Session::has('success')): ?>
                <!--begin::Alert-->
                <div class="alert alert-dismissible bg-success d-flex flex-column flex-sm-row p-5 mb-10">
                    
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                fill="currentColor" />
                            <path
                                d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column text-white pe-0 pe-sm-10">
                        <!--begin::Title-->
                        <h4 class="mb-2 text-white">Sukses !</h4>
                        <!--end::Title-->

                        <!--begin::Content-->
                        <span><?php echo e(Session::get('success')); ?></span>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Close-->
                    <button type="button"
                        class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                        data-bs-dismiss="alert">
                        <span class="svg-icon svg-icon-2x svg-icon-light"><svg width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M6 19.7C5.7 19.7 5.5 19.6 5.3 19.4C4.9 19 4.9 18.4 5.3 18L18 5.3C18.4 4.9 19 4.9 19.4 5.3C19.8 5.7 19.8 6.29999 19.4 6.69999L6.7 19.4C6.5 19.6 6.3 19.7 6 19.7Z"
                                    fill="currentColor" />
                                <path
                                    d="M18.8 19.7C18.5 19.7 18.3 19.6 18.1 19.4L5.40001 6.69999C5.00001 6.29999 5.00001 5.7 5.40001 5.3C5.80001 4.9 6.40001 4.9 6.80001 5.3L19.5 18C19.9 18.4 19.9 19 19.5 19.4C19.3 19.6 19 19.7 18.8 19.7Z"
                                    fill="currentColor" />
                            </svg></span>
                    </button>
                    <!--end::Close-->
                </div>
                <!--end::Alert-->
            <?php endif; ?>



            <br>
            <h1>Pengelolaan Prosedur Layanan</h1>
            <br>


            <form action="<?php echo e(route('admin.prosedurlayanan.banner.store')); ?>" method="POST"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card card-flush shadow-sm">

                    <div class="card-body py-5">


                        <label for="" class=" form-label">Ubah Banner</label>
                        <br>
                        <div class="image-input image-input-outline" data-kt-image-input="true"
                            style="background-image: url(<?php echo e(asset('template/dist/assets/media/svg/avatars/blank.svg')); ?>)">
                            <!--begin::Image preview wrapper-->
                            <?php if($prosedurLayanan): ?>
                                <?php if($prosedurLayanan->banner_path): ?>
                                    <div class="image-input-wrapper w-250px  h-125px"
                                        style="background-image: url(<?php echo e(asset('storage/' . $prosedurLayanan->banner_path)); ?>)">
                                    </div>
                                <?php else: ?>
                                    <div class="image-input-wrapper w-250px  h-125px"
                                        style="background-image: url(<?php echo e(asset('template/dist/assets/media/patterns/pattern-1.jpg')); ?>)">
                                    </div>
                                <?php endif; ?>
                            <?php else: ?>
                                <div class="image-input-wrapper w-250px  h-125px"
                                    style="background-image: url(<?php echo e(asset('template/dist/assets/media/patterns/pattern-1.jpg')); ?>)">
                                </div>

                            <?php endif; ?>
                            <!--end::Image preview wrapper-->

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profil singkat ppid.edit')): ?>
                                <!--begin::Edit button-->
                                <label
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                    title="Change Banner">
                                    <i class="bi bi-pencil-fill fs-7"></i>

                                    <!--begin::Inputs-->
                                    <input type="file" name="banner" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="banner_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit button-->

                                <!--begin::Cancel button-->
                                <span
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                    title="Cancel Banner">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel button-->

                                <!--begin::Remove button-->
                                <span
                                    class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                    title="Remove Banner">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove button-->
                            <?php endif; ?>

                        </div>
                        <p>minimal dimensi 369x454 pixel</p>
                        <br>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('peraturan kip.create')): ?>
                            <button type="submit" class="btn btn-primary" id="addBannerButton"
                                onclick="activateLoadingButton('#addBannerButton')"><span class="indicator-label">
                                    Simpan
                                </span>
                                <span class="indicator-progress">
                                    Mohon Menunggu... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        <?php endif; ?>
                    </div>

                </div>
            </form>


            <form action="<?php echo e(route('admin.prosedurlayanan.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <br>
                <div class="card card-flush shadow-sm">

                    <div class="card-body py-5">



                        <div class="mb-10">
                            <div>
                                <label for="" class="required form-label">Gambar Prosedur Permohonan</label>
                                <br>
                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                    style="background-image: url(<?php echo e(asset('template/dist/assets/media/svg/avatars/blank.svg')); ?>)">
                                    <!--begin::Image preview wrapper-->
                                    <?php if($prosedurLayanan): ?>
                                        <?php if($prosedurLayanan->permohonan_direktori_image): ?>
                                            <div class="image-input-wrapper w-500px  h-350px"
                                                style="background-image: url(<?php echo e(asset('storage/' . $prosedurLayanan->permohonan_direktori_image)); ?>)">
                                            </div>
                                        <?php else: ?>
                                            <div class="image-input-wrapper w-500px  h-350px"
                                                style="background-image: url(<?php echo e(asset('template/dist/assets/media/patterns/pattern-1.jpg')); ?>)">
                                            </div>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <div class="image-input-wrapper w-500px  h-350px"
                                            style="background-image: url(<?php echo e(asset('template/dist/assets/media/patterns/pattern-1.jpg')); ?>)">
                                        </div>

                                    <?php endif; ?>
                                    <!--end::Image preview wrapper-->
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('prosedur pelayanan.edit')): ?>
                                        <!--begin::Edit button-->
                                        <label
                                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            data-bs-dismiss="click" title="Change Prosedur Permohonan">
                                            <i class="bi bi-pencil-fill fs-7"></i>

                                            <!--begin::Inputs-->
                                            <input type="file" name="permohonan" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="permohonan_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Edit button-->

                                        <!--begin::Cancel button-->
                                        <span
                                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            data-bs-dismiss="click" title="Cancel Permohoanan Image">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel button-->

                                        <!--begin::Remove button-->
                                        <span
                                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                            data-bs-dismiss="click" title="Remove Permohoanan Image">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove button-->
                                    <?php endif; ?>
                                </div>
                            </div>
                            <br><br>
                            <div>
                                <label for="" class="required form-label">Gambar Prosedur Keberatan</label>
                                <br>
                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                    style="background-image: url(<?php echo e(asset('template/dist/assets/media/svg/avatars/blank.svg')); ?>)">
                                    <!--begin::Image preview wrapper-->
                                    <?php if($prosedurLayanan): ?>
                                        <?php if($prosedurLayanan->keberatan_direktori_image): ?>
                                            <div class="image-input-wrapper w-500px  h-350px"
                                                style="background-image: url(<?php echo e(asset('storage/' . $prosedurLayanan->keberatan_direktori_image)); ?>)">
                                            </div>
                                        <?php else: ?>
                                            <div class="image-input-wrapper w-500px  h-350px"
                                                style="background-image: url(<?php echo e(asset('template/dist/assets/media/patterns/pattern-1.jpg')); ?>)">
                                            </div>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <div class="image-input-wrapper w-500px  h-350px"
                                            style="background-image: url(<?php echo e(asset('template/dist/assets/media/patterns/pattern-1.jpg')); ?>)">
                                        </div>

                                    <?php endif; ?>
                                    <!--end::Image preview wrapper-->
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('prosedur pelayanan.edit')): ?>
                                        <!--begin::Edit button-->
                                        <label
                                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            data-bs-dismiss="click" title="Change Prosedur Permohonan">
                                            <i class="bi bi-pencil-fill fs-7"></i>

                                            <!--begin::Inputs-->
                                            <input type="file" name="keberatan" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="keberatan_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Edit button-->

                                        <!--begin::Cancel button-->
                                        <span
                                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            data-bs-dismiss="click" title="Cancel Keberatan Image">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel button-->

                                        <!--begin::Remove button-->
                                        <span
                                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                            data-bs-dismiss="click" title="Remove Keberatan Image">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove button-->
                                    <?php endif; ?>
                                </div>
                            </div>
                            <br><br>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('prosedur pelayanan.create')): ?>
                                <button type="submit" class="btn btn-primary" id="addButton"
                                    onclick="activateLoadingButton('#addButton')"><span class="indicator-label">
                                        Simpan
                                    </span>
                                    <span class="indicator-progress">
                                        Mohon Menunggu... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
                <br>

            </form>
            <?php $__env->startPush('child-scripts'); ?>
                <script>
                    function activateLoadingButton(idButton) {
                        console.log('active')
                        let button = document.querySelector(`${idButton}`);
                        button.setAttribute("data-kt-indicator", "on");
                        // Handle button click event

                        // // Disable indicator after 3 seconds
                        // setTimeout(function() {
                        //     button.removeAttribute("data-kt-indicator");
                        // }, 3000);
                    }
                </script>
            <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0)): ?>
<?php $component = $__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0; ?>
<?php unset($__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0); ?>
<?php endif; ?>
<?php /**PATH /Users/anggadwiarifandi/Documents/projects.nosync/ppid_cms/resources/views/admin/standar_layanan/prosedur_layanan.blade.php ENDPATH**/ ?>