<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Workshop')); ?></title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <link href="<?php echo e(asset('fontawesome/css/all.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script> 
        $(document).ready(function(){
            $("#mentes").click(function(){
                var ujMegye = $("#input").val();
                alert(ujMegye);
                
                $.ajax({
                    
                    url:'connect.php',
                    method:'POST',
                    data:{
                        ujMegye = ujMegye,
                        
                        
                    },
                    success:function(data){
                        alert(data);   
                    }
                });
        });
        });
        

    
    </script>
    <link href="<?php echo e(asset('css/app.css')); ?>" type="text/css" rel="stylesheet">
    <style type="text/css">
        i{
            font-size: 20px !important;
            /*padding: 10px;*/
        }
    </style>
    <!-- Icons -->
</head>
<body>
    <div id="app">
        <div class="container">
            <nav id="header" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><i class="fa-solid fa-house fa-beat" style="color: #000000;"></i></a>

                    

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Left Side Of Navbar -->
                            <!--<div class="dropdown">-->
<!--                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Törzsadatok
                                </a>-->
                                <!--<ul class="navbar">-->
                                    <li><a id="cim" href="<?php echo e(route('megyekk')); ?>">Vármegyék</a></li>&nbsp;
                                   
                                <!--</ul>-->
                            <!--</div>-->
                       </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
<!--                            <?php if(auth()->guard()->guest()): ?>
                                <?php if(Route::has('login')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                    </li>
                                <?php endif; ?>

                                <?php if(Route::has('register')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Regisztrálás')); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <?php echo e(Auth::user()->name); ?>

                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>
                            <?php endif; ?>-->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <footer class="text-center">
            <?php echo e(config('app.name', 'Workshop')); ?> v<?php echo e(env('APP_VERSION')); ?> (PHP v<?php echo e(PHP_VERSION); ?>)
        </footer>
    </div>
    
</body>
</html>

<?php /**PATH C:\xampp\htdocs\varmegyek\resources\views/layouts/app.blade.php ENDPATH**/ ?>