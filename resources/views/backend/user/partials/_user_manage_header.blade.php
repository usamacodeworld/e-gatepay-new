<ul class="nav nav-pills bg-light rounded p-1 mb-2">

    @can('user-statistics-view')
        <li class="nav-item">
            <a class="nav-link {{ isActive('admin.user.manage', ['username' => $user->username, 'param' => 'statistics']) }}"
                href="{{ route('admin.user.manage', ['username' => $user->username, 'param' => 'statistics']) }}">
                <x-icon name="chart" height="18" width="18" /> {{ __('Statistics') }}
            </a>
        </li>
    @endcan

    @can('user-info-view')
        <li class="nav-item">
            <a class="nav-link {{ isActive('admin.user.manage', ['username' => $user->username, 'param' => 'info']) }}"
                href="{{ route('admin.user.manage', ['username' => $user->username, 'param' => 'info']) }}">
                <x-icon name="user-info" height="18" width="18" /> {{ __('Information') }}
            </a>
        </li>
    @endcan

    @can('user-transaction-view')
        <li class="nav-item">
            <a class="nav-link {{ isActive('admin.user.manage', ['username' => $user->username, 'param' => 'transactions']) }}"
                href="{{ route('admin.user.manage', ['username' => $user->username, 'param' => 'transactions']) }}">
                <x-icon name="transaction-3" height="18" width="18" /> {{ __('Transaction') }}
            </a>
        </li>
    @endcan

    @if ($user->isMerchant())
        @can('user-merchants-view')
            <li class="nav-item">
                <a class="nav-link {{ isActive('admin.user.manage', ['username' => $user->username, 'param' => 'merchants']) }}"
                    href="{{ route('admin.user.manage', ['username' => $user->username, 'param' => 'merchants']) }}">
                    <x-icon name="merchant" height="18" width="18" /> {{ __('Merchants') }}
                </a>
            </li>
        @endcan
    @endif

    @can('support-list')
        <li class="nav-item">
            <a class="nav-link {{ isActive('admin.user.manage', ['username' => $user->username, 'param' => 'tickets']) }}"
                href="{{ route('admin.user.manage', ['username' => $user->username, 'param' => 'tickets']) }}">
                <x-icon name="ticket-3" height="18" width="18" /> {{ __('Ticket') }}
            </a>
        </li>
    @endcan

    @can('user-activity-view')
        <li class="nav-item">
            <a class="nav-link {{ isActive('admin.user.manage', ['username' => $user->username, 'param' => 'activities']) }}"
                href="{{ route('admin.user.manage', ['username' => $user->username, 'param' => 'activities']) }}">
                <x-icon name="log" height="18" width="18" /> {{ __('Activity Log') }}
            </a>
        </li>
    @endcan

    @can('user-settlement-manage')
        <li class="nav-item">
            <a class="nav-link {{ isActive('admin.user.manage', ['username' => $user->username, 'param' => 'settlements']) }}"
                href="{{ route('admin.user.manage', ['username' => $user->username, 'param' => 'settlements']) }}">
                <x-icon name="log" height="18" width="18" /> {{ __('Settlements') }}
            </a>
        </li>
    @endcan

</ul>
