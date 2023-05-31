@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $details->title }}</h5>
                        <p class="card-text small">{{ $details->description }}</p>
                        <p class="card-text m-0 text-black-50 small">Created At - {{ $details->created_at }}</p>
                        <p class="card-text text-black-50 small">Updated At - {{ $details->updated_at }}</p>
                    </div>
                    <a href="{{ route('article.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
