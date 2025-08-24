@extends('backend.user.manage')

@section('user_manage_content')
    <div class="row">
        {{-- Settlements Card --}}
        <div class="col-12 mt-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body px-0">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title fw-semibold text-capitalize mb-0 text-primary">
                            <i class="fa fa-wallet me-2"></i>Settlements
                        </h5>
                        <button type="button" class="btn btn-primary shadow" id="toggleSettlementForm"
                            {{ !$user->payable_amount || $user->payable_amount <= 0 ? 'disabled' : '' }}>
                            <x-icon name="plus" height="18" /> Add Settlement
                        </button>
                    </div>

                    {{-- Add Settlement Form --}}
                    <div id="settlementFormWrapper" class="card border-primary shadow-sm mb-4"
                        style="display: {{ $errors->any() ? 'block' : 'none' }};">
                        <div class="card-body">
                            <form action="{{ route('admin.user.manage.settlement.store') }}" method="POST"
                                enctype="multipart/form-data" id="settlementForm">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                @php
                                    $merchant = \App\Models\Merchant::where('user_id', $user->id)->first();
                                @endphp

                                @if ($merchant)
                                    <input type="hidden" name="merchant_id" value="{{ $merchant->id }}">
                                @else
                                    <input type="hidden" name="merchant_id" value="">
                                @endif


                                {{-- Payable Amount Alert --}}
                                <div class="alert alert-info fw-semibold d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fa fa-money-bill-wave me-2"></i>
                                        {{ $user->payable_amount && $user->payable_amount > 0
                                            ? 'Payable Amount: $' . number_format($user->payable_amount, 2)
                                            : 'No payable amount available.' }}
                                    </div>
                                    @if (!$user->payable_amount || $user->payable_amount <= 0)
                                        <span class="badge bg-danger px-3 py-2">Cannot request settlement</span>
                                    @endif
                                </div>

                                {{-- Settlement Details --}}
                                <h6 class="fw-bold text-uppercase text-primary border-bottom pb-2 mb-3">Settlement Details
                                </h6>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Settlement Type</label>
                                        <select name="settlement_type" class="form-control border-primary"
                                            {{ !$user->payable_amount || $user->payable_amount <= 0 ? 'disabled' : '' }}>
                                            <option value="manual"
                                                {{ old('settlement_type') == 'manual' ? 'selected' : '' }}>Manual</option>
                                            <option value="automatic"
                                                {{ old('settlement_type') == 'automatic' ? 'selected' : '' }}>Automatic
                                            </option>
                                        </select>
                                        @error('settlement_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Settlement Method</label>
                                        <select name="settlement_method" class="form-control border-primary"
                                            {{ !$user->payable_amount || $user->payable_amount <= 0 ? 'disabled' : '' }}>
                                            <option value="bank_transfer"
                                                {{ old('settlement_method') == 'bank_transfer' ? 'selected' : '' }}>Bank
                                                Transfer</option>
                                            <option value="cheque"
                                                {{ old('settlement_method') == 'cheque' ? 'selected' : '' }}>Cheque
                                            </option>
                                            <option value="cash"
                                                {{ old('settlement_method') == 'cash' ? 'selected' : '' }}>Cash</option>
                                            <option value="wallet"
                                                {{ old('settlement_method') == 'wallet' ? 'selected' : '' }}>Wallet
                                            </option>
                                        </select>
                                        @error('settlement_method')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- Currency Section --}}
                                    <h6 class="fw-bold text-uppercase text-success border-bottom pb-2 mt-4 mb-3">Currency
                                        Information</h6>
                                    <div class="col-md-6">
                                        <label class="form-label">Base Currency</label>
                                        <input type="text" name="base_currency" class="form-control border-success"
                                            value="{{ old('base_currency', 'USD') }}" maxlength="3"
                                            {{ !$user->payable_amount || $user->payable_amount <= 0 ? 'disabled' : '' }}>
                                        @error('base_currency')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Settlement Currency</label>
                                        <input type="text" name="settlement_currency" class="form-control border-success"
                                            value="{{ old('settlement_currency', 'USD') }}" maxlength="3"
                                            {{ !$user->payable_amount || $user->payable_amount <= 0 ? 'disabled' : '' }}>
                                        @error('settlement_currency')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Exchange Rate</label>
                                        <input type="number" name="exchange_rate" class="form-control border-success"
                                            step="0.000001" value="{{ old('exchange_rate', 1) }}"
                                            {{ !$user->payable_amount || $user->payable_amount <= 0 ? 'disabled' : '' }}>
                                        @error('exchange_rate')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Converted Amount</label>
                                        <input type="number" name="converted_amount" class="form-control border-success"
                                            step="0.01" value="{{ old('converted_amount') }}"
                                            {{ !$user->payable_amount || $user->payable_amount <= 0 ? 'disabled' : '' }}>
                                        @error('converted_amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- Amounts & Charges --}}
                                    <h6 class="fw-bold text-uppercase text-danger border-bottom pb-2 mt-4 mb-3">Amount &
                                        Charges</h6>
                                    <div class="col-md-6">
                                        <label class="form-label">Gross Amount</label>
                                        <input type="number" name="gross_amount" id="gross_amount"
                                            class="form-control border border-danger shadow-sm" step="0.01"
                                            value="{{ old('gross_amount') }}"
                                            {{ !$user->payable_amount || $user->payable_amount <= 0 ? 'disabled' : '' }}>
                                        @error('gross_amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Tax (%)</label>
                                        <input type="number" name="tax_percentage" id="tax_percentage"
                                            class="form-control border border-warning shadow-sm" step="0.01"
                                            value="{{ old('tax_percentage') }}"
                                            {{ !$user->payable_amount || $user->payable_amount <= 0 ? 'disabled' : '' }}>
                                        @error('tax_percentage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Rolling Balance (%)</label>
                                        <input type="number" name="rolling_balance_percentage"
                                            id="rolling_balance_percentage"
                                            class="form-control border border-warning shadow-sm" step="0.01"
                                            value="{{ old('rolling_balance_percentage') }}"
                                            {{ !$user->payable_amount || $user->payable_amount <= 0 ? 'disabled' : '' }}>
                                        @error('rolling_balance_percentage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Gateway Fee (%)</label>
                                        <input type="number" name="gateway_fee_percentage" id="gateway_fee_percentage"
                                            class="form-control border border-warning shadow-sm" step="0.01"
                                            value="{{ old('gateway_fee_percentage') }}"
                                            {{ !$user->payable_amount || $user->payable_amount <= 0 ? 'disabled' : '' }}>
                                        @error('gateway_fee_percentage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-success">Net Amount</label>
                                        <input type="text" id="net_amount" name="net_amount"
                                            class="form-control border border-success fw-bold text-success"
                                            value="{{ old('net_amount') }}" readonly>
                                        <small id="netAmountError" class="text-danger d-none"></small>
                                    </div>

                                    {{-- Payment Receipt --}}
                                    <div class="col-md-6">
                                        <label class="form-label">Payment Receipts</label>
                                        <input type="file" name="payment_receipts[]"
                                            class="form-control border border-primary" multiple
                                            accept="image/*,application/pdf">
                                        @error('payment_receipts')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Status</label>
                                        <select name="status" class="form-control border-primary">
                                            <option value="pending" selected>Pending</option>
                                            <option value="processing">Processing</option>
                                            <option value="approved">Approved</option>
                                            <option value="paid">Paid</option>
                                            <option value="decline">Decline</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- Remarks --}}
                                    <div class="col-12">
                                        <label class="form-label">Remarks / Notes</label>
                                        <textarea name="remarks" class="form-control border-secondary" rows="3">{{ old('remarks') }}</textarea>
                                        @error('remarks')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-end mt-4">
                                    <button type="button" class="btn btn-secondary me-2"
                                        id="cancelSettlementForm">Cancel</button>
                                    <button type="submit" class="btn btn-primary shadow" id="submitSettlementBtn"
                                        {{ !$user->payable_amount || $user->payable_amount <= 0 ? 'disabled' : '' }}>
                                        <x-icon name="plus" height="18" /> Add Settlement
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Settlements Table --}}
                    <div class="table-responsive shadow-sm mt-4">
                        <table class="table table-bordered table-hover">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th>Settlement ID</th>
                                    <th>Date</th>
                                    <th>Gross</th>
                                    <th>Tax</th>
                                    <th>Rolling Balance</th>
                                    <th>Gateway Fee</th>
                                    <th>Net</th>
                                    <th>Status</th>
                                    <th>Receipt</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($settlements as $settlement)
                                    <tr>
                                        <td>{{ $settlement->settlement_id }}</td>
                                        <td>{{ $settlement->settlement_date->format('d M Y') }}</td>
                                        <td class="text-primary fw-semibold">
                                            ${{ number_format($settlement->gross_amount, 2) }}</td>
                                        <td class="text-danger">${{ number_format($settlement->tax_amount, 2) }}</td>
                                        <td class="text-danger">
                                            ${{ number_format($settlement->rolling_balance_amount, 2) }}</td>
                                        <td class="text-warning">${{ number_format($settlement->gateway_fee, 2) }}</td>
                                        <td><strong
                                                class="text-success">${{ number_format($settlement->net_amount, 2) }}</strong>
                                        </td>
                                        <td>
                                            <span
                                                class="badge bg-{{ $settlement->status === 'paid' ? 'success' : ($settlement->status === 'pending' ? 'warning' : 'danger') }}">
                                                {{ ucfirst($settlement->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            @if ($settlement->payment_receipts)
                                                @foreach (json_decode($settlement->payment_receipts) as $receipt)
                                                    <a href="{{ asset('storage/' . $receipt) }}" target="_blank"
                                                        class="badge bg-primary">View</a><br>
                                                @endforeach
                                            @else
                                                —
                                            @endif
                                        </td>
                                        <td>
                                            <select style="width: 150px;"
                                                class="form-select form-select-sm settlement-status"
                                                data-id="{{ $settlement->id }}"
                                                {{ $settlement->status !== 'pending' ? 'disabled' : '' }}>
                                                <option value="pending"
                                                    {{ $settlement->status == 'pending' ? 'selected' : '' }}>Pending
                                                </option>
                                                <option value="processing"
                                                    {{ $settlement->status == 'processing' ? 'selected' : '' }}>Processing
                                                </option>
                                                <option value="approved"
                                                    {{ $settlement->status == 'approved' ? 'selected' : '' }}>Approved
                                                </option>
                                                <option value="paid"
                                                    {{ $settlement->status == 'paid' ? 'selected' : '' }}>Paid</option>
                                                <option value="decline"
                                                    {{ $settlement->status == 'decline' ? 'selected' : '' }}>Decline
                                                </option>
                                            </select>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="12" class="text-center text-muted">No settlements found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const settlementFormWrapper = $('#settlementFormWrapper');
        const netAmountInput = $('#net_amount');
        const netAmountError = $('#netAmountError');
        const addSettlementBtn = $('button[type="submit"]');
        const payableAmount = parseFloat({{ $user->payable_amount ?? 0 }});

        // Numeric input restriction
        $('#gross_amount, #tax_percentage, #rolling_balance_percentage, #gateway_fee_percentage').on('input', function() {
            let value = $(this).val();
            if (!/^\d*\.?\d*$/.test(value)) {
                $(this).val(value.replace(/[^0-9.]/g, ''));
            }
            calculateNetAmount();
        });

        $('#settlementForm').on('submit', function(e) {
            const gross = parseFloat($('#gross_amount').val()) || 0;
            if (payableAmount <= 0) {
                e.preventDefault();
                alert("You cannot request a settlement because your payable amount is 0.");
                return false;
            }
            if (gross > payableAmount) {
                e.preventDefault();
                alert("Gross Amount cannot be greater than your Payable Amount ($" + payableAmount.toFixed(2) +
                    ").");
                return false;
            }
        });

        // Toggle settlement form
        $('#toggleSettlementForm').click(function() {
            settlementFormWrapper.slideToggle(300);
        });

        $('#cancelSettlementForm').click(function() {
            settlementFormWrapper.slideUp(300);
        });

        function calculateNetAmount() {
            const gross = parseFloat($('#gross_amount').val()) || 0;
            const tax = parseFloat($('#tax_percentage').val()) || 0;
            const vat = parseFloat($('#rolling_balance_percentage').val()) || 0;
            const gateway = parseFloat($('#gateway_fee_percentage').val()) || 0;

            resetValidation();

            if (gross <= 0) {
                showError("Gross amount must be greater than zero.");
                return;
            }
            if (gross > payableAmount) {
                showError("Gross Amount cannot exceed Payable Amount ($" + payableAmount.toFixed(2) + ").");
                return;
            }
            if (tax < 0 || vat < 0 || gateway < 0) {
                showError("Values cannot be negative.");
                return;
            }
            if ((tax + vat + gateway) > 100) {
                showError("Total percentage deductions cannot exceed 100%.");
                return;
            }

            const net = gross - (gross * (tax / 100)) - (gross * (vat / 100)) - (gross * (gateway / 100));
            if (net < 0) {
                showError("Net amount cannot be negative.");
                return;
            }

            netAmountInput.val(net.toFixed(2));
        }

        function resetValidation() {
            netAmountError.addClass('d-none').text('');
            netAmountInput.removeClass('is-invalid');
            addSettlementBtn.prop('disabled', false);
        }

        function showError(message) {
            netAmountError.removeClass('d-none').text(message);
            netAmountInput.addClass('is-invalid');
            addSettlementBtn.prop('disabled', true);
        }

        $(document).on('change', '.settlement-status', function() {
            let $select = $(this);
            let settlementId = $select.data('id');
            let newStatus = $select.val();
            let $row = $select.closest('tr');
            let $statusBadge = $row.find('td:nth-child(8) span');

            $.ajax({
                url: "{{ route('admin.settlement.update.status') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    settlement_id: settlementId,
                    status: newStatus
                },
                success: function(response) {
                    if (response.success) {
                        // Update badge class and text
                        let badgeClass = 'bg-warning';
                        if (newStatus === 'paid') badgeClass = 'bg-success';
                        else if (newStatus === 'approved') badgeClass = 'bg-primary';
                        else if (newStatus === 'processing') badgeClass = 'bg-info';
                        else if (newStatus === 'decline') badgeClass = 'bg-danger';
                        else badgeClass = 'bg-warning';

                        $statusBadge.removeClass().addClass(`badge ${badgeClass}`).text(newStatus
                            .charAt(0).toUpperCase() + newStatus.slice(1));

                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });

                        // Disable dropdown if status is no longer pending
                        if (newStatus !== 'pending') {
                            $select.prop('disabled', true);
                        }
                    } else {
                        Swal.fire({
                            title: 'Warning!',
                            text: response.message,
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Something went wrong.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    </script>
@endpush
