@extends('layouts.app')

@section('content')

<section id="banner" data-video="images/banner">
    <div class="inner">
        <h1>Welcome {{ Auth::user()->name }}</h1>
        <p>You are about use our services in a more simplified way<br />
            Thank you for using our device.</p>
        <a href="#one" class="button special scrolly">Services</a>
    </div>
</section>

<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/task.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2><a href="{{ url('/tasks') }}" >Todo List</a></h2>
                            <p>Here you can manage your tasks and update them</p>
                        </header>
                        <hr />
                        <p> More about tasks</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/events.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>Calender and Events</h2>
                            <p>Here you can add events to your calender</p>
                        </header>
                        <hr />
                        <p> More about calender and event</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Four -->
<section id="four" class="wrapper style3">
    <div class="inner">
        <div id="flexgrid">
            <header class="align-center">
                <h2>Motivational Quotes</h2>
            </header>
        </div>
    </div>
</section>

<!-- One -->
<section id="three" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/pomodoro.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>Pomodoro Timer</h2>
                            <p>Here you can manage your pomodoro timer</p>
                        </header>
                        <hr />
                        <p>More about pomodoro timer</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/alarm.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>Alarm</h2>
                            <p>Manage your alarm</p>
                        </header>
                        <hr />
                        <p> About how you can manage your alarm</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
