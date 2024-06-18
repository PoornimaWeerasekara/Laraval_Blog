@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('post.store') }}">
                        @csrf  <!-- Include CSRF token -->
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Post Description</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Enter Post Description" rows="10" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>

                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
