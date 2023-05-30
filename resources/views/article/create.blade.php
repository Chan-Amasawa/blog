@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('article.store') }}" method="post" class="my-3">
                    @csrf
                    <h3>Create New Article</h3>
                    <div class="my-3">
                        <label for="title">Article Title</label>
                        <input id="title" type="text" value="{{ old('title') }}"
                            class="form-control
                        @error('title') is-invalid @enderror"
                            name="title">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class=" my-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="7"
                            class="form-control
                        @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary">Save Article</button>

                </form>
            </div>
        </div>
    </div>
@endsection
