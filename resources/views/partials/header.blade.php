<header class="banner">
  <div class="container">
    <div class="header-nav-wrap d-none d-md-block">
      {{-- Desktop --}}
      <div class="nav_container d-flex justify-content-center">
        <nav class="nav-primary nav-primary-left d-inline-block">
          @if (has_nav_menu('primary_navigation_left'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation_left', 'menu_class' => 'nav-left']) !!}
          @endif
        </nav>
        <a class="header_logo text-center d-inline-block" href="/">LOGO</a>
        <nav class="nav-primary nav-primary-right d-inline-block">
          @if (has_nav_menu('primary_navigation_right'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation_right', 'menu_class' => 'nav-right']) !!}
          @endif
        </nav>
      </div>
    </div>
    {{-- Mobile --}}
    <div class="header-mobile-nav-wrap d-block d-md-none">
      <div class="mobile-nav-container d-flex justify-content-between">
        <input class="checkbox" type="checkbox"/>
        <a class="header_logo text-center d-inline-block" href="/">LOGO</a>
        <div class="hamburger-lines d-flex flex-column justify-content-between">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>
        <div class="mobile-menu-items d-flex flex-column">
          <nav class="nav-primary nav-primary-mobile d-inline-block">
            @if (has_nav_menu('primary_nav_mobile'))
              {!! wp_nav_menu(['theme_location' => 'primary_nav_mobile', 'menu_class' => 'nav-mobile']) !!}
            @endif
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
