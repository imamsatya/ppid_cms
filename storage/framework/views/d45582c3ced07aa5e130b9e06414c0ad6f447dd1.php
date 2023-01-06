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
        <link href="<?php echo e(asset('ppid_fe/assets/css/page/registrasi/index.css')); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo e(asset('ppid_fe/assets/float/float.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('ppid_fe/assets/float/fab.css')); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .bwstyle {
                -moz-filter: grayscale(100%);
                -webkit-filter: grayscale(100%);
                filter: gray;
                /* IE6-9 */
                filter: grayscale(100%);
            }

            .posfix {
                position: fixed;
            }
        </style>
        <title>Home</title>
        <?php echo htmlScriptTagJsApi(); ?>

    <?php $__env->stopPush(); ?>

    <!-- content -->
    <section class="content-login">
        <div class="bg-bumn"></div>

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="information">
                        <img src="<?php echo e(asset('ppid_fe/assets/images/content/content-image/content_register.png')); ?>"
                            alt="" class="img-fluid img-register" />

                        <div class="d-flex align-items-center mb-4">
                            <div class="circle-one"></div>
                            <div class="circle-two"></div>
                        </div>
                        <p class="detail">
                            Silahkan Lengkapi Formulir Pendaftaran untuk mengajukan
                            permohonan informasi, keberatan informasi, atau untuk mengetahui
                            status permohonan informasi dan keberatan informasi yang sudah
                            diajukan.
                            
                        </p>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="<?php echo e(route('index')); ?>">
                                    <button class="btn btn-back">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </button>
                                </a>
                                <label for="" class="btn-back-info">Kembali</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="<?php echo e(route('signup.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-login">
                            <div class="label-login d-flex align-items-center">
                                <img src="/assets/images/content/icon/ic_people.svg" alt="" />
                                <span class="ml-2">Registrasi Pemohon Informasi</span>
                            </div>
                            <div class="form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                        aria-describedby="name" placeholder="Name" />
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color: red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select" placeholder="Jenis Pemohon" id="jenispemohon"
                                        name="jenispemohon" onchange="selectJenisPemohon()">
                                        <option selected value="">Jenis Pemohon</option>
                                        <option value="1">Perorangan</option>
                                        <option value="2">Kelompok</option>
                                        <option value="3">Badan Hukum</option>
                                    </select>
                                    <?php $__errorArgs = ['jenispemohon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color: red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    
                                </div>
                                <div class="form-group">
                                    <select class="custom-select" disabled placeholder="Jenis Identitas"
                                        id="jenisidentitas" name="jenisidentitas">
                                        <option selected>Jenis Identitas</option>
                                        <option value="1">KTP/NPWP</option>
                                        <option value="2">Surat Kuasa</option>
                                        <option value="3">Anggaran Dasar</option>
                                    </select>
                                    <input type="text" hidden name="jenisidentitas" id="inputJenisIdentitas"
                                        value="" />
                                    <?php $__errorArgs = ['jenisidentitas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color: red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="noidentitas" name="noidentitas"
                                        aria-describedby="noidentitas" placeholder="No Identitas (KTP/NPWP)" />
                                    <?php $__errorArgs = ['noidentitas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color: red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        aria-describedby="alamat" placeholder="Alamat" />
                                    <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color: red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nohp" 
                                        name="nohp" aria-describedby="nohp" placeholder="No Handphone" />
                                    <?php $__errorArgs = ['nohp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color: red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group" hidden>
                                    <input type="text" hidden class="form-control" id="npwp" id="npwp"
                                        name="npwp" aria-describedby="npwp" placeholder="NPWP" />
                                    <?php $__errorArgs = ['npwp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" hidden style="color: red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                        aria-describedby="pekerjaan" placeholder="Pekerjaan" />
                                    <?php $__errorArgs = ['pekerjaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color: red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group d-flex align-items-start">
                                    <div class="upload-btn-wrapper">
                                        <button class="btn">
                                            <img src="<?php echo e(asset('ppid_fe/assets/images/content/icon/ic_file.svg')); ?>"
                                                alt="" />
                                            <span id="dokumenText"> Upload KTP </span>
                                        </button>
                                        <input type="file" name="identitasfile" onchange="PreviewImage();"
                                            id="uploadImage" />
                                        <?php $__errorArgs = ['identitasfile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="" style="color: red">
                                                <?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <span class="ml-3 mr-3 file-format">Format JPG/PDF maksimal 500KB</span>
                                    <br>
                                    <img id="uploadPreview" hidden style="width: 200px; height: 100px;" />
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="Alamat Email" />
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color: red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <div class="input-group d-flex align-items-center" id="show_hide_password">
                                        <input class="form-control input-password" placeholder="Password"
                                            name="password" type="password" />
                                        <div class="input-group-addon text-center">
                                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color: red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <div class="input-group d-flex align-items-center" id="show_hide_password">
                                        <input class="form-control input-password" placeholder="Ulangi Password"
                                            type="password" name="password_confirmation" />
                                        <div class="input-group-addon text-center">
                                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <?php $__errorArgs = ['confirmed'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="" style="color: red">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <div class="input-group d-flex align-items-center" id="show_hide_password">
                                        <?php echo htmlFormSnippet(); ?>

                                    </div>

                                </div>
                            </div>
                            <button class="btn btn-lg btn-primary-ppid mt-3" type="submit">Daftar</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
    <?php $__env->startPush('child-scripts'); ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!--  -->


        <!-- <img src="assets/images/content/icon/difable.png" width="75%"> -->

        <!-- <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                    '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script> -->


        <script>
            function clickSearch() {
                let header = document.getElementById("headerNav");
                let searchData = document.getElementById("searchComponent");
                if (searchData.style.display === `none`) {
                    searchData.style.display = "block";
                    searchData.style.boxShadow = "0 5px 10px rgb(0 0 0 / 10%)";
                    header.style.boxShadow = "none";
                } else {
                    searchData.style.display = "none";
                    searchData.transition = " all .35s ease-in-out";
                    header.style.boxShadow = "0 5px 10px rgb(0 0 0 / 10%)";
                }
            }
        </script>

        <script>
            const $input = document.querySelector("#noidentitas");
            const IDENTITASNUMBER_ALLOWED_CHARS_REGEXP = /[0-9.-]+/;
            $input.addEventListener("keypress", event => {
                if (!IDENTITASNUMBER_ALLOWED_CHARS_REGEXP.test(event.key)) {
                    event.preventDefault();
                }
            });
            $(document).ready(function() {
                $("#show_hide_password a").on("click", function(event) {
                    event.preventDefault();
                    if ($("#show_hide_password input").attr("type") == "text") {
                        $("#show_hide_password input").attr("type", "password");
                        $("#show_hide_password i").addClass("fa-eye-slash");
                        $("#show_hide_password i").removeClass("fa-eye");
                    } else if (
                        $("#show_hide_password input").attr("type") == "password"
                    ) {
                        $("#show_hide_password input").attr("type", "text");
                        $("#show_hide_password i").removeClass("fa-eye-slash");
                        $("#show_hide_password i").addClass("fa-eye");
                    }
                });
            });

            function PreviewImage() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

                oFReader.onload = function(oFREvent) {
                    document.getElementById("uploadPreview").src = oFREvent.target.result;
                    document.getElementById("uploadPreview").removeAttribute("hidden");

                };
            }

            function selectJenisPemohon() {

                console.log(document.getElementById('inputJenisIdentitas'))
                document.getElementById('jenisidentitas').value = document.getElementById('jenispemohon').value
                document.getElementById('inputJenisIdentitas').value = document.getElementById('jenisidentitas').value

                if (document.getElementById('jenispemohon').value == '1') {
                    document.getElementById('dokumenText').textContent = 'Upload KTP'
                } else {
                    document.getElementById('dokumenText').textContent = 'Upload Dokumen'
                }
            }

            // $(function() {
            //     $("input[name=noidentitas]")[0].oninvalid = function() {
            //         this.setCustomValidity("KTP harus 16 digit");
            //     };
            // });
        </script>
    <?php $__env->stopPush(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50)): ?>
<?php $component = $__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50; ?>
<?php unset($__componentOriginal0653dab4c090fb8906ed9fe87faf66f0cf84ed50); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\project0\laravelBase\resources\views/auth/register3.blade.php ENDPATH**/ ?>