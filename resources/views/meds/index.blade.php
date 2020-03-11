@extends('layouts.app')

@section('content')
{{--    @if (session('status'))--}}
{{--        <div class="alert alert-success" role="alert">--}}
{{--            {{ session('status') }}--}}
{{--        </div>--}}
{{--    @endif--}}
<section id="banner" data-video="images/banner">
    <div class="inner">
        <h1>Welcome to your Health Care Page</h1>
        <p>Here you can manage your medicines</p>
        <a href="#one" class="button special scrolly">Go to Medicine Log</a>
    </div>
</section>
{{--<section id="one" class="wrapper style2">--}}
{{--    <div class="inner">--}}
{{--        <h3>Your Tasks</h3>--}}
{{--        @if(count($tasks) > 0)--}}
{{--            <table class="table table-stripped">--}}
{{--                <tr>--}}
{{--                    <th>Device Name</th>--}}
{{--                    <th></th>--}}
{{--                    <th></th>--}}
{{--                </tr>--}}
{{--                @foreach($tasks as $task)--}}
{{--                    <tr>--}}
{{--                        <th>{{$task->title}}</th>--}}
{{--                        <th><a href="/posts/{{$post->body}}">Monitor</a></th>--}}
{{--                        <th></th>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--            </table>--}}
{{--            @foreach($tasks as $task)--}}
{{--                <div class="well">--}}
{{--                    <h3>{{$task->title}}</h3>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        @else--}}
{{--            <p>You have no Tasks</p>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--</section>--}}

<section id="one" class="wrapper style4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-new-task">
                    <div class="card-header"><h2>Add Medicine</h2></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('meds.store') }}">
                            @csrf
                            <div class="form-group">
                                <!--<label for="title">Event</label>-->
                                <input id="title" name="title" placeholder="Medicine Name"type="text" maxlength="255" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" autocomplete="off" />
                                <input id="date" name="date" placeholder="Enter Timings ( - - )" type="text" maxlength="255" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" autocomplete="off" />
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"><h2>Medicine&Timing</h2></div>

                    <div class="card-body">
                        <table class="table table-striped">
                            @foreach ($meds as $med)
                                <tr>
                                    <td>
                                        @if ($med->is_complete)
                                            <s>{{ $med->title }}</s>
                                        @else
                                            {{ $med->title}}, {{ $med->date}}
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        @if (! $med->is_complete)
                                            <form method="POST" action="{{ route('meds.update', $med->id) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-primary">Complete</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>

{{--                        {{ $tasks->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
