@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('article.update', $article->id) }}" method="post" class="my-3">
                    @method('put')
                    @csrf
                    <h3>Edit Article</h3>
                    <div class="my-3">
                        <label for="title">Article Title</label>
                        <input id="title" type="text" value="{{ old('title', $article->title) }}"
                            class="form-control
                        @error('title') is-invalid @enderror"
                            name="title">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="my-3">
                        <label class=" form-label" for="category">Choose Category</label>
                        <select id="category"
                            class="form-control
                        @error('category') is-invalid @enderror"
                            name="category">
                            @foreach (App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category', $article->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->title }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class=" my-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="7"
                            class="form-control
                        @error('description') is-invalid @enderror">{{ old('description', $article->description) }}</textarea>
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
