@extends ('layouts.in')

@section ('body')

<div class="box flex items-center px-5">
    <div class="nav nav-tabs flex overflow-auto whitespace-nowrap" role="tablist">
        <a href="{{ route('user.profile') }}" class="p-4 {{ ($ROUTE === 'user.profile') ? 'active' : '' }}" role="tab">{{ $row->name }}</a>

        @if ($telegram)
        <a href="{{ route('user.profile.telegram') }}" class="p-4 {{ ($ROUTE === 'user.profile.telegram') ? 'active' : '' }}" role="tab">{{ __('user-profile.telegram') }}</a>
        @endif

        <a href="{{ route('user.profile.user-session') }}" class="p-4 {{ ($ROUTE === 'user.profile.user-session') ? 'active' : '' }}" role="tab">{{ __('user-profile.sessions') }}</a>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane active" tab="tabpanel">
        @yield('content')
    </div>
</div>

@stop
