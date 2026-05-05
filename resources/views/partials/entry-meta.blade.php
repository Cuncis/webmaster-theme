<div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-sm text-gray-500">
  <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}"
    class="p-author h-card flex items-center gap-1.5 font-medium text-gray-700 transition-colors hover:text-gray-900">
    {!! get_avatar(get_the_author_meta('ID'), 24, '', '', ['class' => 'rounded-full']) !!}
    {{ get_the_author() }}
  </a>
  <span aria-hidden="true">&middot;</span>
  <time class="dt-published" datetime="{{ get_post_time('c', true) }}">
    {{ get_the_date() }}
  </time>
</div>