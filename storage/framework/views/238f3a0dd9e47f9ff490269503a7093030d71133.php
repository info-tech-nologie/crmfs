<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <title><?php echo e('Admin Area || ' . Auth::user()->name); ?> </title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <?php echo $__env->yieldPushContent('admin.layouts.styles'); ?>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="position: fixed; width: 100%; z-index: 2;">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 container-fluid">
            <div id="sidebar" class="sidebar">
                <div class="text-center">
                    <img src="https://via.placeholder.com/100" alt="">
                    <h5><?php echo e(Auth::user()->name); ?></h5>
                </div>
                <div class="items-container">
                <a href="<?php echo e(route('home')); ?>">
                        <h6 class="menu-item"><i class="fas fa-tachometer-alt"></i> Dashboard</h6>
                    </a>
                    <a href="<?php echo e(route('admin.users')); ?>">
                        <h6 class="menu-item"><i class="fas fa-users"></i> Users</h6>
                    </a>
                    <a href="<?php echo e(route('admin.prospects')); ?>">
                        <h6 class="menu-item"><i class="fas fa-users"></i> Prospects</h6>
                    </a>
                    <a href="#">
                        <h6 class="menu-item"><i class="far fa-handshake"></i>Clients</h6>
                    </a>
                    <a href="#">
                        <h6 class="menu-item"><i class="fas fa-table"></i> Estimates</h6>
                    </a>
                    <hr>
                    <a href="#">
                        <h6 class="menu-item"><i class="fas fa-cog"></i> Settings</h6>
                    </a>
                </div>
            </div>
            
            <div class="content" style="margin-top: 3.5rem;">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
        
    </div>
    <?php echo $__env->yieldPushContent('admin.layouts.scripts.scripts'); ?>
</body>
</html><?php /**PATH /root/crmfsi/resources/views/admin/layouts/app.blade.php ENDPATH**/ ?>