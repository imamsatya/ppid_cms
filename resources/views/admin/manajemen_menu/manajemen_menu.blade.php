<x-admin.layout>
    <x-slot:subMenuTitle>
        Manajemen Menu
        </x-slot>

        <x-slot:mainMenuTitle>
            Manajemen Menu
            </x-slot>

            <x-slot:isActiveLink_manajemenMenu>
                active
                </x-slot>



                @if ($errors->any())
                    <div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10">
                        {{-- <span class="svg-icon svg-icon-muted svg-icon-2hx">
                </span> --}}
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
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
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

                @endif
                @if (\Session::has('success'))
                    <!--begin::Alert-->
                    <div class="alert alert-dismissible bg-success d-flex flex-column flex-sm-row p-5 mb-10">
                        {{-- <span class="svg-icon svg-icon-muted svg-icon-2hx">
                </span> --}}
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
                            <span>{{ Session::get('success') }}</span>
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
                @endif
                <div id="tes1">
                    <h1>Pengelolaan Menu</h1>

                    <span class="badge badge-primary">Routing</span>
                    {{-- <span class="badge badge-info">Permission</span> --}}
                    <br><br>
                    <div class="text-end mb-4">

                        <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit"
                            onclick="saveMenu()">
                            <span class="indicator-label">Simpan</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>

                    </div>

                    <div class="row row-cols-lg-1 g-10 min-h-200px draggable-zone">

                        @if ($menus)
                            @foreach ($menus as $menu)
                                <div class="col draggable" namamenu="{{ $menu->nama_menu }}"
                                    idmenu="{{ $menu->id }}" routing="{{ $menu->routing ?? '-' }}">
                                    <!--begin::Card-->
                                    <div class="card ">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h4 class="card-label">{{ $menu->nama_menu }}</h4>

                                                <span
                                                    class="badge badge-primary me-2">{{ $menu->routing ?? '-' }}</span>

                                                <br>


                                            </div>
                                            <div class="card-toolbar">
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
                                            </div>
                                        </div>
                                        <div class="card-body">


                                            <div class="row row-cols-lg-1 g-10 min-h-20px mt-1 draggable2-zone">

                                                @if ($menu->submenus)
                                                    @foreach ($menu->submenus as $submenu)
                                                        <div class="row mx-auto text-middle draggable2  "
                                                            idmainmenu="{{ $menu->id }}"
                                                            namaSubmenu="{{ $submenu->nama_menu }}"
                                                            idsubmenu="{{ $submenu->id }}"
                                                            routing="{{ $submenu->routing ?? '-' }}">
                                                            <div class="col-1   ">
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
                                                            </div>
                                                            <div class="col-3  ">
                                                                {{ $submenu->nama_menu ?? '-' }}
                                                            </div>
                                                            <div class="col-3  ">
                                                                {{ $submenu->routing ?? '-' }}
                                                            </div>

                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                            @endforeach
                        @endif
                    </div>


                </div>
                <!--end::Row-->
                @push('child-scripts')
                    <script src="{{ asset('template/dist/assets/plugins/custom/draggable/draggable.bundle.js') }}"></script>


                    <script>
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
                            let mainMenu = swappable.containers[0].children
                            console.log('mainMenu', mainMenu[0].attributes.namamenu.value)
                            for (let index = 0; index < mainMenu.length; index++) {
                                let currentMenu = {
                                    id_menu: mainMenu[index].attributes.idmenu.value,
                                    nama_menu: mainMenu[index].attributes.namamenu.value,
                                    routing: mainMenu[index].attributes.routing.value,

                                    urutan: index + 1
                                }
                                newMainMenu.push(currentMenu)

                            }
                            console.log('newMainMenu', newMainMenu[0], 'type', typeof(newMainMenu))


                            console.log('s2', swappable2)
                            let newSubMenu = []
                            let subMenus = swappable2.containers
                            subMenus.forEach(subMenu => {
                                let subMenuChildren = subMenu.children
                                if (subMenuChildren.length > 0) {
                                    for (let index = 0; index < subMenuChildren.length; index++) {
                                        console.log('smci', subMenuChildren[index].attributes)
                                        let currentSubMenu = {
                                            idmainmenu: subMenuChildren[index].attributes.idmainmenu.value,
                                            namasubmenu: subMenuChildren[index].attributes.namasubmenu.value,
                                            routing: subMenuChildren[index].attributes.routing.value,
                                            idsubmenu: subMenuChildren[index].attributes.idsubmenu.value,
                                            urutan: index + 1
                                        }
                                        newSubMenu.push(currentSubMenu)

                                    }
                                }

                            });
                            Swal.fire({
                                html: `Apakah yakin akan <strong>menyimpan</strong> menu  ?`,
                                icon: "error",
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
                    </script>
                @endpush

</x-admin.layout>
