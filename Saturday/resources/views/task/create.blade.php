@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="title">
                    <h3>create task</h3>
                </div>
                <form method="POST" action="/api/task">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="title" value="{{ old('Title') }}" required autocomplete="title" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="description" value="{{ old('Description') }}" required autocomplete="description" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Priority') }}</label>
                        <div class="col-md-6">
                            <select class="form-select priority-select" name="priority" aria-label="Default select example">
                                <option selected>select priority</option>
                                <option value="low">low</option>
                                <option value="medium">medium</option>
                                <option value="high">high</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                        <div class="col-md-6">
                            <select class="form-select status-select" name="status" aria-label="Default select example">
                                <option selected>select status</option>
                                <option value="open">open</option>
                                <option value="close">close</option>
                                <option value="in progress">in progress</option>
                                <option value="blocked">blocked</option>
                                <option value="testing">testing</option>
                                <option value="done">done</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Assignee') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="assignee" value="{{ old('Assignee') }}" required autocomplete="assignee" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Author') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="author" value="{{ old('Author') }}" required autocomplete="author" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
