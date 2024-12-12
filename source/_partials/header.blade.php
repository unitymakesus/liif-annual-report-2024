<header class="bg-[#E5E5DD] py-8">
  <div class="container">
    <div class="flex items-center justify-center gap-4">
      <img src="{{ url('/assets/images/logo-liif.svg') }}" class="w-full max-w-[75px] sm:max-w-[100px]" alt="Low Income Investement Fund" >
      <h1 class="text-lg sm:text-2xl font-bold">{{ $page->title }}</h1>
    </div>

    <div class="grid gap-8 lg:gap-16 lg:grid-cols-12 py-16">
      <div class="flex flex-col justify-center lg:col-span-6 text-right">
        <span class="block clamp-[text,2xl,4xl] mb-8">Investing in the Future</span>
        <span class="font-oswald clamp-[text,7xl,9xl] block leading-none font-bold">40 Years Strong</span>
      </div>
      <div class="lg:col-span-6">
        <div class="grid grid-cols-2 gap-4 sm:gap-8">
          <figure class="row-span-2 overlay overlay--green">
            <img class="lazy w-full h-full object-cover grayscale" data-src="{{ url('/assets/images/example.webp') }}" alt="">
          </figure>
          <figure class="max-w-[60%] overlay overlay--beige">
            <img class="lazy w-full h-full object-cover grayscale" data-src="{{ url('/assets/images/example.webp') }}" alt="">
          </figure>
          <figure class="col-start-2 overlay overlay--blue">
            <img class="lazy w-full h-full object-cover grayscale" data-src="{{ url('/assets/images/example.webp') }}" alt="">
          </figure>
        </div>
      </div>
    </div>
  </div>
</header>
