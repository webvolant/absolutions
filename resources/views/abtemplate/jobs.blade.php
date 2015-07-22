@extends('abtemplate.index')

@section('title')
    @parent
    {!! trans("ablang.job") !!}
@stop

@section('content')
    <div class="margintop"></div>
    <div class="fluid-container service">
        <div class="container ">

        </div>
        @include('abposts::frontend.posts');
    </div>
@stop


