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
        Manajemen Menu
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('mainMenuTitle', null, []); ?> 
            Manajemen Menu
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('isActiveLink_manajemenMenu', null, []); ?> 
                active
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
                        <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                            <!--begin::Title-->
                            <h4 class="mb-2 light">Error !</h4>
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
                <div id="tes1">
                    <h1>Pengelolaan Menu</h1>

                    <span class="badge badge-primary">Routing</span>
                    <span class="badge badge-success">status</span>
                    <br><br>

                    <div class="text-end mb-4">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manajemen menu.create')): ?>
                            <button type="submit" class="btn btn-primary me-2" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_tambahMainMenu">
                                <span class="indicator-label">Tambah Main Menu</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit"
                                onclick="saveMenu()">
                                <span class="indicator-label">Simpan</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        <?php endif; ?>

                    </div>

                    <div class="row row-cols-lg-1 g-10 min-h-200px draggable-zone">

                        <?php if($menus): ?>
                            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col draggable" namamenu="<?php echo e($menu->nama_menu); ?>"
                                    idmenu="<?php echo e($menu->id); ?>" routing="<?php echo e($menu->routing ?? '-'); ?>">
                                    <!--begin::Card-->
                                    <div class="card ">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h4 class="card-label"><?php echo e($menu->nama_menu); ?></h4>

                                                <span
                                                    class="badge badge-primary me-2"><?php echo e($menu->routing ?? '-'); ?></span>

                                                <?php if($menu->is_active): ?>
                                                    <span class="badge badge-success me-2">active</span>
                                                <?php else: ?>
                                                    <span class="badge badge-danger me-2">inactive</span>
                                                <?php endif; ?>






                                            </div>
                                            <div class="card-toolbar">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manajemen menu.edit')): ?>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_editMainMenu"
                                                        onclick="editMenuDialog(<?php echo e($menu->id); ?>)"
                                                        class="btn btn-icon btn-primary btn-sm me-2"><i
                                                            class="fas fa-pen fs-3"></i></a>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manajemen menu.delete')): ?>
                                                    <a href="javascript:void(0)"
                                                        onclick="deleteMenuDialog(<?php echo e($menu->id); ?>)"
                                                        class="btn btn-icon btn-danger btn-sm"><i
                                                            class="bi bi-x-lg fs-4 "></i></a>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manajemen menu.edit')): ?>
                                                    <a href="#"
                                                        class="btn btn-icon btn-sm btn-hover-light-primary draggable-handle">
                                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                                        <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                                    fill="currentColor"></path>
                                                                <path opacity="0.3"
                                                                    d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="card-body">


                                            <div class="row row-cols-lg-1 g-10 min-h-20px mt-1 draggable2-zone">

                                                <?php if($menu->submenus): ?>
                                                    <?php $__currentLoopData = $menu->submenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="row mx-auto mb-2 text-middle  draggable2  "
                                                            idmainmenu="<?php echo e($menu->id); ?>"
                                                            namaSubmenu="<?php echo e($submenu->nama_menu); ?>"
                                                            idsubmenu="<?php echo e($submenu->id); ?>"
                                                            routing="<?php echo e($submenu->routing ?? '-'); ?>">
                                                            <div class="col-1   ">
                                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manajemen menu.edit')): ?>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-sm btn-hover-light-primary draggable2-handle">
                                                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                                                        <span class="svg-icon svg-icon-2x svg-icon-info">
                                                                            <svg width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                                                    fill="currentColor"></path>
                                                                                <path opacity="0.3"
                                                                                    d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="col-2 m-grid-col-middle ">
                                                                <?php echo e($submenu->nama_menu ?? '-'); ?>

                                                            </div>
                                                            <div class="col-2 m-grid-col-middle ">
                                                                <?php echo e($submenu->routing ?? '-'); ?>

                                                            </div>

                                                            <div class="col-2 m-grid-col-middle ">
                                                                <?php if($submenu->is_active): ?>
                                                                    <span
                                                                        class="badge badge-success me-2">active</span>
                                                                <?php else: ?>
                                                                    <span
                                                                        class="badge badge-danger me-2">inactive</span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="col-2">
                                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manajemen menu.edit')): ?>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#kt_modal_editSubMenu"
                                                                        onclick="editSubMenuDialog(<?php echo e($menu->id); ?>, <?php echo e($submenu->id); ?>)"
                                                                        class="btn btn-icon btn-primary btn-sm me-2"><i
                                                                            class="fas fa-pen fs-3"></i></a>
                                                                <?php endif; ?>
                                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manajemen menu.delete')): ?>
                                                                    <a href="javascript:void(0)"
                                                                        onclick="deleteSubMenuDialog(<?php echo e($menu->id); ?>, <?php echo e($submenu->id); ?>)"
                                                                        class="btn btn-icon btn-danger btn-sm"><i
                                                                            class="bi bi-x-lg fs-4 "></i></a>
                                                                <?php endif; ?>
                                                            </div>
                                                            <hr class="mt-2">
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manajemen menu.create')): ?>
                                            <div class="card-footer">

                                                <a href="javascript:void(0)" onclick="addMainMenuId(<?php echo e($menu->id); ?>)"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_tambahSubMenu"
                                                    class="btn  btn-primary btn-sm me-2"><i
                                                        class="fas fa-plus fs-3"></i>Tambah Sub Menu</a>

                                                <a href="javascript:void(0)" onclick="saveMenu()"
                                                    class="btn  btn-primary btn-sm me-2">Simpan
                                                </a>

                                                
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <!--end::Card-->
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>


                </div>
                <!--begin::Modal - Tambah MainMenu-->
                <div class="modal fade" id="kt_modal_tambahMainMenu" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-900px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2>Tambah Main Menu</h2>
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
                                                rx="1" transform="rotate(45 7.41422 6)"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-lg-10 px-lg-10">
                                
                                <form id="kt_account_profile_details_form"
                                    action="<?php echo e(route('admin.manajemen_menu.addMainMenu')); ?>"
                                    enctype="multipart/form-data" method="POST" class="form">
                                    <?php echo csrf_field(); ?>
                                    <!--begin::Card body-->
                                    <div class="card-body  p-9">


                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label
                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Menu</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="namaMenu"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Menu" value="" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label
                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Route</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="routing"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Route" value="" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label
                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Status</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input class="form-check-input" name="statusMenu" type="radio"
                                                    value="true" id="activeStatus" />
                                                <label class="form-check-label me-4" for="activeStatus">
                                                    Active
                                                </label>

                                                <input class="form-check-input" name="statusMenu" type="radio"
                                                    value="false" id="inActiveStatus" />
                                                <label class="form-check-label" for="inActiveStatus">
                                                    Inactive
                                                </label>
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
                                                onclick="activateLoadingButton('#addButton')"><span
                                                    class="indicator-label">
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
                <!--end::Modal - Tambah MainMenu-->

                <!--begin::Modal - Edit MainMenu-->
                <div class="modal fade" id="kt_modal_editMainMenu" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-900px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2>Edit Main Menu</h2>
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
                                                rx="1" transform="rotate(45 7.41422 6)"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-lg-10 px-lg-10">
                                
                                <form id="editMainMenuForm" enctype="multipart/form-data" method="POST"
                                    class="form">
                                    <?php echo method_field('PATCH'); ?>
                                    <?php echo csrf_field(); ?>
                                    <!--begin::Card body-->
                                    <div class="card-body  p-9">


                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label
                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Menu</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="namaMenu" id="editNamaMenu"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Menu" value="" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label
                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Route</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="routing" id="editRouting"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Route" value="" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label
                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Status</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input class="form-check-input" name="statusMenu" type="radio"
                                                    value="true" id="editActiveStatus" />
                                                <label class="form-check-label me-4" for="activeStatus">
                                                    Active
                                                </label>

                                                <input class="form-check-input" name="statusMenu" type="radio"
                                                    value="false" id="editInActiveStatus" />
                                                <label class="form-check-label" for="inActiveStatus">
                                                    Inactive
                                                </label>
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
                                            <button type="submit" class="btn btn-primary" id="updateMenuButton"
                                                onclick="activateLoadingButton('#updateMenuButton')"><span
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
                <!--end::Modal - Edit MainMenu-->

                <!--begin::Modal - Tambah SubMenu-->
                <div class="modal fade" id="kt_modal_tambahSubMenu" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-900px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2>Tambah Sub Menu</h2>
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
                                                rx="1" transform="rotate(45 7.41422 6)"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-lg-10 px-lg-10">
                                
                                <form id="addSubMenuForm" enctype="multipart/form-data" method="POST"
                                    class="form">
                                    <?php echo csrf_field(); ?>
                                    <!--begin::Card body-->
                                    <div class="card-body  p-9">


                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Sub
                                                Menu</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="namaSubMenu"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Sub Menu" value="" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label
                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Route</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="routing"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Route" value="" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label
                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Status</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input class="form-check-input" name="statusMenu" type="radio"
                                                    value="true" id="activeStatus" />
                                                <label class="form-check-label me-4" for="activeStatus">
                                                    Active
                                                </label>

                                                <input class="form-check-input" name="statusMenu" type="radio"
                                                    value="false" id="inActiveStatus" />
                                                <label class="form-check-label" for="inActiveStatus">
                                                    Inactive
                                                </label>
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
                                            <button type="submit" class="btn btn-primary" id="addSubMenuButton"
                                                onclick="activateLoadingButton('#addSubMenuButton')"><span
                                                    class="indicator-label">
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
                <!--end::Modal - Tambah SubMenu-->

                <!--begin::Modal - Edit SubMenu-->
                <div class="modal fade" id="kt_modal_editSubMenu" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-900px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2>Edit Sub Menu</h2>
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
                                                rx="1" transform="rotate(45 7.41422 6)"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-lg-10 px-lg-10">
                                
                                <form id="editSubMenuForm" enctype="multipart/form-data" method="POST"
                                    class="form">
                                    <?php echo method_field('PATCH'); ?>
                                    <?php echo csrf_field(); ?>
                                    <!--begin::Card body-->
                                    <div class="card-body  p-9">


                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label
                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Menu</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="namaMenu" id="editNamaMenu-sub"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Menu" value="" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label
                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Route</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="routing" id="editRouting-sub"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Route" value="" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label
                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Status</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input class="form-check-input" name="statusMenu" type="radio"
                                                    value="true" id="editActiveStatus-sub" />
                                                <label class="form-check-label me-4" for="activeStatus">
                                                    Active
                                                </label>

                                                <input class="form-check-input" name="statusMenu" type="radio"
                                                    value="false" id="editInActiveStatus-sub" />
                                                <label class="form-check-label" for="inActiveStatus">
                                                    Inactive
                                                </label>
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
                                            <button type="submit" class="btn btn-primary" id="updateSubMenuButton"
                                                onclick="activateLoadingButton('#updateSubMenuButton')"><span
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
                <!--end::Modal - Edit SubMenu-->
                <!--end::Row-->
                <?php $__env->startPush('child-scripts'); ?>
                    <script src="<?php echo e(asset('template/dist/assets/plugins/custom/draggable/draggable.bundle.js')); ?>"></script>


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
                        $.ajaxSetup({

                            headers: {

                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                            }

                        });
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        let containers = document.querySelectorAll(".draggable-zone")
                        let swappable = new Sortable.default(containers, {
                            draggable: ".draggable",
                            handle: ".draggable .draggable-handle",
                            mirror: {
                                //appendTo: selector,
                                appendTo: "body",
                                constrainDimensions: true
                            }
                        });

                        let containers2 = document.querySelectorAll(".draggable2-zone")
                        console.log('containers', containers)


                        let swappable2 = new Sortable.default(containers2, {
                            draggable: ".draggable2",
                            handle: ".draggable2 .draggable2-handle",
                            mirror: {
                                //appendTo: selector,
                                appendTo: "body",
                                constrainDimensions: true
                            }
                        });

                        console.log('s', swappable)
                        // swappable.containers[0].children[0].attributes.submenu.value 

                        async function saveMenu() {
                            console.log('s', swappable)
                            let newMainMenu = []
                            let newSubMenu = []
                            let mainMenu = swappable.containers[0].children

                            console.log('mM', mainMenu)
                            console.log('tesSubmM', mainMenu[0].children[0].children[1].children[0].children.length)
                            console.log('mainMenu', mainMenu[0].attributes.namamenu.value)
                            for (let index = 0; index < mainMenu.length; index++) {
                                //mainMenu
                                let currentMenu = {
                                    id_menu: mainMenu[index].attributes.idmenu.value,
                                    nama_menu: mainMenu[index].attributes.namamenu.value,
                                    routing: mainMenu[index].attributes.routing.value,
                                    urutan: index + 1
                                }
                                newMainMenu.push(currentMenu)
                                let indexMain = index
                                let submenu = mainMenu[indexMain].children[0].children[1].children[0].children
                                //subMenu
                                if (submenu.length > 0) {
                                    for (let index2 = 0; index2 < submenu.length; index2++) {
                                        let currentSubMenu = {
                                            idmainmenu: mainMenu[indexMain].attributes.idmenu.value,
                                            namasubmenu: submenu[index2].attributes.namasubmenu.value,
                                            routing: submenu[index2].attributes.routing.value,
                                            idsubmenu: submenu[index2].attributes.idsubmenu.value,
                                            urutan: index + 1
                                        }
                                        newSubMenu.push(currentSubMenu)
                                    }


                                }


                            }
                            console.log('newMainMenu', newMainMenu, 'type', typeof(newMainMenu))


                            console.log('s2', swappable2)
                            // let newSubMenu = []
                            // let subMenus = swappable2.containers
                            // subMenus.forEach(subMenu => {
                            //     let subMenuChildren = subMenu.children
                            //     if (subMenuChildren.length > 0) {
                            //         for (let index = 0; index < subMenuChildren.length; index++) {
                            //             console.log('smci', subMenuChildren[index].attributes)
                            //             let currentSubMenu = {
                            //                 idmainmenu: subMenuChildren[index].attributes.idmainmenu.value,
                            //                 namasubmenu: subMenuChildren[index].attributes.namasubmenu.value,
                            //                 routing: subMenuChildren[index].attributes.routing.value,
                            //                 idsubmenu: subMenuChildren[index].attributes.idsubmenu.value,
                            //                 urutan: index + 1
                            //             }
                            //             newSubMenu.push(currentSubMenu)

                            //         }
                            //     }

                            // });
                            Swal.fire({
                                html: `Apakah yakin akan <strong>menyimpan</strong> menu  ?`,
                                icon: "question",
                                buttonsStyling: false,
                                showCancelButton: true,
                                reverseButtons: true,
                                cancelButtonText: 'Batal',
                                confirmButtonText: "Iya",
                                customClass: {
                                    cancelButton: 'btn btn-danger',
                                    confirmButton: "btn btn-primary",
                                },

                            }).then((result) => {
                                if (result.isConfirmed) {

                                    console.log('simpan confirmed')


                                    Swal.showLoading()
                                    $.ajax({
                                        type: "POST",
                                        url: "/admin/manajemen_menu",
                                        data: {
                                            _token: CSRF_TOKEN,
                                            data: {
                                                'newMainMenu': newMainMenu,
                                                'newSubMenu': newSubMenu
                                            }
                                        },
                                        success: function(html) {
                                            Swal.fire({

                                                icon: 'success',
                                                title: 'Berhasil menyimpan Manajemen Menu',
                                                showConfirmButton: false,
                                                timer: 500
                                            }).then(() => {
                                                window.location.reload();
                                            })
                                        }
                                    })



                                    // window.location = '/visimisi'
                                } else {
                                    console.log('delete canceled')
                                }
                            });
                        }

                        function deleteMenuDialog(id) {
                            let menus = <?php echo e(Js::from($menus)); ?>

                            menu = menus.filter(menu => menu.id == id)
                            console.log('menus', menus)
                            console.log('selectedmenu', menu[0].id)

                            Swal.fire({
                                html: `Apakah yakin akan <strong>menghapus</strong> Main Menu <span class="badge badge-primary"> ${menu[0].nama_menu}</span> ?`,
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
                                        url: "/admin/manajemen_menu/delete-mainmenu/" + menu[0].id,
                                        cache: false,
                                        success: function(html) {
                                            Swal.fire({

                                                icon: 'success',
                                                title: 'Berhasil menghapus Main Menu',
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

                        function editMenuDialog(id) {
                            let menus = <?php echo e(Js::from($menus)); ?>

                            menu = menus.filter(menu => menu.id == id)
                            console.log(menu)
                            document.getElementById('editNamaMenu').value = menu[0].nama_menu
                            document.getElementById('editRouting').value = menu[0].routing
                            if (menu[0].is_active) {
                                document.getElementById('editActiveStatus').checked = true
                            } else {
                                document.getElementById('editInActiveStatus').checked = true
                            }
                            document.getElementById('editMainMenuForm').setAttribute('action', 'manajemen_menu/update-mainmenu/' +
                                menu[0].id)



                        }

                        function addMainMenuId(id) {
                            console.log(`id Main Menu ${id}`)
                            document.getElementById('addSubMenuForm').setAttribute('action', 'manajemen_menu/addsubmenu/' +
                                id)
                        }

                        function editSubMenuDialog(mainMenuId, subMenuId) {
                            let menus = <?php echo e(Js::from($menus)); ?>

                            menu = menus.filter(menu => menu.id == mainMenuId)
                            submenu = menu[0].submenus.filter(submenu => submenu.id == subMenuId)
                            console.log(menu)
                            document.getElementById('editNamaMenu-sub').value = submenu[0].nama_menu
                            document.getElementById('editRouting-sub').value = submenu[0].routing
                            if (submenu[0].is_active) {
                                document.getElementById('editActiveStatus-sub').checked = true
                            } else {
                                document.getElementById('editInActiveStatus-sub').checked = true
                            }
                            document.getElementById('editSubMenuForm').setAttribute('action', 'manajemen_menu/update-submenu/' +
                                subMenuId)



                        }

                        function deleteSubMenuDialog(mainMenuId, subMenuId) {
                            let menus = <?php echo e(Js::from($menus)); ?>

                            menu = menus.filter(menu => menu.id == mainMenuId)
                            console.log('menus', menus)
                            console.log('selectedmenu', menu)
                            submenu = menu[0].submenus.filter(submenu => submenu.id == subMenuId)
                            console.log('selectedSubMenu', submenu)

                            Swal.fire({
                                html: `Apakah yakin akan <strong>menghapus</strong> Sub Menu <span class="badge badge-primary"> ${submenu[0].nama_menu}</span> ?`,
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
                                        url: "/admin/manajemen_menu/delete-submenu/" + subMenuId,
                                        cache: false,
                                        success: function(html) {
                                            Swal.fire({

                                                icon: 'success',
                                                title: 'Berhasil menghapus Main Menu',
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
                    </script>
                <?php $__env->stopPush(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0)): ?>
<?php $component = $__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0; ?>
<?php unset($__componentOriginal1c021f9bb77bfcc579f4ef1f7437466a580c4bc0); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\project0\laravelBase\resources\views/admin/manajemen_menu/manajemen_menu.blade.php ENDPATH**/ ?>