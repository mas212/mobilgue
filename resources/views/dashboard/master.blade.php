@include('dashboard.partials.meta')
@include('dashboard.partials.header')
@include('dashboard.partials.sidebar')
    <div class="page-wrapper">
        <div class="container-fluid">
             @yield('content')
        </div>
@include('dashboard.partials.footer')
