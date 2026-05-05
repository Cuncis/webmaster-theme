@props([
    'level' => 2,
    'text' => null,
])
@php
    $tag = 'h' . max(1, min(6, (int) $level));
    $class = $attributes->merge(['class' => 'font-bold leading-tight tracking-tight'])->toHtml();
    $content = $text ?? $slot;
@endphp

{!! "<{$tag} {$class}>{$content}</{$tag}>" !!}
