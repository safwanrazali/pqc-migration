@extends('layouts.app-layout')

@section('content')
    <section class="py-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="mb-0">Dashboard</h3>
                <span class="badge bg-accent text-dark">Live</span>
            </div>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Status</h6>
                            <div class="d-flex align-items-baseline gap-2">
                                <span class="text-accent fw-semibold">Healthy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Migrations</h6>
                            <div class="d-flex align-items-baseline gap-2">
                                <span class="fw-semibold">0 pending</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Alerts</h6>
                            <div class="d-flex align-items-baseline gap-2">
                                <span class="text-alert fw-semibold">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
