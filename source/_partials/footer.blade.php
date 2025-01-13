<footer class="bg-[#34332C] text-[#D3D3BE]">
  <div class="container py-16">
    <div class="grid gap-8 md:gap-12 md:grid-cols-12">
      <div class="md:col-span-3 md:flex md:justify-end">
        <img src="{{ url('/assets/images/logo-liif.svg') }}" class="w-full max-w-[100px]" alt="Low Income Investement Fund">
      </div>
      <div class="md:col-span-8">
        <h2 class="font-oswald text-3xl">Join us in our work building communities of opportunity, equity and well-being across the nation!</h2>
      </div>
      <div class="md:col-span-3">
        <span class="font-oswald clamp-[text,5xl,7xl] block leading-none font-bold md:text-right">40 Years Strong</span>
      </div>
      <div class="md:col-span-9">
        <div class="grid gap-4 lg:gap-8 lg:grid-cols-12">
          <div class="lg:col-span-8">
            <h2 class="text-2xl">Sign up for LIIF's monthly newsletter</h2>
            <form class="grid gap-2 grid-cols-6 mt-4" action="https://liifund.us13.list-manage.com/subscribe/post?u=a27878232e2220f64b0fb32cb&amp;id=2f9987be46" method="post">
              <label class="block col-span-6" for="mce-email">Your email</label>
              <input class="col-span-4 bg-white text-black !outline-white py-2 px-4" type="email" name="EMAIL" id="mce-email" required >
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_a27878232e2220f64b0fb32cb_1a7304a993" tabindex="-1" value="">
              </div>
              <input class="col-span-2 border-solid border-current border cursor-pointer py-2 px-4 hover:bg-[#D3D3BE] focus:bg-[#D3D3BE] hover:border-[#D3D3BE] focus:border-[#D3D3BE] hover:text-[#34332C] focus:text-[#34332C] transition-colors duration-300 w-full max-w-[150px] focus-visible:-outline-offset-4 uppercase" type="submit" value="Subscribe">
            </form>
          </div>
          <div class="lg:col-span-4 flex items-end">
            <ul class="flex justify-center gap-4 my-8 lg:my-0" aria-label="Follow Us On Social Media">
              @foreach ($page->social as $title => $url)
                <li class="leading-[0px]">
                  <a class="inline-block" href="{{ $url }}" target="_blank" rel="noopener noreferrer" aria-label="{{ ucwords($title) }}">
                    <svg class="fill-current hover:fill-white transition-all duration-300 ease-in-out w-10 h-10" aria-hidden="true">
                      <use xlink:href="#icon-{{ $title }}"/>
                    </svg>
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="lg:col-span-8">
            <div class="grid gap-4 grid-cols-2">
              <div class="leading-loose">
                Headquarters:<br>
                49 Stevenson St., Suite 300<br>
                San Francisco, CA 94105<br>
              </div>
              <div class="leading-loose">
                Other Regional Offices:<br>
                Los Angeles | New York<br>
                Washington, D.C. | Atlanta<br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-[#1F1E1A] text-center py-4">
    <div class="container">
      <span>Copyright © 2024 Low Income Investment Fund, 2024 Annual Impact Report</span>
    </div>
  </div>
</footer>
