<!doctype html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">

    <title>
        @section('title')
            AB solutions - разработка типовых и индивидуальных веб-проектов.
        @show
    </title>

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">-->

    <link rel="shortcut icon" href="favicon.ico">
    {!! Html::style('abtemplate/css/bootstrap.css') !!}
    {!! Html::style('abtemplate/loaders/loaders.css-master/loaders.min.css') !!}


    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,100,400&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>


    {!! Html::style('abtemplate/css/animate.css') !!}
    {!! Html::style('abtemplate/css/component_links_effects.css') !!}
    {!! Html::style('abtemplate/template.css') !!}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    {!! Html::script('abtemplate/bootstrap-3.3.5/dist/js/bootstrap.min.js') !!}


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-sanitize.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-resource.js"></script>

    {!! Html::script('abtemplate/js/wow.min.js') !!}
    <script>new WOW().init();</script>



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
<body ng-controller="appController">

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-59848299-3', 'auto');
    ga('send', 'pageview');

</script>


<div ng-show ="loading" id="page-preloader"><div class="loader">
        <div class="loader-inner cube-transition">
            <div></div>
            <div></div>
        </div>
    </div></div>



<div class="wrapper">



<nav class="topmenu navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="up_container container">
        <div class="pull-right">
            <a href="mailto:box@abs-it.net"><i class="fa fa-envelope-o"></i>e-mail: box@abs-it.net</a>
            <i class="fa fa-skype"></i>skype: volant247
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="logotype"></div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">{!! trans("ablang.navigation") !!}</span>
                        <i class="fa fa-bars fa-inverse"></i>
                    </button>
                </div>
                <div class="navbar-collapse collapse">

                    <div class="col-xs-8 col-sm-10 col-md-7">
                        <ul class="nav navbar-nav cl-effect-14">

                            <li><a href="{!! URL::to('/') !!}"><span class="glyphicon glyphicon-home"></span> {!! trans("ablang.home") !!}</a></li>
                            <li><a href="{!! URL::route('jobs') !!}"><i class="fa fa-sitemap"></i> {!! trans("ablang.job") !!}</a></li>
                            <!--<li><a href="{!! URL::route('partners') !!}"><span class="glyphicon glyphicon-user"></span> Клиенты</a></li>-->
                            <li><a href="" data-toggle="modal" data-target="#modalPrice"><span class="glyphicon glyphicon-briefcase"></span> {!! trans("ablang.service_and_price") !!}</a></li>
                            <li><a href="{!! URL::route('contacts') !!}"><span class="glyphicon glyphicon-phone"></span> {!! trans("ablang.contacts") !!}</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-4 col-sm-10 col-md-2">
                    <ul class="language_bar_chooser list_none_lang left_lang pull-right">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                {!! Html::image("abtemplate/images/$localeCode.png") !!}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    </div>

                    <div class="col-xs-0 col-sm-0 col-md-2 hidden-xs hidden-sm pull-right">
                    <ul class="nav navbar-nav cl-effect-6 ">
                        <li><a href="" ng-controller="rotateCtrl" ng-click="rotate_content()"><span class="glyphicon glyphicon-envelope"></span> {!! trans("ablang.order") !!}</a></li>
                    </ul>
                    </div>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</nav>






@section('content')

@include('abslider::frontend.slider');

<div class="fluid-container service">
    <div class="container ">
        <?php $description = "description_".App::getLocale(); ?>
        {!! \AbHtml::where('id','=','5')->first()->$description !!}
    </div>
</div>

<div class="fluid-container best_of_best">
    <div class="container">
        <div class="shadows"></div>
        <?php $description = "description_".App::getLocale(); ?>
        {!! \AbHtml::where('id','=','4')->first()->$description !!}
    </div>
</div>

<div class="fluid-container dark">
    <div class="container">
        <?php $description = "description_".App::getLocale(); ?>
        {!! \AbHtml::where('id','=','6')->first()->$description !!}
    </div>
</div>


<div class="fluid-container clients">
    <div class="container">
        <div class="shadows2"></div>
        <?php $description = "description_".App::getLocale(); ?>
        {!! \AbHtml::where('id','=','1')->first()->$description !!}
    </div>
</div>


<div class="fluid-container clients">
    <div class="container">
        <div class="shadows2"></div>
        <?php $description = "description_".App::getLocale(); ?>
        {!! \AbHtml::where('id','=','3')->first()->$description !!}
    </div>
</div>

@show





<div class="fluid-container footer">
    <div class="container">
        <div class="shadows"></div>
        <div class="hr"></div>
        <p class="pull-left">Copyright © <?php echo date('Y'); ?> AB SOLUTIONS</p>
    </div>
</div>



</div> <!-- wrapper -->




{!! Html::script('abtemplate/js/app.js') !!}
</body>

<div class="contact_form">

    <div class="box-tools pull-right">
        <button ng-controller="rotateCtrl" ng-click="rotate_back()" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button ng-controller="rotateCtrl" ng-click="rotate_back()" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
    </div>

    <div class="clear"></div>

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">
            {!! trans("ablang.send_message") !!}
        </h3>
    </div>
    <div class="panel-body">

            {!! Form::open(array('route' => 'contacts', 'method' => 'post', 'role' => 'form', 'files' => 'true', 'class' => 'form')) !!}
            <?php //echo Form::token(); ?>

            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{!! trans("ablang.contact_alert") !!} </p>
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::text('title',null, array('class'=>'form-control', 'placeholder'=>trans('ablang.contact_subject') )) !!}
                        <span class="glyphicon glyphicon-comment form-control-feedback"></span>
                        @if ($errors->first('title'))
                        <div class="alert alert-danger" role="alert"><?php echo $errors->first('title'); ?></div>
                        @else
                        @endif
                    </div>

                    <div class="form-group has-feedback">
                        {!! Form::email('email', null, array('class'=>'form-control', 'placeholder'=>'emailname@provider.prefix')) !!}
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->first('email'))
                        <div class="alert alert-danger" role="alert"><?php echo $errors->first('email'); ?></div>
                        @else
                        @endif
                    </div>

                    <div class="form-group">
                        {!! Form::textarea('description', null, array('id'=>'description', 'class'=>'form-control', 'placeholder'=>trans('ablang.contact_text'))) !!}
                        @if ($errors->first('description'))
                        <div class="alert alert-danger" role="alert"><?php echo $errors->first('description'); ?></div>
                        @else
                        @endif
                    </div>

                    <div class="pull-right">
                        <button class="btn btn-info btn" type="submit"><i class="fa fa-paper-plane-o"></i> {!! trans("ablang.send_message") !!}</button>
                        <a href="" ng-controller="rotateCtrl" ng-click="rotate_back()" class="btn btn-danger btn"><i class="fa fa-undo fa-fw"></i> {!! trans("ablang.cancel") !!}</a>
                    </div>

                </div><!-- /.col -->

            </div><!-- /.row -->

        {!! \Form::close() !!}

    </div>
    <div class="panel-footer">

    </div>
</div>
</div>





<div id="modalPrice" class="modal fade" role="dialog">
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">{!! trans("ablang.service_and_price") !!}</h4>
        </div>
        <div class="modal-body">
            <?php $description = "description_".App::getLocale(); ?>
            {!! \AbHtml::where('id','=','6')->first()->$description !!}
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">{!! trans("ablang.close") !!}</button>
            </div>
    </div>
</div>
</div>


<?php // get Main Domain action
    $flag = 0;
    $action = explode("@", \Route::getCurrentRoute()->getActionName());
    if ($action[1]=='index'){
        $flag = 1;
    }
?>

<script>
    /*$(window).on('load', function () {
        var $preloader = $('#page-preloader'),
            $spinner   = $preloader.find('.loader');
        $preloader.fadeOut();
        $spinner.fadeOut();
    });*/

    $( document ).ready(function() {
        var $flag = <?php echo $flag; ?>;
        setInterval (function(){
            if (scrollY <= 0 && $flag==1 ){
                jQuery('.topmenu').css({'background':'inherit'}).removeClass('duration');
            }
            else if (scrollY > 0 && $flag==1 )
                jQuery('.topmenu').css({'background':'rgba(23, 60, 78, 0.8)'}).addClass('duration');
            else if (scrollY >= 0 && $flag==0)
                jQuery('.topmenu').css({'background':'rgba(87, 203, 237, 0.9)'}).removeClass('duration');

        }, 200);

    });
</script>

</html>





