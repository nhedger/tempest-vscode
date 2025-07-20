<!-- Safe interpolation -->

My name is {{ $name }}


<!-- Unsafe interpolation -->

This is unsanitized: {!! $content !!}


<!-- Comment -->

{{-- This is a comment that won't be rendered --}}


<!-- Expression attributes -->

<span :class="$classes">Hello world</span>


<!-- Conditionals -->

<div>
    <span :if="$lang === 'fr'">Bonjour</span>
    <span :elseif="$lang === 'es'">Hola</span>
    <span :else>Hello</span>
</div>


<!-- Loop -->

<ul>
    <li :foreach="$this->links as $link"></li>
    <li :forelse>
        The menu is empty
    </li>
</ul>