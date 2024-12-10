@props(['quote', 'link', 'image'])

<div {{ $attributes->merge(['class' => 'p-8 lg:p-16 xl:p-24 rounded-lg sm:-mx-4 overflow-hidden']) }}>
  <div class="grid lg:gap-16 lg:grid-cols-12">
    <div class="lg:col-span-5">
      {!! $media !!}
    </div>
    <div class="lg:col-span-7">
      <blockquote class="relative font-bold text-xl md:text-2xl xl:text-3xl leading-normal md:leading-normal xl:leading-normal">
        {{ $slot }}
      </blockquote>
      @if (isset($link))
        {!! $link !!}
      @endif
    </div>
  </div>
</div>
