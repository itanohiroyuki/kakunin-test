<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashionably Late</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/sanitize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/common.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500;700&display=swap" rel="stylesheet">
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Fashionably Late
            </a>
            <div class="header-nav__item">
                <?php if(Auth::check()): ?>
                    <form class="header-nav" method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button class="header-nav__button">logout</button>
                    </form>
                <?php else: ?>
                    <a class="header-nav__button" href="/login">login
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>

</html>
<?php /**PATH /var/www/resources/views/layouts/app.blade.php ENDPATH**/ ?>