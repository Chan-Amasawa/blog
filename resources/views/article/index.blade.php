@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Article List</h3>
                <div>
                    <a href="{{ route('article.create') }}" class="btn btn-outline-secondary">Create</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Article</th>
                            <th>Category</th>
                            <th>Owner</th>
                            <th>Control</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>
                                    {{ Str::limit($article->title, 20, '...') }}
                                    <br>
                                    <span class="small text-black-50">
                                        {{ Str::limit($article->description, 20, '...') }}
                                    </span>
                                </td>
                                <td>
                                    {{ $article->category_id }}
                                </td>
                                <td>{{ $article->user_id }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('article.show', $article->id) }}"
                                            class="btn btn-sm btn-outline-secondary">
                                            <i class="bi bi-info"></i>
                                        </a>
                                        @can('update', $article)
                                            <a href="{{ route('article.edit', $article->id) }}"
                                                class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                        @endcan
                                        @cannot('update', $article)
                                            <button disabled class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        @endcannot
                                        @can('delete', $article)
                                            <button form="form{{ $article->id }}" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        @endcan
                                        @cannot('update', $article)
                                            <button disabled class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        @endcannot
                                    </div>
                                    <form id="form{{ $article->id }}" class="d-inline-block"
                                        action="{{ route('article.destroy', $article->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                    </form>
                                </td>
                                <td>
                                    <p class="mb-1 small"><i class="bi bi-clock"></i>
                                        {{ $article->created_at->format('h:m a') }}</p>
                                    <p class="mb-0 small"><i class="bi bi-calendar">
                                        </i>{{ $article->created_at->format('d M Y') }}</p>
                                </td>
                                <td>
                                    <p class="mb-1 small"><i class="bi bi-clock"></i>
                                        {{ $article->updated_at->format('h:m a') }}</p>
                                    <p class="mb-0 small"><i class="bi bi-calendar">
                                        </i>{{ $article->updated_at->format('d M Y') }}</p>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center m-5 p-3">
                                    <p>There is no record</p>
                                    <a href="{{ route('article.create') }}" class="btn btn-sm btn-primary">Create
                                        Article</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $articles->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endsection
