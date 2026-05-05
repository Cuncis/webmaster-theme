@props([
    'text' => null,
])
 
 <p {{ $attributes->merge(['class' => 'leading-relaxed text-gray-700']) }}>
  {!! $text ?? $slot !!}
</p>
