<!doctype html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <title>AB solutions - веб студия</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="abtemplate/loaders/loaders.css-master/loaders.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,100,400&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" type="text/css" href="abtemplate/css/animate.css">
    <link rel="stylesheet" type="text/css" href="abtemplate/css/component_links_effects.css">

    <link rel="stylesheet" type="text/css" href="abtemplate/template.css">











    <style>
        #page-preloader {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background: rgb(44, 172, 211);
            z-index: 100500;
        }

        .loader-inner {
            width: 52px;
            height: 52px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -16px 0 0 -16px;
        }
    </style>


</head>
<body>


<div id="page-preloader"><div class="loader"><div class="loader-inner ball-triangle-path"><div></div><div></div><div></div></div></div></div>



<div class="wrapper">

<nav class="topmenu navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <div class="logotype"></div>




            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Навигация</span>
                <i class="fa fa-bars fa-inverse"></i>
            </button>
        </div>
        <div class="navbar-collapse collapse">



            <ul class="nav navbar-nav cl-effect-14">
                <li><a href="{!! URL::to('/') !!}"><span class="glyphicon glyphicon-home2"></span> Дом</a></li>
                <li><a href="{!! URL::route('jobs') !!}"><span class="glyphicon glyphicon-user2"></span> Работа</a></li>
                <li><a href=""><span class="glyphicon glyphicon-plus2"></span> Контакты</a></li>
                <!--<li><a href=""><span class="glyphicon glyphicon-plus2"></span> Клиенты</a></li>-->

            </ul>
            <ul class="nav navbar-nav cl-effect-6 pull-right">
                <li><a href="" ng-controller="rotateCtrl" ng-click="rotate_content()">Сделать заказ</a></li>
            </ul>
        </div><!--/.nav-collapse -->



    </div>
</nav>






@section('content')

@include('abslider::frontend.slider');

<div class="fluid-container service">
    <div class="container ">

        <h1 class="text-center"><span class="color"><i class="fa fa-tasks fa"></i> Наши</span> Услуги</h1>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="pull-left service-icon text-center">
                <i class="fa fa-diamond fa-3x text-center"></i>
            </div>
            <h4>Дизайн</h4>
            <p>Фирменный стиль это индивидуальность и неповторимость любого проекта.</p>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="pull-left service-icon text-center">
                <i class="fa fa-cogs fa-3x text-center"></i>
            </div>
            <h4>Разработка</h4>
            <p>Наша основная специализация - программирование функционала. Мы это делаем правильно, современно и своевременно.</p>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="pull-left service-icon text-center">
                <i class="fa fa-code fa-3x text-center"></i>
            </div>
            <h4>Верстка</h4>
            <p>У вас есть макет, но вы не знаете что с ним делать. Без верстки никуда - это наш конек!</p>
        </div>

        <div class="clear"></div>


        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="pull-left service-icon text-center">
                <i class="fa fa-life-saver fa-3x text-center"></i>
            </div>
            <h4>Поддержка</h4>
            <p>Для взаимного спокойствия и уверенности в будущем, мы всегда сопровождаем свои проекты. </p>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="pull-left service-icon text-center">
                <i class="fa fa-user-secret fa-3x text-center"></i>
            </div>
            <h4>Консультации</h4>
            <p>Оперативно проконсультируем вас в любых возникших вопросах. </p>
        </div>

    </div>
</div>

<div class="fluid-container best_of_best">
    <div class="container">
        <div class="shadows"></div>
        <h3 class="text-center"><span class="color"><i class="fa fa-database fa"></i> Наши</span> Преимущества</h3>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <h4><i class="fa fa-flag-checkered fa-2x text-center"></i> Разработка как типовых так и индивидуальных проектов.</h4>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <h4><i class="fa fa-cubes fa-2x text-center"></i> Создание эффективных, практичных и красивых продуктов</h4>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <h4><i class="fa fa-trophy fa-2x text-center"></i> Использование лучших современных решений.</h4>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <h4><i class="fa fa-graduation-cap fa-2x text-center"></i> Консультации и помощь в вопросах.</h4>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <h4><i class="fa fa-lock fa-2x text-center"></i> Обеспечение надежности и безопасности.</h4>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <h4><i class="fa fa-certificate fa-2x text-center"></i> Ответственность за результат.</h4>
        </div>




    </div>
</div>

<div class="fluid-container dark">
    <div class="container">
        <div class="shadows"></div>



    </div>

</div>

@show

<div class="fluid-container clients">
    <div class="container">
        <div class="shadows2"></div>
        <h3 class="text-center"><span class="color"><i class="fa fa-code-fork"></i> Наши</span> Клиенты</h3>

        <div class="cl_logo_wrap">
            <img class="client_logo" src="/public/clients/my-doc.png"/>
        </div>


        <div class="cl_logo_wrap">
            <img class="client_logo" src="/public/clients/emblemkg.png"/>
        </div>


        <div class="cl_logo_wrap">
            <img class="client_logo" src="/public/clients/Logo_Goscarto.png"/>
        </div>

        <div class="cl_logo_wrap">
            <img class="client_logo" src="/public/clients/zweifach.png"/>
        </div>


    </div>

</div>


<div class="fluid-container footer">
    <div class="container">
        <div class="shadows"></div>


        <div class="hr"></div>
        <p class="pull-left">Copyright © 2014-2015 AB SOLUTIONS</p>
    </div>

</div>

<!--
    <div class="footer navbar-fixed-bottom" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Навигация</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href=""><span class="glyphicon glyphicon-home2"></span></a></li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li><button href="" class="btn btn-primary round" ng-controller="rotateCtrl" ng-click="rotate_content()">Обратная связь</button><li>
                </ul>
            </div>
        </div>
    </div>

-->

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular-animate.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular-sanitize.js"></script>
<script src="abtemplate/js/app.js"></script>
<script src="abtemplate/js/bl_slider.js"></script>


</body>

<div class="contact_form">
        <div class="box-tools pull-right">
            <button ng-controller="rotateCtrl" ng-click="rotate_back()" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button ng-controller="rotateCtrl" ng-click="rotate_back()" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>

    {!! Form::open(array('route' => 'slider/add', 'method' => 'post', 'role' => 'form', 'files' => 'true', 'class' => 'form')) !!}




    <?php //echo Form::token(); ?>

    <div class="row">
        <div class="col-xs-8">
            <div class="form-group has-feedback">
                {!! Form::text('title',null, array('class'=>'form-control', 'placeholder'=>'Тема сообщения')) !!}
                <span class="glyphicon glyphicon-unchecked form-control-feedback"></span>
                @if ($errors->first('title'))
                <div class="alert alert-danger" role="alert"><?php echo $errors->first('title'); ?></div>
                @else
                @endif
            </div>

            <div class="form-group has-feedback">
                {!! Form::email('email', null, array('class'=>'form-control', 'placeholder'=>'emailname@provider.prefix')) !!}
                <span class="glyphicon glyphicon-unchecked form-control-feedback"></span>
                @if ($errors->first('email'))
                <div class="alert alert-danger" role="alert"><?php echo $errors->first('email'); ?></div>
                @else
                @endif
            </div>

            <div class="form-group">
                {!! Form::textarea('description', null, array('id'=>'description', 'class'=>'form-control', 'placeholder'=>'Описание')) !!}
                @if ($errors->first('description'))
                <div class="alert alert-danger" role="alert"><?php echo $errors->first('description'); ?></div>
                @else
                @endif
            </div>

        </div><!-- /.col -->

    </div><!-- /.row -->
    <div class="box-header with-border admin-tools">
        <button class="btn btn-primary btn-flat" type="submit"><i class="fa fa-save"></i> Сохранить</button>
        <a href="{!! \URL::route('slider/index') !!}" class="btn btn-warning btn-flat"><i class="fa fa-undo fa-fw"></i> Отменить</a>
    </div>

    {!! \Form::close() !!}

</div>

<script type="text/javascript">
    /*var link = window.location.href;
     var link_main = "<?php //echo Request::url().'/'; ?>";
     if (link == link_main){
     jQuery('.logotype').css({'background':'url("template/images/logo1.png") no-repeat'});
     jQuery('.topmenu li a').css({'color':'black'});
     //jQuery('.wrapper').css({'background':'#e2f0f2'});
     //window.alert($('body').height());
     //window.alert($('.wrapper').height());
     }*/
</script>


<script>

    $(window).on('load', function () {
        var $preloader = $('#page-preloader'),
            $spinner   = $preloader.find('.loader');
        $spinner.fadeOut();
        $preloader.fadeOut('fast');
    });

    $( document ).ready(function() {
        //var hostname = $('<a>').prop('href', url).prop('hostname');
        var domain = location.protocol + "//" + location.host;
        var domain2 = location.protocol + "//" + location.host + '/';
        var domain3 = location.protocol + "//" + location.host + '/#';
        var href = location.href;
        setInterval (function(){
            if (scrollY <= 0 && (domain==href || domain2==href || domain3==href) ){
                jQuery('.topmenu').css({'background':'inherit'}).removeClass('duration');
            }
            else if (scrollY > 0 && (domain==href || domain2==href || domain3==href) )
                jQuery('.topmenu').css({'background':'rgba(23, 60, 78, 0.8)'}).addClass('duration');
            else
                jQuery('.topmenu').css({'background':'rgb(20, 152, 191)'}).removeClass('duration');

        }, 200);

    });




</script>


</html>





