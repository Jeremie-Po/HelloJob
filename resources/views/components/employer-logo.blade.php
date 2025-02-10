@props(['employer','width'=> 90])

{{--<img class='rounded-xl' src="https://picsum.photos/seed/{{ rand(0,10000) }}/{{ $width }}" alt=""/>--}}
{{--<img class='rounded-xl' src="{{ asset('storage/'.$employer->logo) }}" alt=""/>--}}
<img class="rounded-xl"
     src="{{ Str::startsWith($employer->logo, 'http') ? $employer->logo : asset('storage/' . $employer->logo) }}"
     alt="" width="{{Str::startsWith($employer->logo, 'http') ? null : $width}}">
