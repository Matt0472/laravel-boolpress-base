@include('chronicle_blog.layouts.partials._head')

    <header>
      @yield('header')
    </header>

    <main>
      @yield('main-content')
    </main>

    <footer>
      @yield('footer')
    </footer>

    @yield('scripts')
    
@include('chronicle_blog.layouts.partials._footer')