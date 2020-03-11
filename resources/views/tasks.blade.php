@extends('layouts.app')

@section('content')
    <section id="banner" data-video="images/banner">
        <div class="inner">
            <h1>Welcome to your Tasks list</h1>
            <p>Here you can Add, Edit your tasks</p>
            <a href="#one" class="button special scrolly">Go to Tasks</a>
        </div>
    </section>
    <section id="one" class="wrapper style4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

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

                        {{ $tasks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
