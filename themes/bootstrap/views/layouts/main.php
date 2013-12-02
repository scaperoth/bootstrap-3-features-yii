<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <?php
        $cs = Yii::app()->clientScript;
        $themePath = Yii::app()->theme->baseUrl;

        /**
         * StyleSHeets
         */
        $cs->registerCssFile($themePath . '/assets/css/bootstrap.min.css');
        $cs->registerCssFile($themePath . '/assets/css/bootstrap-theme.min.css');
        $cs->registerCssFile($themePath . '/assets/fractionslider/fractionslider.css');
        $cs->registerCssFile($themePath . '/assets/css/style.css');
        $cs->registerCssFile($themePath . '/assets/font-awesome-4.0.3/css/font-awesome.min.css');
        /**
         * JavaScripts
         */
        $cs->registerScriptFile($themePath . '/assets/js/jquery-migrate-1.2.1.min.js', CClientScript::POS_END);
        $cs->registerCoreScript('jquery', CClientScript::POS_BEGIN);
        $cs->registerCoreScript('jquery.ui', CClientScript::POS_BEGIN);

        $cs->registerScriptFile($themePath . '/assets/js/bootstrap.min.js', CClientScript::POS_END);
        $cs->registerScriptFile($themePath . '/assets/js/stellar/jquery.stellar.min.js', CClientScript::POS_BEGIN);
        $cs->registerScriptFile($themePath . '/assets/fractionslider/jquery.fractionslider.js', CClientScript::POS_END);
        $cs->registerScriptFile($themePath . '/assets/nicescroll/jquery.nicescroll.min.js', CClientScript::POS_END);
        $cs->registerScriptFile($themePath . '/assets/js/script.js', CClientScript::POS_END);
        $cs->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()", CClientScript::POS_READY);
        ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="<?php
        echo $themePath . '/assets/js/html5shiv.js';
        ?>"></script>
            <script src="<?php
        echo $themePath . '/assets/js/respond.min.js';
        ?>"></script>
        <![endif]-->

    </head>

    <body >

        <?php
        $this->widget('bootstrap.widgets.BsNavbar', array(
            'collapse' => true,
            'brandLabel' => BSHtml::icon(BSHtml::GLYPHICON_HOME),
            'brandUrl' => Yii::app()->homeUrl,
            'items' => array(
                array(
                    'class' => 'bootstrap.widgets.BsNav',
                    'type' => 'navbar',
                    'activateParents' => true,
                    'htmlOptions' => array(
                        'pull' => BSHtml::PULL_RIGHT,
                    ),
                    'items' => array(
                        array(
                            'label' => 'Home',
                            'url' => array(
                                '/site/index'
                            ),
                        ),
                        array(
                            'label' => 'About',
                            'url' => array(
                                '/site/page',
                                'view' => 'about'
                            )
                        ),
                        array(
                            'label' => 'Parallax',
                            'url' => array(
                                '/site/parallax'
                            )
                        ),
                        array(
                            'label' => 'Login',
                            'url' => array(
                                '/site/login'
                            ),
                            'visible' => Yii::app()->user->isGuest
                        ),
                        array(
                            'label' => 'Logout (' . Yii::app()->user->name . ')',
                            'url' => array(
                                '/site/logout'
                            ),
                            'visible' => !Yii::app()->user->isGuest
                        )
                    ),
                )
            )
        ));
        ?>
        <div class="container bs-docs-container"  id="page">

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('bootstrap.widgets.BsBreadcrumb', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clearfix"></div>

            <div id="footer">

            </div> <!--footer -->

        </div><!-- page -->

    </body>
    <script>
        $(document).ready(
                function() {
                    $("html").niceScroll({
                        cursorwidth: '8px',
                        cursorborder: 'none',
                        overflow: 'hidden',
                        cursoropacitymin: 1,
                        scrollspeed: 70,
                    });
                    $('.slider').fractionSlider({
                        'fullWidth': true,
                        'controls': true,
                        'responsive': true,
                        'dimensions': '1700, 300',
                        'slideTransitionSpeed': 0,
                        'increase': true,
                    });
                    $.stellar({
                        horizontalScrolling: false,
                        verticalScrolling: true,
                        responsive: true,
                        positionProperty: 'position',
                    });


                }

        );
    </script>
</html>
