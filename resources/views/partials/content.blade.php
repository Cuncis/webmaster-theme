<article @php(post_class('group flex flex-col overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 transition-all duration-200 hover:shadow-md hover:-translate-y-0.5'))>

  {{-- Thumbnail --}}
  @if (has_post_thumbnail())
    <a href="{{ get_permalink() }}" class="block aspect-video overflow-hidden bg-gray-100" tabindex="-1"
      aria-hidden="true">
      {!! get_the_post_thumbnail(null, 'medium_large', ['class' => 'h-full w-full object-cover transition-transform duration-300 group-hover:scale-105']) !!}
    </a>
  @else
    <div class="aspect-video bg-gradient-to-br from-indigo-50 to-gray-100"></div>
  @endif

  <div class="flex flex-1 flex-col gap-4 p-6">

    {{-- Category badge --}}
    @php($cats = get_the_category())
    @if ($cats)
      <span
        class="inline-flex w-fit items-center rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-700">
        {{ $cats[0]->name }}
      </span>
    @endif

    {{-- Title + excerpt --}}
    <div class="flex flex-1 flex-col gap-2">
      <h2 class="entry-title text-lg font-bold leading-snug text-gray-900">
        <a href="{{ get_permalink() }}" class="transition-colors hover:text-indigo-600">
          {!! $title !!}
        </a>
      </h2>
      <div class="entry-summary line-clamp-3 text-sm leading-relaxed text-gray-500">
        @php(the_excerpt())
      </div>
    </div>

    {{-- Meta --}}
    <div class="border-t border-gray-100 pt-4">
      @include('partials.entry-meta')
    </div>

  </div>
</article>