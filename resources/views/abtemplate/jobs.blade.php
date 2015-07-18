@extends('abtemplate.index')

@section('title')
    @parent
    Наши работы
@stop

@section('content')
    <div class="margintop"></div>
    <div class="fluid-container service">
        <div class="container ">

        </div>
        @include('abposts::frontend.posts');
    </div>
@stop


