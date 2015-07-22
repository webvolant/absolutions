@extends('abtemplate.index')

@section('title')
    @parent
    {!! trans("ablang.contacts") !!}
@stop


@section('content')
    <div class="margintop"></div>
    <div class="fluid-container">
        <div class="container content">
            <div class="clear"></div>

            @if (Session::has('message'))
            <div class="panel panel-success">
                <div class="panel-heading">{!! trans("ablang.attention") !!}</div>
                <div class="panel-body">
                    {{ Session::get('message') }}
                </div>
            </div>
            @endif

        <h3 class="center-block"><ul class="contacts marginleft20">
                <li class="marginleft20">
                        <span class="fa-stack fa-lg color">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                        </span>{!! trans("ablang.contact_name") !!}
                </li>
        <li class="marginleft20">
                        <span class="fa-stack fa-lg color">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>box@abs-it.net
        </li>
        <li class="marginleft20">
                        <span class="fa-stack fa-lg color">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-skype fa-stack-1x fa-inverse"></i>
                        </span>volant247
        </li>
        <li class="marginleft20">
                        <span class="fa-stack fa-lg color">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                        </span>+49(176) 36-494-787<br><br>
        </li>
    </ul></h3>
            <div class="clear"></div>
                        {!! Form::open(array('route' => 'contacts', 'method' => 'post', 'role' => 'form', 'files' => 'true', 'class' => 'form')) !!}
                        <?php //echo Form::token(); ?>




                        <div class="row">

                            <div class="col-xs-12 col-sm-5 col-md-5">
                            <!-- Google Maps Code Kopieren -->
                            <iframe class="animated-class-map effect6" width="75%"
                                    height="300"
                                    src="https://maps.google.de/maps?hl=de&q=Königsbergerstr. 7, 67659 Kaiserslautern+(Kaiserslautern)&ie=UTF8&t=&z=16&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" ></iframe>

                            </div>






                            <div class="col-xs-12 col-sm-7 col-md-7">

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
                                </div>

                            </div><!-- /.col -->

                        </div><!-- /.row -->


                        {!! \Form::close() !!}



            <div class="clear"></div>




        </div>
    </div>
@stop


