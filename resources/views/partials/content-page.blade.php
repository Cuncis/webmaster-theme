<div class="prose prose-gray max-w-none
  prose-headings:font-bold prose-headings:tracking-tight
  prose-a:text-indigo-600 prose-img:rounded-xl">
  @php(the_content())
</div>

@if ($pagination())
  <nav class="page-nav mt-8 border-t border-gray-100 pt-6" aria-label="Page">
    {!! $pagination !!}
  </nav>
@endif