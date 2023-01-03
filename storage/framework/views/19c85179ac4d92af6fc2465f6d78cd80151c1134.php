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
        Peraturan KIP
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('mainMenuTitle', null, []); ?> 
            Regulasi
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


            <form action="<?php echo e(route('admin.peraturan_kip.banner.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="card card-flush shadow-sm">

                    <div class="card-body py-5">

                        <div>
                            <label for="" class="required form-label">Banner Image</label>
                            <br>
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url(<?php echo e(asset('template/dist/assets/media/svg/avatars/blank.svg')); ?>)">
                                <!--begin::Image preview wrapper-->
                                <?php if($regulasiBanner): ?>
                                    <?php if($regulasiBanner->banner_path): ?>
                                        <div class="image-input-wrapper w-250px  h-125px"
                                            style="background-image: url(<?php echo e(asset('storage/' . $regulasiBanner->banner_path)); ?>)">
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

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('peraturan kip.edit')): ?>
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
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Remove Banner">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove button-->
                                <?php endif; ?>
                            </div>
                            <p>minimal dimensi 369x454 pixel</p>
                        </div>

                        <br>
                        <div>
                            <label for="" class="required form-label">Card Background Image</label>
                            <br>
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url(<?php echo e(asset('template/dist/assets/media/svg/avatars/blank.svg')); ?>)">
                                <!--begin::Image preview wrapper-->
                                <?php if($regulasiBanner): ?>
                                    <?php if($regulasiBanner->thumbnail_path): ?>
                                        <div class="image-input-wrapper w-250px  h-125px"
                                            style="background-image: url(<?php echo e(asset('storage/' . $regulasiBanner->thumbnail_path)); ?>)">
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

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('peraturan kip.edit')): ?>
                                    <!--begin::Edit button-->
                                    <label
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Change Banner">
                                        <i class="bi bi-pencil-fill fs-7"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="thumbnail" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="thumbnail_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Cancel Banner">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Remove Banner">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove button-->
                                <?php endif; ?>
                            </div>
                            <p>minimal dimensi 369x454 pixel</p>
                        </div>

                        <br> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('peraturan kip.create')): ?>
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
            <br>
            <h1>Pengelolaan Regulasi</h1>
            <br>
            <div class="card card-flush shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Peraturan KIP</h3>
                    <div class="card-toolbar">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('peraturan kip.create')): ?>
                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_tambahPeraturanKIP">Tambah</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-body py-5">


                    <table id="kt_datatable_dom_positioning_peraturanKIP"
                        class="table table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800">
                                <th>No</th>
                                <th>Judul Peraturan</th>
                                <th>File PDF</th>
                                <th>Urutan</th>
                                <th style="min-width: 15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($peraturanKIP): ?>
                                <?php $__currentLoopData = $peraturanKIP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peraturanKIP_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1); ?></td>
                                        <td><?php echo e($peraturanKIP_row->judul_peraturan); ?></td>
                                        <td><a
                                                href="<?php echo e(asset('storage/' . $peraturanKIP_row->file_path)); ?>"><?php echo e($peraturanKIP_row->judul_peraturan . '.pdf'); ?></a>
                                        </td>
                                        <td><?php echo e($peraturanKIP_row->urutan); ?></td>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['peraturan kip.edit', 'peraturan kip.delete'])): ?>
                                            <td>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('peraturan kip.edit')): ?>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_editPeraturanKIP"
                                                        onclick="editDialog(<?php echo e($loop->index); ?>)"
                                                        class="btn btn-icon btn-primary me-2"><i
                                                            class="bi bi-pencil fs-4 "></i></a>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('peraturan kip.delete')): ?>
                                                    <a href="javascript:void(0)" onclick="deleteDialog(<?php echo e($loop->index); ?>)"
                                                        class="btn btn-icon btn-danger"><i class="bi bi-x-lg fs-4 "></i></a>
                                                <?php endif; ?>

                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>

            </div>
            <br>
            
            

            <!--begin::Modal - Tambah Bagan Kanan-->
            <div class="modal fade" id="kt_modal_tambahPeraturanKIP" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-900px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Tambah Peraturan KIP</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-lg-10 px-lg-10">
                            
                            <form id="kt_account_profile_details_form" action="" enctype="multipart/form-data"
                                method="POST" class="form">
                                <?php echo csrf_field(); ?>
                                <!--begin::Card body-->
                                <div class="card-body  p-9">


                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Judul
                                            Peraturan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="judulPeraturan"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Judul Peraturan" value="" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">File</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="file" name="file"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="File PDF" value="" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Urutan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="number" min=1 name="urutan"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Urutan" value="" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->


                                    <!--end::Input group-->

                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('peraturan kip.create')): ?>
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
                                <!--end::Actions-->
                            </form>
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Tambah Bagan Kanan-->

            <!--begin::Modal - Edit Bagan Kanan-->
            <div class="modal fade" id="kt_modal_editPeraturanKIP" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-900px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Edit Peraturan KIP</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-lg-10 px-lg-10">
                            
                            <form id="editForm" method="POST" enctype="multipart/form-data" class="form">
                                <?php echo method_field('PATCH'); ?>
                                <?php echo csrf_field(); ?>

                                <!--begin::Card body-->
                                <div class="card-body  p-9">


                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Judul
                                            Peraturan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" id="editJudulPeraturan" name="judulPeraturan"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Judul Peraturan" value="" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">File
                                            PDF</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="file" name="file" id="editFile"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="File PDF" value="" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Urutan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="number" id="editUrutan" min=1 name="urutan"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Urutan" value="" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->


                                    <!--end::Input group-->

                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('peraturan kip.create')): ?>
                                        <button type="submit" class="btn btn-primary" id="updateButton"
                                            onclick="activateLoadingButton('#updateButton')"><span
                                                class="indicator-label">
                                                Update
                                            </span>
                                            <span class="indicator-progress">
                                                Mohon Menunggu... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    <?php endif; ?>
                                </div>
                                <!--end::Actions-->
                            </form>
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Edit Bagan Kanan-->
            <?php $__env->startPush('child-scripts'); ?>
                <script>
                    $("#kt_datatable_dom_positioning_peraturanKIP").DataTable({
                        "language": {
                            "lengthMenu": "Show _MENU_",
                        },
                        "dom": "<'row'" + "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" + ">" + "<'table-responsive'tr>" +
                            "<'row'" +
                            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                            ">"
                    });


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

                    function deleteDialog(index) {

                        let peraturanKIP = <?php echo e(Js::from($peraturanKIP)); ?>


                        peraturanKIP = peraturanKIP[index]

                        Swal.fire({
                            html: `Apakah yakin akan <strong>menghapus</strong> peraturan KIP <span class="badge badge-primary"> ${peraturanKIP.judul_peraturan}</span> ?`,
                            icon: "error",
                            buttonsStyling: false,
                            showCancelButton: true,
                            reverseButtons: true,
                            cancelButtonText: 'Batal',
                            confirmButtonText: "Iya",
                            customClass: {
                                cancelButton: 'btn btn-danger',
                                confirmButton: "btn btn-primary",
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {

                                console.log('delete confirmed')
                                $.ajax({
                                    type: "DELETE",
                                    url: "/admin/peraturan_kip/" + peraturanKIP.id,
                                    cache: false,
                                    success: function(html) {
                                        Swal.fire({

                                            icon: 'success',
                                            title: 'Berhasil menghapus Peraturan KIP',
                                            showConfirmButton: false,
                                            timer: 500
                                        }).then(() => {
                                            window.location.reload();
                                        })


                                    }
                                });

                                // window.location = '/visimisi'
                            } else {
                                console.log('delete canceled')
                            }
                        });

                        // Swal.fire({
                        //     template: '#my-template'
                        // })
                    };

                    function editDialog(index) {

                        let peraturanKIP = <?php echo e(Js::from($peraturanKIP)); ?>

                        peraturanKIP = peraturanKIP[index]
                        document.getElementById('editJudulPeraturan').value = peraturanKIP.judul_peraturan
                        // document.getElementById('editFile').value = peraturanKIP.file_path
                        console.log(document.getElementById('editFile'))
                        document.getElementById('editUrutan').value = peraturanKIP.urutan


                        document.getElementById('editForm').setAttribute('action', 'peraturan_kip/' +
                            peraturanKIP.id)
                    };
                </script>
            <?php $__env->stopPush(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0)): ?>
<?php $component = $__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0; ?>
<?php unset($__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0); ?>
<?php endif; ?>
<?php /**PATH /var/www/ppid_cms/resources/views/admin/regulasi/peraturan_kip.blade.php ENDPATH**/ ?>