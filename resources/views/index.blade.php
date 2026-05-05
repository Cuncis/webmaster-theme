@extends('layouts.app')

@section('content')
  <div class="border-b border-gray-100 bg-white">
    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        {!! $title !!}
      </h1>
    </div>
  </div>

  <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">

  @if (!have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>
    {!! get_search_form(false) !!}
  @endif

  <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
    @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile
  </div>

  @if (get_the_posts_navigation())
    <nav class="mt-12 flex justify-center" aria-label="Posts">
      {!! get_the_posts_navigation([
      'prev_text' => '&larr; ' . __('Older posts', 'sage'),
      'next_text' => __('Newer posts', 'sage') . ' &rarr;',
    ]) !!}
    </nav>
  @endif

</div>
@endsection