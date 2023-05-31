@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('article.update', $details->id) }}" method="post" class="my-3">
                    @method('put')
                    @csrf
                    <h3>Edit Article</h3>
                    <div class="my-3">
                        <label for="title">Article Title</label>
                        <input id="title" type="text" value="{{ $details->title }}"
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
                        @error('description') is-invalid @enderror">{{ $details->description }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary">Update Article</button>

                </form>
            </div>
        </div>
    </div>
@endsection
