@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>User List</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Information</th>
                            <th>Control</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>
                                    {{ Str::limit($user->name, 20, '...') }}
                                    <br>
                                    <span class="small text-black-50">
                                        {{ Str::limit($user->email, 20, '...') }}
                                    </span>
                                </td>
                                <td>{{ $user->user_id }}</td>
                                <td>
                                    <p class="mb-1 small"><i class="bi bi-clock"></i>
                                        {{ $user->created_at->format('h:m a') }}</p>
                                    <p class="mb-0 small"><i class="bi bi-calendar">
                                        </i>{{ $user->created_at->format('d M Y') }}</p>
                                </td>
                                <td>
                                    <p class="mb-1 small"><i class="bi bi-clock"></i>
                                        {{ $user->updated_at->format('h:m a') }}</p>
                                    <p class="mb-0 small"><i class="bi bi-calendar">
                                        </i>{{ $user->updated_at->format('d M Y') }}</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $users->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endsection
