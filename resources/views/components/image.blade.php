@php
    $attrs = [
        'src' => '',
        'alt' => ''
    ];
@endphp
<img {{ $attributes->merge($attrs) }}>
