@extends('abtemplate.index')

@section('content')
    <div class="margintop"></div>
    <div class="fluid-container">
        <div class="container content">
            <div class="clear"></div>
            <h3 class="center-block"></h3>
            <div class="clear"></div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    {!! \AbHtml::where('title','=','Клиенты')->first()->description !!}
                                </div>
                            </div><!-- /.row -->
            <div class="clear"></div>
        </div>
    </div>
@stop


