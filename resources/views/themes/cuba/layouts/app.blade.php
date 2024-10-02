@include('themes.cuba.partial.header')

<div class="container">
    <div class="wrap-grid">
        @include('themes.cuba.partial.left-bar')
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>

@include('themes.cuba.partial.footer')