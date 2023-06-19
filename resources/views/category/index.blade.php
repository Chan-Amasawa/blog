@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Category List</h3>
                <div>
                    <a href="{{ route('category.create') }}" class="btn btn-outline-secondary">Create</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Owner</th>
                            <th>Control</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>
                                    {{ Str::limit($category->title, 20, '...') }}
                                    <br>
                                    <span class="small text-black-50">
                                        {{ Str::limit($category->description, 20, '...') }}
                                    </span>
                                </td>
                                <td>{{ $category->user_id }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('category.edit', $category->id) }}"
                                            class="btn btn-sm btn-outline-secondary">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <button form="form{{ $category->id }}" class="btn btn-sm btn-outline-secondary">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </div>
                                    <form id="form{{ $category->id }}" class="d-inline-block"
                                        action="{{ route('category.destroy', $category->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                    </form>
                                </td>
                                <td>
                                    <p class="mb-1 small"><i class="bi bi-clock"></i>
                                        {{ $category->created_at->format('h:m a') }}</p>
                                    <p class="mb-0 small"><i class="bi bi-calendar">
                                        </i>{{ $category->created_at->format('d M Y') }}</p>
                                </td>
                                <td>
                                    <p class="mb-1 small"><i class="bi bi-clock"></i>
                                        {{ $category->updated_at->format('h:m a') }}</p>
                                    <p class="mb-0 small"><i class="bi bi-calendar">
                                        </i>{{ $category->updated_at->format('d M Y') }}</p>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center m-5 p-3">
                                    <p>There is no record</p>
                                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary">Create
                                        category</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
