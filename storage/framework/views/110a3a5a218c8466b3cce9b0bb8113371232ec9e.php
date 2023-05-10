<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="Ultra Palestine - Register">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/brand/favicon.ico')); ?>" />

    <!-- TITLE -->
    <title>Ultra Palestine - Register</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?php echo e(asset('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/dark-style.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/transparent-style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/skin-modes.css')); ?>" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />
    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(asset('assets/colors/color1.css')); ?>" />
</head>

<body class="app sidebar-mini ltr">

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">
        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="<?php echo e(asset('assets/images/loader.svg')); ?>" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->
        <!-- PAGE -->
        <div class="page">
            <div class="">
                <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('layouts.sessions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- CONTAINER OPEN -->
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <div class="col col-login mx-auto mt-7">
                            <div class="text-center">
                                <img src="<?php echo e(asset('assets/images/brand/logo.png')); ?>" class="img-fluid w-25"
                                    alt="">
                            </div>
                        </div>
                        <hr>
                        <form class="login100-form validate-form" method="POST" action="<?php echo e(route('doregister')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <span class="login100-form-title pb-5">
                                Join Us To Start Your Journey
                            </span>
                            <div class="panel panel-primary">
                                <div class="row">
                                    <div class="col-md col-lg">
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a class="input-group-text bg-white text-muted">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <input required class="input100 border-start-0 form-control ms-0"
                                                type="text" placeholder="First Name" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md col-lg">
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="" class="input-group-text bg-white text-muted">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <input required class="input100 border-start-0 form-control ms-0"
                                                type="text" placeholder="Last Name" name="lname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md col-lg">
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a class="input-group-text bg-white text-muted">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </a>
                                            <input required class="input100 border-start-0 form-control ms-0"
                                                type="email" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md col-lg">
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a class="input-group-text bg-white text-muted">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </a>
                                            <input required class="input100 border-start-0 form-control ms-0"
                                                type="number" placeholder="Phone" name="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md col-lg">
                                        <div class="wrap-input100 validate-input input-group">
                                            <a class="input-group-text bg-white text-muted">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <input required class="input100 border-start-0 form-control ms-0"
                                                type="password" placeholder="Password" name="password">
                                        </div>
                                    </div>
                                    <div class="col-md col-lg">
                                        <div class="wrap-input100 validate-input input-group">
                                            <a class="input-group-text bg-white text-muted">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <input required class="input100 border-start-0 form-control ms-0"
                                                type="password" placeholder="Confirm Password" name="confirm_password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md col-lg">
                                        <div class="wrap-input100 validate-input input-group">
                                            <a class="input-group-text bg-white text-muted">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </a>
                                            <select class="input100 border-start-0 form-control ms-0" name="area_id"
                                                id="area">
                                                <Option disabled hidden selected>Please Select Area</Option>
                                                <?php $__currentLoopData = App\Models\Area::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($area->id); ?>"><?php echo e($area->area_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md col-lg">
                                        <div class="wrap-input100 validate-input input-group">
                                            <a class="input-group-text bg-white text-muted">
                                                <i class="fa fa-compass" aria-hidden="true"></i>
                                            </a>
                                            <select class="input100 border-start-0 form-control ms-0"
                                                name="village_id" id="village">
                                                <Option disabled hidden selected>Please Select Area First</Option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md col-lg">
                                        <div class="wrap-input100 validate-input input-group">
                                            <a class="input-group-text bg-white text-muted">
                                                <i class="fa fa-road" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" type="street"
                                                placeholder="street" name="street">
                                        </div>
                                    </div>
                                    <div class="col-md col-lg">
                                        <div class="wrap-input100 validate-input input-group">
                                            <input type="file" name="image" class="form-control mt-1"
                                                id="validatedInputGroupCustomFile">
                                            <label for="validatedInputGroupCustomFile"></label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md text-center">
                                        <button class="btn btn-success m-auto">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                                <div class="text-center pt-3">
                                    <p class="text-dark mb-0">Have Account ?<a href="<?php echo e(route('login')); ?>"
                                            class="text-primary ms-1">Login</a></p>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>

    <!-- BOOTSTRAP JS -->
    <script src="<?php echo e(asset('assets/plugins/bootstrap/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="<?php echo e(asset('assets/js/show-password.min.js')); ?>"></script>

    <!-- GENERATE OTP JS -->
    <script src="<?php echo e(asset('assets/js/generate-otp.js')); ?>"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="<?php echo e(asset('assets/plugins/p-scroll/perfect-scrollbar.js')); ?>"></script>

    <!-- Color Theme js -->
    <script src="<?php echo e(asset('assets/js/themeColors.js')); ?>"></script>

    <!-- CUSTOM JS -->
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $(document).on('change', '#area', function() {
                $('#village').find('option')
                    .remove();
                var area_id = $(this).val();
                $.ajax({
                    type: 'get',
                    url: "<?php echo e(route('findareavillages')); ?>",
                    data: {
                        "area_id": area_id
                    },
                    dataType: 'json',
                    success: function(data) {
                        //$('#area').removeAttr("disabled");
                        var selectVillage = '';
                        selectVillage +=
                            '<Option disabled hidden selected>Please Select Village</Option>';
                        data.forEach(function(row) {
                            var village = $('#village');
                            $('#village').find('option')
                                .remove();
                            selectVillage += '<Option value=' + row.id + '>' + row
                                .village_name + '</Option>';
                            $('#village').append(selectVillage);
                        });
                        console.log(data.length);
                    },
                    error: function() {

                    },
                });
                $('#village').append();
            });
        });
    </script>





</body>

</html>
<?php /**PATH /storage/ssd1/003/20002003/resources/views/auth/register.blade.php ENDPATH**/ ?>