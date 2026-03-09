{{-- Order Index / Sales List --}}

@extends('layouts.app-layout')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card mt-3 mb-3 shadow-lg">
                <div class="card-header">Asset List</div>

                <div class="card-body">
                    <div class="table-responsive">
<table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>System Name</th>
                                <th>Agency</th>
                                <th>Technology</th>
                                <th>Current Cryptography</th>
                                <th>Target PQC-Algorithm</th>
                                <th>Status</th>
                                <th>Target Date</th>
                                <th>PIC Id</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($systems as $systems)
                                <tr>
                                    <td>{{ $systems->system_name }}</td>
                                    <td>{{ $systems->agency }}</td>
                                    <td>{{ $systems->technology }}</td>
                                    <td>{{ $systems->current_crypto }}</td>
                                    <td>{{ $systems->pqc_target }}</td>
                                    <td>{{ $systems->status }}</td>
                                    <td>{{ $systems->target_date }}</td>
                                    <td>{{ $systems->pic_id }}</td>
                                    <td>
                                        <form action="{{ route('systems.edit', $systems ->id) }}"
                                            method="GET"
                                            style="display:inline-block;"
                                            onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('POST')
                                            <button type="submit"
                                                    class="btn btn-sm btn-warning">
                                                Edit
                                            </button>
                                        </form>
                                        
                                        <form action="{{ route('systems.delete', $systems->id) }}"
                                            method="POST"
                                            style="display:inline-block;"
                                            onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="btn btn-sm btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    
                                    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $orders->links() }} <!-- Pagination links --> --}}
                    
                    <form action="{{ route('systems.create') }}"
                        method="GET"
                        style="display:inline-block;">
                        @csrf
                        @method('POST')
                        <button type="submit"
                                class="btn btn-sm btn-primary">
                            Add
                        </button>
                    </form>

                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection