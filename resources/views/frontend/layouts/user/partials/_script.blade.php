{{-- =========================| All JavaScript Files Link |========================= --}}

{{-- Core Libraries --}}
<script src="{{ asset('general/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>

{{-- Essential Plugins --}}
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('general/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('general/js/moment.js') }}"></script>
<script src="{{ asset('general/js/daterangepicker.min.js') }}"></script>
<script src="{{ asset('general/js/datepicker.min.js') }}"></script>
<script src="{{ asset('general/js/clipboard.min.js') }}"></script>

{{-- Notifications & Helpers --}}
<script src="{{ asset('general/js/simple-notify.min.js') }}"></script>
<script src="{{ asset('general/js/helpers.js') }}"></script>

{{-- Theme Main Script --}}
<script src="{{ asset('frontend/js/dashboard-main.js') }}"></script>

{{-- DataTables JS --}}
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            pageLength: 15,
            lengthChange: true,
            searching: true,
            ordering: true,
            order: [[0, 'desc']], // Default order by first column descending
            columnDefs: [
                { orderable: false, targets: -1 } // Disable ordering on last column (Actions)
            ],
            language: {
                searchPlaceholder: "Search records..."
            }
        });
    });
</script>

{{-- Real-Time Notifications --}}
@include('general.notification_config._pusher_config')

{{-- Global Date Picker & Notify Config --}}
@include('general._notify_evs')
@include('general._date_range_picker')
@include('general._qr_code')

{{-- Page Specific Scripts --}}
@yield('scripts')
@stack('scripts')
