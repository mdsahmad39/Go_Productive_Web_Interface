@extends('layouts.app')

@section('content')
{{--    @if (session('status'))--}}
{{--        <div class="alert alert-success" role="alert">--}}
{{--            {{ session('status') }}--}}
{{--        </div>--}}
{{--    @endif--}}
<section id="banner" data-video="images/banner">
    <div class="inner">
        <h1>Welcome to your Tasks Manager</h1>
        <p>Here you can Add and Update your tasks.</p>
        <a href="#one" class="button special scrolly">Go to your Tasks</a>
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
                    <div class="card-header"><h2>New Task</h2></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('tasks.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" name="title" type="text" maxlength="255" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" autocomplete="off" />
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
                    <div class="card-header">Tasks</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>
                                        @if ($task->is_complete)
                                            <s>{{ $task->title }}</s>
                                        @else
                                            {{ $task->title }}
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        @if (! $task->is_complete)
                                            <form method="POST" action="{{ route('tasks.update', $task->id) }}">
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
