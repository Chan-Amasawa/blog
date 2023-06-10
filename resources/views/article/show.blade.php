@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8">
                <div class="mb-3">
                    <a href="{{ route('article.create') }}" class="btn btn-outline-secondary">Create Article</a>
                    <a href="{{ route('article.index') }}" class="btn btn-outline-secondary">Article List</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <div class="">
                            <span class="badge bg-secondary">{{ $article->category_id }}</span>
                        </div>
                        <p class="card-text small">{{ $article->description }}</p>
                        <p class="card-text m-0 text-black-50 small">Created At - {{ $article->created_at }}</p>
                        <p class="card-text text-black-50 small">Updated At - {{ $article->updated_at }}</p>
                    </div>
                    <a href="{{ route('article.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
