@extends('layouts.app-layout')

@section('content')

<div class="container py-4">

    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="bi bi-arrow-repeat me-2"></i>
                        Update Migration Progress
                    </h5>
                </div>

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('borang.simpan') }}" method="POST">
                        @csrf

                        <!-- TEMP TEST FIELD -->
                        <div class="mb-3">
                            <label class="form-label">System ID (Test)</label>
                            <input
                                type="number"
                                name="system_id"
                                class="form-control"
                                placeholder="Enter system ID (example: 1)"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Update Note</label>
                            <textarea
                                name="update_note"
                                class="form-control"
                                rows="3"
                                placeholder="Enter progress update..."
                                required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control" required>
                                <option value="">Select Status</option>
                                <option value="Not Started">Not Started</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-accent">
                                <i class="bi bi-save me-1"></i>
                                Save Progress
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
