<article @php(post_class('h-entry'))>

  {{-- Featured image full-width --}}
  @if (has_post_thumbnail())
    <div class="max-h-[480px] w-full overflow-hidden bg-gray-100">
      {!! get_the_post_thumbnail(null, 'full', ['class' => 'h-full w-full object-cover']) !!}
    </div>
  @endif

  <div class="mx-auto max-w-3xl px-4 py-12 sm:px-6">

    {{-- Category --}}
    @php($cats = get_the_category())
    @if ($cats)
      <span class="inline-flex items-center rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-700">
        {{ $cats[0]->name }}
      </span>
    @endif

    <header class="mt-4 space-y-4 border-b border-gray-100 pb-8">
      <h1 class="p-name text-4xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-5xl">
        {!! $title !!}
      </h1>
      @include('partials.entry-meta')
    </header>

    <div class="e-content prose prose-lg prose-gray mt-10 max-w-none
      prose-headings:font-bold prose-headings:tracking-tight
      prose-a:text-indigo-600 prose-a:no-underline hover:prose-a:underline
      prose-img:rounded-xl prose-img:shadow-md
      prose-blockquote:border-indigo-400 prose-blockquote:text-gray-600
      prose-code:rounded prose-code:bg-gray-100 prose-code:px-1.5 prose-code:py-0.5 prose-code:text-sm">
      @php(the_content())
    </div>

    @if ($pagination())
      <footer class="mt-10 border-t border-gray-100 pt-6">
        <nav class="page-nav" aria-label="Page">
          {!! $pagination !!}
        </nav>
      </footer>
    @endif

    @php(comments_template())

  </div>
</article>