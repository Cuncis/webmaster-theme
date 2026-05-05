<footer class="content-info border-t border-gray-200 bg-gray-900 text-gray-300">

  {{-- Widget columns --}}
  @if (is_active_sidebar('footer-col-1') || is_active_sidebar('footer-col-2') || is_active_sidebar('footer-col-3') || is_active_sidebar('footer-col-4'))
  <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">

      @foreach (['footer-col-1', 'footer-col-2', 'footer-col-3', 'footer-col-4'] as $col)
      @if (is_active_sidebar($col))
      <div
        class="footer-col [&_.widget]:space-y-2 [&_a]:text-gray-400 [&_a]:transition-colors [&_a:hover]:text-white [&_ul]:space-y-2 [&_ul]:text-sm [&_p]:text-sm [&_p]:leading-relaxed">
        @php(dynamic_sidebar($col))
      </div>
      @endif
      @endforeach

    </div>
  </div>
  @endif

  {{-- Copyright bar --}}
  <div class="border-t border-gray-800">
    <div class="mx-auto max-w-7xl px-4 py-5 sm:px-6 lg:px-8">
      <p class="text-center text-xs text-gray-500">
        &copy; {{ date('Y') }} {{ get_bloginfo('name') }}. {{ __('All rights reserved.', 'sage') }}
      </p>
    </div>
  </div>

</footer>