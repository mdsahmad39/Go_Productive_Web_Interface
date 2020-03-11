@extends('layouts.app')

@section('content')

    <section id="banner" data-video="images/banner">
        <div class="inner">
            <h1>Welcome Ahmad</h1>
            <p>You are about use our services in a more simplified way<br />
                Thank you for using our device.</p>
            <a href="#one" class="button special scrolly">Services</a>
        </div>
    </section>

    <section id="one" class="wrapper style2">
        <div class="inner">
            @foreach($tasks as $task)
                @if($task->is_complete)
                    <!--<s>{{$task->title}}</s>-->
                @else
                    <h3>{{$task->title}}</h3>
                @endif
            @endforeach
        </div>
    </section>
@endsection