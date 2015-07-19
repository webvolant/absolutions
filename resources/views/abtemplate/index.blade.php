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
    <link rel="stylesheet" type="text/css" href="abtemplate/css/bootstrap.css">


    <link rel="stylesheet" type="text/css" href="abtemplate/loaders/loaders.css-master/loaders.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,100,400&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" type="text/css" href="abtemplate/css/animate.css">
    <link rel="stylesheet" type="text/css" href="abtemplate/css/component_links_effects.css">

    <link rel="stylesheet" type="text/css" href="abtemplate/template.css">







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
    <script src="abtemplate/bootstrap-3.3.5/dist/js/bootstrap.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-sanitize.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-resource.js"></script>

    <script src="abtemplate/js/wow.min.js"></script>
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


<div ng-show ="loading" id="page-preloader"><div class="loader"><div class="loader-inner ball-spin-fade-loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div><div class="loader-inner ball-spin-fade-loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div></div></div>



<div class="wrapper">

<nav class="topmenu navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">





            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Навигация</span>
                <i class="fa fa-bars fa-inverse"></i>
            </button>
        </div>
        <div class="navbar-collapse collapse">



            <ul class="nav navbar-nav cl-effect-14">
                <li class="logotype"></li>
                <li><a href="{!! URL::to('/') !!}"><span class="glyphicon glyphicon-home"></span> Дом</a></li>
                <li><a href="{!! URL::route('jobs') !!}"><i class="fa fa-sitemap"></i> Работа</a></li>
                <!--<li><a href="{!! URL::route('partners') !!}"><span class="glyphicon glyphicon-user"></span> Клиенты</a></li>-->
                <li><a href="" data-toggle="modal" data-target="#modalPrice"><span class="glyphicon glyphicon-briefcase"></span> Услуги и цены</a></li>
                <li><a href="{!! URL::route('contacts') !!}"><span class="glyphicon glyphicon-phone"></span> Контакты</a></li>


            </ul>
            <ul class="nav navbar-nav cl-effect-6 pull-right hidden-xs hidden-sm">
                <li><a href="" ng-controller="rotateCtrl" ng-click="rotate_content()">Сделать заказ</a></li>
            </ul>
        </div><!--/.nav-collapse -->



    </div>
</nav>






@section('content')

@include('abslider::frontend.slider');

<div class="fluid-container service">
    <div class="container ">

        <h1 class="text-center slideInUp wow"><span class="color"><i class="fa fa-tasks fa"></i> Наши</span> Услуги</h1>

        <div class="slideInUp wow">
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
</div>

<div class="fluid-container best_of_best">
    <div class="container">
        <div class="shadows"></div>
        <h3 class="text-center slideInUp wow"><span class="color"><i class="fa fa-database fa"></i> Наши</span> Преимущества</h3>

        <div class="slideInUp wow">
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
</div>

<div class="fluid-container dark">
    <div class="container">


        <div class="block-price visit fl">
            <h2 class="title">Сайт-визитка</h2>
            <!-- CONTENT -->
            <div class="content">
                <p class="price">
                    <sup>от </sup>
                    <span> 500</span>
                    <sub>$</sub>
                </p>
                <p class="hint">Самый быстрый и недорогой способ заявить о себе.</p>
                <hr class="divider"/>
                <p class="hint">Сайты: персональные, фирм, промо-сайты.</p>
            </div>
            <!-- /CONTENT -->

            <!-- FEATURES -->
            <ul class="features">
                <h4>Услуги</h4>
                <li><i class="fa fa-diamond fa-x text-center"></i> Фирменный стиль</li>
                <li><i class="fa fa-code fa-x text-center"></i> Верстка и программирование</li>
                <li><i class="fa fa-dashboard fa-x text-center"></i> Административная панель</li>
                <hr class="divider"/>
                <li><i class="fa fa-tasks fa-x text-center"></i> <b>Модули</b></li>
                <ul class="features">
                    <li> Карта-схема проезда</li>
                    <li> Форма обратной связи</li>
                    <li> Галерея</li>
                    <li> Раздел новостей</li>
                    <li> Социальные кнопки</li>
                    <li> Поиск</li>
                </ul>
                <li> <b><i class="fa fa-flask fa-x text-center"></i> Расширение стандартного функционала</b></li>
                <hr class="divider"/>
                <li><i class="fa fa-clock-o fa-x text-center"></i> Срок разработки: <b>от 10 дней</b></li>
                <hr class="divider"/>
                <li><i class="fa fa-folder fa-x text-center"></i> Хостинг - <b>1 год</b></li>
                <li><i class="fa fa-external-link fa-x text-center"></i> Доменное имя - <b>1 год</b></li>
            </ul>
            <!-- /FEATURES -->

            <!-- PT-FOOTER -->
            <div class="pt-footer">

            </div>
            <!-- /PT-FOOTER -->
        </div>


        <div class="block-price corporate fl">
            <h2 class="title">Сайт-корпоративный</h2>
            <!-- CONTENT -->
            <div class="content">
                <p class="price">
                    <sup>от </sup>
                    <span> 1000</span>
                    <sub>$</sub>
                </p>
                <p class="hint">Сайт для крупной компании с большими возможностями.</p>
                <hr class="divider"/>
                <p class="hint">Сайты: корпоративные, порталы.</p>
            </div>
            <!-- /CONTENT -->

            <!-- FEATURES -->
            <ul class="features">
                <h4>Услуги</h4>
                <li><i class="fa fa-diamond fa-x text-center"></i> Фирменный стиль</li>
                <li><i class="fa fa-code fa-x text-center"></i> Верстка и программирование</li>
                <li><i class="fa fa-dashboard fa-x text-center"></i> Административная панель</li>
                <hr class="divider"/>
                <li><i class="fa fa-tasks fa-x text-center"></i> <b>Модули</b></li>
                <ul class="features">
                    <li> Карта-схема проезда</li>
                    <li> Форма обратной связи</li>
                    <li> Галерея</li>
                    <li> Раздел новостей</li>
                    <li> Социальные кнопки</li>
                    <li> Поиск</li>
                    <li> Каталоги продукции</li>
                    <li> Системы отчетности</li>
                    <li> Функционал разработанный под задачу</li>

                </ul>
                <li> <b><i class="fa fa-flask fa-x text-center"></i> Расширение стандартного функционала</b></li>
                <hr class="divider"/>
                <li><i class="fa fa-clock-o fa-x text-center"></i> Срок разработки: <b>от 25 дней</b></li>
                <hr class="divider"/>
                <li><i class="fa fa-folder fa-x text-center"></i> Хостинг - <b>1 год</b></li>
                <li><i class="fa fa-external-link fa-x text-center"></i> Доменное имя - <b>1 год</b></li>
            </ul>
            <!-- /FEATURES -->

            <!-- PT-FOOTER -->
            <div class="pt-footer">

            </div>
            <!-- /PT-FOOTER -->
        </div>

        <div class="block-price store fl">
            <h2 class="title">Интернет - магазин</h2>
            <!-- CONTENT -->
            <div class="content">
                <p class="price">
                    <sup>от </sup>
                    <span> 1500</span>
                    <sub>$</sub>
                </p>
                <p class="hint">Сайт - магазин, работающий без перерыва и выходных.</p>
                <hr class="divider"/>
                <p class="hint">Сайты: продающие онлайн.</p>
            </div>
            <!-- /CONTENT -->

            <!-- FEATURES -->
            <ul class="features">
                <h4>Услуги</h4>
                <li><i class="fa fa-diamond fa-x text-center"></i> Фирменный стиль</li>
                <li><i class="fa fa-code fa-x text-center"></i> Верстка и программирование</li>
                <li><i class="fa fa-dashboard fa-x text-center"></i> Административная панель</li>
                <hr class="divider"/>
                <li><i class="fa fa-tasks fa-x text-center"></i> <b>Модули</b></li>
                <ul class="features">
                    <li> Карта-схема проезда</li>
                    <li> Форма обратной связи</li>
                    <li> Галерея</li>
                    <li> Раздел новостей</li>
                    <li> Социальные кнопки</li>
                    <li> Поиск</li>
                    <li> Каталоги продукции</li>
                    <li> Отчетность</li>
                    <li> Функционал интернет магазина</li>

                </ul>
                <li> <b><i class="fa fa-flask fa-x text-center"></i> Расширение стандартного функционала</b></li>
                <hr class="divider"/>
                <li><i class="fa fa-clock-o fa-x text-center"></i> Срок разработки: <b>от 25 дней</b></li>
                <hr class="divider"/>
                <li><i class="fa fa-folder fa-x text-center"></i> Хостинг - <b>1 год</b></li>
                <li><i class="fa fa-external-link fa-x text-center"></i> Доменное имя - <b>1 год</b></li>
            </ul>
            <!-- /FEATURES -->

            <!-- PT-FOOTER -->
            <div class="pt-footer">

            </div>
            <!-- /PT-FOOTER -->
        </div>


    </div>

</div>


<div class="fluid-container clients">
    <div class="container">
        <div class="shadows2"></div>
        <h3 class="text-center"><span class="color"><i class="fa fa-code-fork"></i> Наши</span> Клиенты</h3>

        {!! \AbHtml::where('title','=','Партнеры')->first()->description !!}

    </div>

</div>


<div class="fluid-container clients">
    <div class="container">
        <div class="shadows2"></div>
        <h3 class="text-center"><span class="color"><i class="fa fa-code"></i> Мы используем</span> в работе</h3>

        {!! \AbHtml::where('title','=','В работе мы используем')->first()->description !!}

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





<script src="abtemplate/js/app.js"></script>
</body>

<div class="contact_form">

    <div class="box-tools pull-right">
        <button ng-controller="rotateCtrl" ng-click="rotate_back()" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button ng-controller="rotateCtrl" ng-click="rotate_back()" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
    </div>

    <div class="clear"></div>

<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">
            Отправка сообщения
        </h3>
    </div>
    <div class="panel-body">

            {!! Form::open(array('route' => 'contacts', 'method' => 'post', 'role' => 'form', 'files' => 'true', 'class' => 'form')) !!}
            <?php //echo Form::token(); ?>

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group has-feedback">
                        {!! Form::text('title',null, array('class'=>'form-control', 'placeholder'=>'Тема сообщения')) !!}
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
                        {!! Form::textarea('description', null, array('id'=>'description', 'class'=>'form-control', 'placeholder'=>'Описание')) !!}
                        @if ($errors->first('description'))
                        <div class="alert alert-danger" role="alert"><?php echo $errors->first('description'); ?></div>
                        @else
                        @endif
                    </div>

                </div><!-- /.col -->

            </div><!-- /.row -->

        <div class="pull-right">
            <button class="btn btn-info btn" type="submit"><i class="fa fa-save"></i> Отправить</button>
            <a href="" ng-controller="rotateCtrl" ng-click="rotate_back()" class="btn btn-danger btn"><i class="fa fa-undo fa-fw"></i> Отменить</a>
        </div>
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
    <h4 class="modal-title">Услуги и цены</h4>
</div>
<div class="modal-body">


    <div class="block-price visit fl">
        <h2 class="title">Сайт-визитка</h2>
        <!-- CONTENT -->
        <div class="content">
            <p class="price">
                <sup>от </sup>
                <span> 500</span>
                <sub>$</sub>
            </p>
            <p class="hint">Самый быстрый и недорогой способ заявить о себе.</p>
            <hr class="divider"/>
            <p class="hint">Сайты: персональные, фирм, промо-сайты.</p>
        </div>
        <!-- /CONTENT -->

        <!-- FEATURES -->
        <ul class="features">
            <h4>Услуги</h4>
            <li><i class="fa fa-diamond fa-x text-center"></i> Фирменный стиль</li>
            <li><i class="fa fa-code fa-x text-center"></i> Верстка и программирование</li>
            <li><i class="fa fa-dashboard fa-x text-center"></i> Административная панель</li>
            <hr class="divider"/>
            <li><i class="fa fa-tasks fa-x text-center"></i> <b>Модули</b></li>
            <ul class="features">
                <li> Карта-схема проезда</li>
                <li> Форма обратной связи</li>
                <li> Галерея</li>
                <li> Раздел новостей</li>
                <li> Социальные кнопки</li>
                <li> Поиск</li>
            </ul>
            <li> <b><i class="fa fa-flask fa-x text-center"></i> Расширение стандартного функционала</b></li>
            <hr class="divider"/>
            <li><i class="fa fa-clock-o fa-x text-center"></i> Срок разработки: <b>от 10 дней</b></li>
            <hr class="divider"/>
            <li><i class="fa fa-folder fa-x text-center"></i> Хостинг - <b>1 год</b></li>
            <li><i class="fa fa-external-link fa-x text-center"></i> Доменное имя - <b>1 год</b></li>
        </ul>
        <!-- /FEATURES -->

        <!-- PT-FOOTER -->
        <div class="pt-footer">

        </div>
        <!-- /PT-FOOTER -->
    </div>


    <div class="block-price corporate fl">
        <h2 class="title">Сайт-корпоративный</h2>
        <!-- CONTENT -->
        <div class="content">
            <p class="price">
                <sup>от </sup>
                <span> 1000</span>
                <sub>$</sub>
            </p>
            <p class="hint">Сайт для крупной компании с большими возможностями.</p>
            <hr class="divider"/>
            <p class="hint">Сайты: корпоративные, порталы.</p>
        </div>
        <!-- /CONTENT -->

        <!-- FEATURES -->
        <ul class="features">
            <h4>Услуги</h4>
            <li><i class="fa fa-diamond fa-x text-center"></i> Фирменный стиль</li>
            <li><i class="fa fa-code fa-x text-center"></i> Верстка и программирование</li>
            <li><i class="fa fa-dashboard fa-x text-center"></i> Административная панель</li>
            <hr class="divider"/>
            <li><i class="fa fa-tasks fa-x text-center"></i> <b>Модули</b></li>
            <ul class="features">
                <li> Карта-схема проезда</li>
                <li> Форма обратной связи</li>
                <li> Галерея</li>
                <li> Раздел новостей</li>
                <li> Социальные кнопки</li>
                <li> Поиск</li>
                <li> Каталоги продукции</li>
                <li> Системы отчетности</li>
                <li> Функционал разработанный под задачу</li>

            </ul>
            <li> <b><i class="fa fa-flask fa-x text-center"></i> Расширение стандартного функционала</b></li>
            <hr class="divider"/>
            <li><i class="fa fa-clock-o fa-x text-center"></i> Срок разработки: <b>от 25 дней</b></li>
            <hr class="divider"/>
            <li><i class="fa fa-folder fa-x text-center"></i> Хостинг - <b>1 год</b></li>
            <li><i class="fa fa-external-link fa-x text-center"></i> Доменное имя - <b>1 год</b></li>
        </ul>
        <!-- /FEATURES -->

        <!-- PT-FOOTER -->
        <div class="pt-footer">

        </div>
        <!-- /PT-FOOTER -->
    </div>

    <div class="block-price store fl">
        <h2 class="title">Интернет - магазин</h2>
        <!-- CONTENT -->
        <div class="content">
            <p class="price">
                <sup>от </sup>
                <span> 1500</span>
                <sub>$</sub>
            </p>
            <p class="hint">Сайт - магазин, работающий без перерыва и выходных.</p>
            <hr class="divider"/>
            <p class="hint">Сайты: продающие онлайн.</p>
        </div>
        <!-- /CONTENT -->

        <!-- FEATURES -->
        <ul class="features">
            <h4>Услуги</h4>
            <li><i class="fa fa-diamond fa-x text-center"></i> Фирменный стиль</li>
            <li><i class="fa fa-code fa-x text-center"></i> Верстка и программирование</li>
            <li><i class="fa fa-dashboard fa-x text-center"></i> Административная панель</li>
            <hr class="divider"/>
            <li><i class="fa fa-tasks fa-x text-center"></i> <b>Модули</b></li>
            <ul class="features">
                <li> Карта-схема проезда</li>
                <li> Форма обратной связи</li>
                <li> Галерея</li>
                <li> Раздел новостей</li>
                <li> Социальные кнопки</li>
                <li> Поиск</li>
                <li> Каталоги продукции</li>
                <li> Отчетность</li>
                <li> Функционал интернет магазина</li>

            </ul>
            <li> <b><i class="fa fa-flask fa-x text-center"></i> Расширение стандартного функционала</b></li>
            <hr class="divider"/>
            <li><i class="fa fa-clock-o fa-x text-center"></i> Срок разработки: <b>от 25 дней</b></li>
            <hr class="divider"/>
            <li><i class="fa fa-folder fa-x text-center"></i> Хостинг - <b>1 год</b></li>
            <li><i class="fa fa-external-link fa-x text-center"></i> Доменное имя - <b>1 год</b></li>
        </ul>
        <!-- /FEATURES -->

        <!-- PT-FOOTER -->
        <div class="pt-footer">

        </div>
        <!-- /PT-FOOTER -->
    </div>



</div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
    </div>
</div>

</div>
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

    /*$(window).on('load', function () {
        var $preloader = $('#page-preloader'),
            $spinner   = $preloader.find('.loader');
        $preloader.fadeOut();
        $spinner.fadeOut();
    });*/

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
                jQuery('.topmenu').css({'background':'rgba(87, 203, 237, 0.9)'}).removeClass('duration');

        }, 200);

    });






</script>


</html>





