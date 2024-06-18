@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 100%; padding: 15px; margin: auto;">
    <div class="row justify-content-center" style="display: flex; justify-content: center;">
        <div class="col-md-8" style="flex: 0 0 66.666667%; max-width: 66.666667%;">
            <div class="card" style="border: 1px solid #ddd; border-radius: 4px;">
                <div class="card-header" style="background-color: #f8f9fa; border-bottom: 1px solid #ddd; padding: 15px;">
                    {{ __('Dashboard') }}
                </div>

                <div class="card-body" style="padding: 15px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" style="padding: 10px; margin-bottom: 15px; border: 1px solid transparent; border-radius: 4px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success" role="alert" style="padding: 10px; margin-bottom: 15px; border: 1px solid transparent; border-radius: 4px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('posts.store') }}" style="margin-bottom: 0;">
                        @csrf <!-- Include CSRF token -->
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="title" style="display: block; margin-bottom: 5px;">Post Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post title" required style="display: block; width: 100%; padding: 10px; font-size: 14px; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 4px; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                        </div>
                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="description" style="display: block; margin-bottom: 5px;">Post Description</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Enter Post Description" rows="10" required style="display: block; width: 100%; padding: 10px; font-size: 14px; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 4px; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="color: #fff; background-color: #007bff; border-color: #007bff; display: inline-block; font-weight: 400; text-align: center; white-space: nowrap; vertical-align: middle; user-select: none; border: 1px solid transparent; padding: 10px 20px; font-size: 14px; line-height: 1.5; border-radius: 4px; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;">Post</button>
                    </form>

                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
