@extends('layouts.app-layout')

@section('content')
    <section class="py-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Users</h5>
                <a href="{{ url('/users/create') }}" class="btn btn-accent">New User</a>
            </div>
            @if (session('status'))
                <div class="alert alert-info">{{ session('status') }}</div>
            @endif
            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-dark table-borderless align-middle mb-0">
                            <thead>
                                <tr>
                                    <th class="px-3 py-3">ID</th>
                                    <th class="px-3 py-3">Name</th>
                                    <th class="px-3 py-3">Email</th>
                                    <th class="px-3 py-3">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td class="px-3 py-2">{{ $user->id }}</td>
                                        <td class="px-3 py-2">{{ $user->name }}</td>
                                        <td class="px-3 py-2">{{ $user->email }}</td>
                                        <td class="px-3 py-2"><span
                                                class="badge bg-accent text-dark">{{ $user->role }}</span></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="px-3 py-4 text-center" colspan="4">No users yet</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
