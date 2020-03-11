@extends('layouts.app')

@section('content')

<section id="banner" data-video="images/banner">
    <div class="inner">
        @auth
            <h1>Hey, {{Auth::user()->name}}</h1>
            <a class="nav-link" href="/dashboard" class="button button-success">{{__('Go to your Dashboard') }}</a>
        @else
            <h1>Go Productive!</h1>
        @endauth
        <p>This website along with our special device helps you to make your life more Productive<br />
            built by <a href="https://templated.co/">Ahmad and Raashita</a> and is being developed at <a href="https://templated.co/license">BTH</a>.</p>
{{--            <p>If you want to use services just go to your Dashboard in right-side menu</p>--}}
            <a href="#one" class="button special scrolly">Get Started</a>
    </div>
</section>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div>
            <div class="box">
                <div class="image fit border-radius">
                    <img src="images/display.jpg" width="100" height="200" alt="" />
                </div>
                <div class="content">
                    <header class="align-center"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <h2>Go Productive</h2>
                        <p>Simplifying Lives</p>
                    </header>
                    <hr />
                    <p>"Procrastination is a thief of time". Procrastination is the action of delaying or postponing work. It is one of the qualities we all share in common. Excessive procrastination can disrupt our lives leaving us directionless. But with effective time management and scheduling the timely tasks, we can overcome procrastination.

Our device "GoPro" is specially designed and aimed to provide effective time management through a variety of features provided in the device along with access to it through the website from anywhere around the world.

The specialty of the device comes is, it can be used by all the age groups and it is secure with user authentication.</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style3">
    <div class="inner">
        <div id="flexgrid">
            <div>
                <header>
                    <h3>Todo Lists</h3>
                </header>
                <p>Here you can Manage your tasks</p>
                <ul class="actions">
                    <li><a href="#three" class="button special scrolly">Learn More</a></li>
                </ul>
            </div>
            <div>
                <header>
                    <h3>Pomodoro Timer</h3>
                </header>
                <p>let's you set time for certain task and to obtain it by setting target</p>
                <ul class="actions">
                    <li><a href="#three" class="button special scrolly">Learn More</a></li>
                </ul>
            </div>
            <div>
                <header>
                    <h3>Calendar & Events</h3>
                </header>
                <p>Let's you manage Events for your whole month or year as you like</p>
                <ul class="actions">
                    <li><a href="#three" class="button special scrolly">Learn More</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="inner">
        <div id="flexgrid">
            <div>
                <header>
                    <h3>Quote of The Day</h3>
                </header>
                <p>This service provides daily motivational quotes for web-interface as well as for our device</p>
                <ul class="actions">
                    <li><a href="#three" class="button special scrolly">Learn More</a></li>
                </ul>
            </div>
            <div>
                <header>
                    <h3>Health Care</h3>
                </header>
                <p>Here you can add prescription of your Medicines</p>
                <ul class="actions">
                    <li><a href="#three" class="button special scrolly">Learn More</a></li>
                </ul>
            </div>
            <div>
                <header>
                    <h3>Weather Forecast</h3>
                </header>
                <p>This function is also mainly for device, it displays the live weather of current area to our device</p>
                <ul class="actions">
                    <li><a href="#three" class="button special scrolly">Learn More</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
{{--                    <div class="image fit">--}}
{{--                        <img src="images/pic02.jpg" alt="" />--}}
{{--                    </div>--}}
                    <div class="content">
                        <header class="align-center">
                            <h2>To-Do List</h2>
                            <p>List down and manage your tasks here</p>
                        </header>
                        <hr />
                        <p>Click on "COMPLETE" to strike the task off your to-do list and click the reset button on the device.</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
{{--                    <div class="image fit">--}}
{{--                        <img src="images/pic03.jpg" alt="" />--}}
{{--                    </div>--}}
                    <div class="content">
                        <header class="align-center">
                            <h2>Events</h2>
                            <p>Know what's coming up next in your schedule.</p>
                        </header>
                        <hr />
                        <p>Add your important events or meetings here to display Up-Next in the device</p>
                    </div>
                </div>
            </div>
            
            

        </div>
    </div>
    
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
{{--                    <div class="image fit">--}}
{{--                        <img src="images/pic02.jpg" alt="" />--}}
{{--                    </div>--}}
                    <div class="content">
                        <header class="align-center">
                            <h2>Pomodoro Timer</h2>
                            <p>Plan and manage your time like a PRO with this simple technique</p>
                        </header>
                        <hr />
                        <p>The Pomodoro timer is by far one of the most effective ways to manage your time and get things done.

Initially the by clicking the start button the device, a timer for 25 minutes for work will start followed by a 5 minutes timer for the break.

Four repetitions of such a set is called one Pomodoro, which ensures with 2 hrs of productivity with utmost focus.</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
{{--                    <div class="image fit">--}}
{{--                        <img src="images/pic03.jpg" alt="" />--}}
{{--                    </div>--}}
                    <div class="content">
                        <header class="align-center">
                            <h2>Qoute of the Day</h2>
                            <!--<p>Short description</p>-->
                        </header>
                        <hr />
                        <!--<p>Brief explaining how to use it</p>-->
                    </div>
                </div>
            </div>
            
            

        </div>
    </div>
</section>

{{--<!-- Four -->--}}
{{--<section id="four" class="wrapper style3">--}}
{{--    <div class="inner">--}}

{{--        <header class="align-center">--}}
{{--            <h2>Morbi interdum mollis sapien</h2>--}}
{{--            <p>Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>--}}
{{--        </header>--}}

{{--    </div>--}}
{{--</section>--}}

<!-- Footer -->
<footer id="footer" class="wrapper">
    <div class="inner">
        <section>
            <div class="box">
                <div class="content">
                    <h2 class="align-center">Get in Touch</h2>
                    <hr />
                    <form action="#" method="post">
                        <div class="field half first">
                            <label for="name">Name</label>
                            <input name="name" id="name" type="text" placeholder="Name">
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="email" placeholder="Email">
                        </div>
                        <div class="field">
                            <label for="dept">Department</label>
                            <div class="select-wrapper">
                                <select name="dept" id="dept">
                                    <option value="">- Category -</option>
                                    <option value="1">Student</option>
                                    <option value="1">Employed</option>
                                    <option value="1">Home Maker</option>
                                    <option value="1">Aged(65+)</option>
                                </select>
                            </div>
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <ul class="actions align-center">
                            <li><input value="Send Message" class="button special" type="submit"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>
{{--        <div class="copyright">--}}
{{--            &copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>. Video <a href="http://coverr.co/">Coverr</a>.--}}
{{--        </div>--}}
    </div>
</footer>

@endsection
