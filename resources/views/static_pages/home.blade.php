@extends('layouts.default')
@section('title', '主页')
@section('content')
<div class="jumbotron">
    <h1>Hello World</h1>
    <p class="lead">
        你现在看到的是 <a href="http://www.ethlover.com">Ethlover</a> 的示例项目
    </p>
    <p>
        一切，从这里开始
    </p>
    <p>
        <a href="{{ route('signup') }}" class="btn btn-lg btn-success" roll="button">现在注册</a>
    </p>
</div>
@stop