<header id="site-header"
  class="banner sticky top-0 z-50 bg-white/95 backdrop-blur-sm shadow-sm transition-shadow duration-300">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between lg:h-20">

      {{-- Brand --}}
      <a class="brand flex shrink-0 items-center gap-2 text-xl font-extrabold tracking-tight text-gray-900 no-underline transition-opacity hover:opacity-80"
        href="{{ home_url('/') }}">
        @if (has_custom_logo())
          {!! get_custom_logo() !!}
        @else
          {!! $siteName !!}
        @endif
      </a>

      {{-- Desktop Navigation --}}
      @if (has_nav_menu('primary_navigation'))
            <nav class="nav-primary hidden lg:flex" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
              {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav flex items-center gap-1',
          'echo' => false,
          'depth' => 2,
          'fallback_cb' => false,
        ]) !!}
            </nav>
      @endif

      {{-- Mobile Toggle --}}
      <button id="nav-toggle" type="button"
        class="inline-flex size-10 items-center justify-center rounded-lg text-gray-500 transition-colors hover:bg-gray-100 hover:text-gray-900 lg:hidden"
        aria-expanded="false" aria-controls="nav-mobile" aria-label="{{ __('Toggle navigation', 'sage') }}">
        <svg id="icon-open" class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg id="icon-close" class="hidden size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

    </div>
  </div>

  {{-- Mobile Navigation --}}
  @if (has_nav_menu('primary_navigation'))
    <div id="nav-mobile" class="hidden border-t border-gray-100 lg:hidden">
      <div class="mx-auto max-w-7xl px-4 py-3 sm:px-6">
        {!! wp_nav_menu([
      'theme_location' => 'primary_navigation',
      'menu_class' => 'nav flex flex-col',
      'echo' => false,
      'depth' => 2,
      'fallback_cb' => false,
    ]) !!}
      </div>
    </div>
  @endif
</header>