@include('themes.classic.partial.header')

<div class="container">
    <div class="wrap-grid">
        @include('themes.classic.partial.left-bar')
            <div class="content">
                @yield('content')
            </div>
       </div>
</div>

@include('themes.classic.partial.footer')