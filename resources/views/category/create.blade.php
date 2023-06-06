@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('category.store') }}" method="post" class="my-3">
                    @csrf
                    <h3>Create New Category</h3>
                    <div class="my-3">
                        <label for="title">Category Title</label>
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
                    <button class="btn btn-primary">Save category</button>

                </form>
            </div>
        </div>
    </div>
@endsection
