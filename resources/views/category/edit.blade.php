@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('category.update', $category->id) }}" method="post" class="my-3">
                    @method('put')
                    @csrf
                    <h3>Edit Category</h3>
                    <div class="my-3">
                        <label for="title">Category Title</label>
                        <input id="title" type="text" value="{{ old('title', $category->title) }}"
                            class="form-control
                        @error('title') is-invalid @enderror"
                            name="title">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Update Category</button>

                </form>
            </div>
        </div>
    </div>
@endsection
