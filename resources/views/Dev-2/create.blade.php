@extends('layouts.app-layout')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card mt-3 mb-3 shadow-lg">
                <div class="card-header">Register System</div>

                <div class="card-body">
                    <form action="{{ route('systems.store') }}" method="POST">
                        @csrf

                        <!-- system name -->
                        <div class="mb-3">
                            <label for="system_name" class="form-label">System Name</label>
                            <input type="text"
                                   name="system_name"
                                   class="form-control @error('system_name') is-invalid @enderror"
                                   value="{{ old('system_name') }}"
                                   >
                            @error('system_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Agency -->
                        <div class="mb-3">
                            <label for="agency" class="form-label">Agency</label>
                            <input type="text"
                                   name="agency"
                                   class="form-control @error('agency') is-invalid @enderror"
                                   value="{{ old('agency') }}"
                                   >
                            @error('agency')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- technology -->
                        <div class="mb-3">
                            <label for="technolog" class="form-label">Technology</label>
                            <input type="text"
                                   name="technology"
                                   class="form-control @error('technology') is-invalid @enderror"
                                   value="{{ old('technology') }}"
                                   >
                            @error('technology')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Current Crypto -->
                        <div class="mb-3">
                            <label for="current_crypto" class="form-label">Current Crypto</label>
                            <input type="text"
                                   name="current_crypto"
                                   class="form-control @error('current_crypto') is-invalid @enderror"
                                   value="{{ old('current_crypto') }}"
                                   >
                            @error('current_crypto')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- pqc target -->
                        <div class="mb-3">
                            <label for="pqc_target" class="form-label">PQC Target</label>
                            <input type="text"
                                   name="pqc_target"
                                   class="form-control @error('pqc_target') is-invalid @enderror"
                                   value="{{ old('pqc_target') }}"
                                   >
                            @error('pqc_target')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- status -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text"
                                   name="status"
                                   class="form-control @error('status') is-invalid @enderror"
                                   value="{{ old('status') }}"
                                   >
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- target_date -->
                        <div class="mb-3">
                            <label for="target_date" class="form-label">Target Date</label>
                            <input type="text"
                                   name="target_date"
                                   class="form-control @error('target_date') is-invalid @enderror"
                                   value="{{ old('target_date') }}"
                                   >
                            @error('target_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- pic id -->
                        <div class="mb-3">
                            <label for="pic_id" class="form-label">Pic Id</label>
                            <input type="text"
                                   name="pic_id"
                                   class="form-control @error('pic_id') is-invalid @enderror"
                                   value="{{ old('pic_id') }}"
                                   >
                            @error('pic_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                        {{-- <a href="{{ route('order.index') }}" class="btn btn-secondary">
                            Cancel
                        </a> --}}

                    </form>
                </div>
            </div>

        </div>
    </div>

    <script>
        const productSelect = document.querySelector('select[name="product_id"]');
        const quantityInput = document.querySelector('input[name="quantity"]');
        const totalPriceInput = document.querySelector('input[name="total_price"]');

        function calculateTotalPrice() {
            const selectedOption = productSelect.options[productSelect.selectedIndex];
            const price = parseFloat(selectedOption.getAttribute('price')) || 0;
            const quantity = parseFloat(quantityInput.value) || 0;
            const totalPrice = price * quantity;

            totalPriceInput.value = totalPrice > 0 ? totalPrice.toFixed(2) : '';
        }

        productSelect.addEventListener('change', calculateTotalPrice);
        quantityInput.addEventListener('input', calculateTotalPrice);
    </script>

@endsection
