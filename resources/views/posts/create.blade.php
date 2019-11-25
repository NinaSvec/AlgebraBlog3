@extends('layouts.master')

@section('content')

    <div>
        <div>
            <h3>Create new post</h3>
        </div>

        <hr>

        <div>
            <form action="{{ route('posts.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                </div>
            
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" cols="80" rows="10" >{{ old('body') }}</textarea>
                </div>
                <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="{{ route('users.index') }}" class="btn btn-info">Odustani</a>
                            <button type="submit" class="btn btn-primary" style="float:center">
                                {{ __('Dodaj') }}
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

@endsection