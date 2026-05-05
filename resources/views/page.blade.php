@extends('layouts.app')

@section('content')
<div class="mx-auto max-w-4xl px-4 py-10 sm:px-6 lg:px-8">
  @while(have_posts()) @php(the_post())
  <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100">
    @include('partials.page-header')
    <div class="px-8 py-10 lg:px-12">
      @includeFirst(['partials.content-page', 'partials.content'])
    </div>
  </div>
  @endwhile
</div>
@endsection