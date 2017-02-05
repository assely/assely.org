<!doctype html>
<html class="no-js" <?php echo e(language_attributes()); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php do_action('get_header'); wp_head(); ?>
    </head>
    <body id="body" <?php echo e(body_class('is-close')); ?>>
        <?php echo $__env->make('offcanvas.offcanvas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div id="stage" class="stage">
            <div class="container-fluid">
                <main class="stage__content">
                    <div class="row">
                        <?php echo $__env->yieldContent('header'); ?>
                    </div>

                    <div class="row">
                        <?php echo $__env->yieldContent('main'); ?>
                    </div>

                    <div class="row">
                        <?php $__env->startSection('footer'); ?>
                            <?php echo $__env->make('footer.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->yieldSection(); ?>
                    </div>
                </main>
            </div>

            <div id="stageOverlay" class="stage__overlay"></div>
        </div>

        <?php echo $__env->make('offcanvas.track', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php do_action('get_footer'); wp_footer(); ?>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', '<?php echo e(env('GA')); ?>', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
