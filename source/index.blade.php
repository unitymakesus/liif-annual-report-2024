@extends('_layouts.main')

@section('body')
  @include('_partials.header')
  <section class="bg-[#E5E5DD] pb-24">
    <div class="container">
      <div class="grid gap-8 lg:gap-16 lg:grid-cols-12">
        <div class="lg:col-span-6">
          <div class="grid grid-cols-2 gap-4 sm:gap-8">
            <figure>
              <img class="w-full h-full object-cover rounded-lg grayscale" src="{{ url('/assets/images/example.webp') }}" alt="">
            </figure>
            <figure class="col-start-1 row-start-2 max-w-[60%] ml-auto">
              <img class="w-full h-full object-cover rounded-lg grayscale" src="{{ url('/assets/images/example.webp') }}" alt="">
            </figure>
            <figure class="col-start-2 row-start-1 row-span-2">
              <img class="w-full h-full object-cover rounded-lg grayscale" src="{{ url('/assets/images/example.webp') }}" alt="">
            </figure>
          </div>
        </div>
        <div class="flex flex-col justify-center lg:col-span-6">
          <h2>Our Mission</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum expedita, ducimus ipsum est natus corrupti eius amet quam commodi obcaecati fugiat? Ipsum quo eligendi suscipit facilis quos sapiente, reprehenderit quasi.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white py-16">
    <div class="container">
      <div class="grid gap-4 lg:gap-8 lg:grid-cols-2">
        <div class="flex flex-col justify-center">
          <h2>Our History</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur illum nam iste, quis magnam in, non deserunt eligendi amet maiores tenetur dignissimos quas similique molestiae voluptas accusantium voluptates. Ullam, tenetur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur illum nam iste, quis magnam in, non deserunt eligendi amet maiores tenetur dignissimos quas similique molestiae voluptas accusantium voluptates. Ullam, tenetur.</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur illum nam iste, quis magnam in, non deserunt eligendi amet maiores tenetur dignissimos quas similique molestiae voluptas accusantium voluptates. Ullam, tenetur.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur illum nam iste, quis magnam in, non deserunt eligendi amet maiores tenetur dignissimos quas similique molestiae voluptas accusantium voluptates. Ullam, tenetur.</p>
        </div>
        <figure class="flex flex-col justify-center">
          <img class="rounded-lg grayscale" src="{{ url('/assets/images/example.webp') }}" alt="">
        </figure>
      </div>
    </div>
  </section>

  <section class="bg-[#E5E5DD] py-16">
    <div class="container">
      <h2 class="font-bold clamp-[text,4xl,8xl] leading-tight mb-4 md:mb-12 text-[#192239]">Leadership</h2>

      <div class="bg-[#192239] text-white p-8 lg:p-16 xl:p-24 rounded-xl sm:-mx-4 overflow-hidden">
        <div class="grid lg:gap-16 lg:grid-cols-12">
          <div class="lg:col-span-5">
            <figure class="mb-8">
              <img class="rounded-lg" src="{{ url('/assets/images/example.webp') }}" alt="">
              <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit.</figcaption>
            </figure>
          </div>
          <div class="lg:col-span-7">
            <blockquote class="relative font-bold text-xl md:text-2xl xl:text-3xl leading-normal md:leading-normal xl:leading-normal">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus repudiandae laboriosam impedit beatae, voluptatum unde!
            </blockquote>
            <x-call-to-action href="#">Call To Action</x-call-to-action>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-[#E5E5DD] py-16">
    <div class="container">
      <h2 class="font-bold clamp-[text,4xl,8xl] mb-4 md:mb-12 leading-tight text-[#1A3626]">Advancing Racial Equity <br/>
        <span class="text-[#498893]">(2020–2023)</span>
      </h2>
      <div class="bg-[#0D373C] text-[#92D0CE] p-8 lg:p-16 xl:py-16 xl:px-24 rounded-xl sm:-mx-4">
        <div class="tabs tabs--main">
          <div role="tablist" class="flex flex-row flex-wrap gap-2 mb-2 border-b border-solid border-current" aria-orientation="horizontal" aria-label="">
            <button role="tab" class="md:text-xl font-semibold py-2 px-4 md:py-4 md:px-8" id="tab-2023-goal" aria-selected="true" aria-controls="tabpanel-2023-goal">2023 Goal</button>
            <button role="tab" class="md:text-xl font-semibold py-2 px-4 md:py-4 md:px-8" id="tab-community" aria-selected="false" aria-controls="tabpanel-community">Community</button>
            <button role="tab" class="md:text-xl font-semibold py-2 px-4 md:py-4 md:px-8" id="tab-people" aria-selected="false" aria-controls="tabpanel-people">People</button>
            <button role="tab" class="md:text-xl font-semibold py-2 px-4 md:py-4 md:px-8" id="tab-affordable-housing" aria-selected="false" aria-controls="tabpanel-affordable-housing">Affordable Housing</button>
            <button role="tab" class="md:text-xl font-semibold py-2 px-4 md:py-4 md:px-8" id="tab-child-care" aria-selected="false" aria-controls="tabpanel-child-care">Child Care</button>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-2023-goal" aria-labelledby="tab-2023-goal">
            <h2 class="font-bold mb-4">2023 Goal</h2>
            <p class="text-lg md:text-xl max-w-[430px]">LIIF is driving $5 billion in investments over the next decade to advance racial equity.</p>
            <div class="h-16 relative overflow-hidden flex mx-0 border border-[#92D0CE] items-center">
              <span class="text-span absolute left-4 text-base sm:text-xl font-bold leading-none z-10" style="animation-play-state: running;">61% Funded</span>
              <span class="text-span absolute left-[45%] text-base sm:text-xl font-bold leading-none opacity-0 translate-x-(-4) animate-fade-in paused z-10" style="animation-play-state: running;">reached by June 30, 2023</span>
              <div class="w-full h-full absolute bg-[#92D0CE]"></div>
              <div id="bar" class="h-full bg-gradient-to-r from-[#0D373C] to-[#166670] relative w-0 transition-width duration-300 ease-out" style="width: 61%;"></div>
            </div>
            <div class="font-oswald font-bold text-right clamp-[text,7xl,9xl] leading-none mt-8">
              <sup>$</sup>5B
            </div>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-community" aria-labelledby="tab-community" hidden>
            <h2 class="font-bold">Community</h2>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-people" aria-labelledby="tab-people" hidden>
            <h2 class="font-bold">People</h2>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-affordable-housing" aria-labelledby="tab-affordable-housing" hidden>
            <h2 class="font-bold">Affordable Housing</h2>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-child-care" aria-labelledby="tab-child-care" hidden>
            <h2 class="font-bold">Child Care</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white py-16">
    <div class="container">
      <div class="grid gap-4 lg:gap-8 lg:grid-cols-2">
        <div>
          <h2 class="font-bold text-3xl leading-tight md:text-5xl md:leading-tight mb-8">40 Years Lending a Hand Bulding Stronger Communities Though Our Investments</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur illum nam iste, quis magnam in, non deserunt eligendi amet maiores tenetur dignissimos quas similique molestiae voluptas accusantium voluptates. Ullam, tenetur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur illum nam iste, quis magnam in, non deserunt eligendi amet maiores tenetur dignissimos quas similique molestiae voluptas accusantium voluptates. Ullam, tenetur.</p>
          <x-call-to-action href="#">Call To Action</x-call-to-action>
        </div>
        <figure>
          <img class="rounded-lg" src="{{ url('/assets/images/example.webp') }}" alt="">
        </figure>
      </div>
    </div>
  </section>

  <section class="bg-[#E5E5DD] py-24">
    <div class="container">
      <div class="grid gap-16 md:grid-cols-12 mb-12 md:mb-24">
        <div class="md:col-span-7">
          <div class="grid grid-cols-2 gap-4 sm:gap-8">
            <figure class="row-span-2">
              <img class="w-full h-full object-cover rounded-lg grayscale" src="{{ url('/assets/images/example.webp') }}" alt="">
            </figure>
            <figure>
              <img class="w-full h-full object-cover rounded-lg grayscale" src="{{ url('/assets/images/example.webp') }}" alt="">
            </figure>
            <figure class="col-start-2 max-w-[60%]">
              <img class="w-full h-full object-cover rounded-lg grayscale" src="{{ url('/assets/images/example.webp') }}" alt="">
            </figure>
          </div>
        </div>
        <div class="flex flex-col justify-center md:col-span-5">
          <h2 class="text-4xl">Affordable Housing: Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum expedita, ducimus ipsum est natus corrupti eius amet quam commodi obcaecati fugiat? Ipsum quo eligendi suscipit facilis quos sapiente, reprehenderit quasi.</p>
          <x-call-to-action href="#">Call To Action</x-call-to-action>
        </div>
      </div>
      <div class="grid gap-16 md:grid-cols-12 mb-12 md:mb-24">
        <div class="md:col-span-7">
          <div class="grid grid-cols-2 gap-4 sm:gap-8">
            <figure class="max-w-[60%] ml-auto">
              <img class="w-full h-full object-cover rounded-lg grayscale" src="{{ url('/assets/images/example.webp') }}" alt="">
            </figure>
            <figure class="col-start-1 row-start-2">
              <img class="w-full h-full object-cover rounded-lg grayscale" src="{{ url('/assets/images/example.webp') }}" alt="">
            </figure>
            <figure class="col-start-2 row-start-1 row-span-2">
              <img class="w-full h-full object-cover rounded-lg grayscale" src="{{ url('/assets/images/example.webp') }}" alt="">
            </figure>
          </div>
        </div>
        <div class="flex flex-col justify-center md:col-span-5">
          <h2 class="text-4xl">Early Care And Education: Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum expedita, ducimus ipsum est natus corrupti eius amet quam commodi obcaecati fugiat? Ipsum quo eligendi suscipit facilis quos sapiente, reprehenderit quasi.</p>
          <x-call-to-action href="#">Call To Action</x-call-to-action>
        </div>
      </div>
      <div class="grid gap-16 md:grid-cols-12">
        <div class="flex flex-col justify-center md:col-span-7">
          <h2 class="text-4xl">Impact-Led Lending (Irp)</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum expedita, ducimus ipsum est natus corrupti eius amet quam commodi obcaecati fugiat? Ipsum quo eligendi suscipit facilis quos sapiente, reprehenderit quasi.</p>
        </div>
      </div>

      <section class="splide" aria-label="" data-active-theme="dark-brown">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide" data-theme="dark-brown">
              <div class="grid lg:gap-16 lg:grid-cols-12">
                <div class="lg:col-span-5">
                  <figure class="mb-8">
                    <img class="rounded-lg" src="{{ url('/assets/images/example.webp') }}" alt="">
                    <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ratione, vitae dolore deleniti nam, dolores inventore excepturi repellat facere, nisi dolor laudantium laborum natus culpa. Dicta delectus obcaecati reiciendis esse?</figcaption>
                  </figure>
                </div>
                <div class="lg:col-span-7">
                  <blockquote class="relative font-bold text-xl md:text-2xl xl:text-3xl leading-normal md:leading-normal xl:leading-normal">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus repudiandae laboriosam impedit beatae, voluptatum unde! Quae quibusdam nostrum perspiciatis dolore accusantium vero tempora, recusandae id dignissimos, animi, unde laudantium doloribus.
                  </blockquote>
                </div>
              </div>
            </li>
            <li class="splide__slide" data-theme="dark-green">
              <div class="grid lg:gap-16 lg:grid-cols-12">
                <div class="lg:col-span-5">
                  <figure class="mb-8">
                    <img class="rounded-lg" src="{{ url('/assets/images/example.webp') }}" alt="">
                    <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit.</figcaption>
                  </figure>
                </div>
                <div class="lg:col-span-7">
                  <blockquote class="relative font-bold text-xl md:text-2xl xl:text-3xl leading-normal md:leading-normal xl:leading-normal">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus repudiandae laboriosam impedit beatae, voluptatum unde!
                  </blockquote>
                </div>
              </div>
            </li>
            <li class="splide__slide" data-theme="dark-blue">
              <div class="grid lg:gap-16 lg:grid-cols-12">
                <div class="lg:col-span-5">
                  <figure class="mb-8">
                    <img class="rounded-lg" src="{{ url('/assets/images/example.webp') }}" alt="">
                    <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ratione, vitae dolore deleniti nam, dolores inventore excepturi repellat facere, nisi dolor laudantium laborum natus culpa. Dicta delectus obcaecati reiciendis esse?</figcaption>
                  </figure>
                </div>
                <div class="lg:col-span-7">
                  <blockquote class="relative font-bold text-xl md:text-2xl xl:text-3xl leading-normal md:leading-normal xl:leading-normal text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus repudiandae laboriosam impedit beatae, voluptatum unde! Quae quibusdam nostrum perspiciatis dolore accusantium vero tempora, recusandae id dignissimos, animi, unde laudantium doloribus.
                  </blockquote>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </section>

  <section class="bg-white py-16">
    <div class="container !max-w-6xl">
      <h2>About Our Partnerships</h2>
      <div class="max-w-3xl">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur illum nam iste, quis magnam in, non deserunt eligendi amet maiores tenetur dignissimos quas similique molestiae voluptas accusantium voluptates. Ullam, tenetur.</p>
      </div>

      <div class="md:columns-2 gap-8 mt-8">
        <div class="md:break-inside-avoid mb-8">
          <h3 class="block font-bold text-xl mb-2">Black Developer Capital Initiative (BDCI)</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde officiis voluptatum eius dolorum consequuntur quaerat minus, numquam odio laudantium magni perspiciatis, consectetur suscipit quidem omnis labore at quo minima soluta!</p>
        </div>
        <div class="md:break-inside-avoid mb-8">
          <h3 class="block font-bold text-xl mb-2">Keeping Homes Affordable (KHA)</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores ullam porro nihil sunt possimus, dolor neque totam, doloribus culpa obcaecati quis optio quas aut. Consectetur ducimus perferendis dolores molestias incidunt!</p>
        </div>
        <div class="md:break-inside-avoid mb-8">
          <h3 class="block font-bold text-xl mb-2">Purpose Built Communities (PBC)</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet harum, ducimus magni id laborum dolore nam nostrum. Ipsum minima, velit esse tenetur alias molestiae assumenda, deserunt officiis, accusantium inventore soluta?</p>
        </div>
        <div class="md:break-inside-avoid mb-8">
          <h3 class="block font-bold text-xl mb-2">Growing Diverse Housing Developers (GDHD)</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem harum quidem nulla, numquam quo suscipit, quos natus aspernatur rem explicabo distinctio atque consequuntur reiciendis neque nostrum! Eveniet excepturi doloribus maiores?</p>
        </div>
        <div class="md:break-inside-avoid mb-8">
          <h3 class="block font-bold text-xl mb-2">Golden State Acquisition Fund (GSAF)</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime alias voluptatum veritatis reiciendis odit modi tempora, nostrum fugit, pariatur hic similique! Omnis eligendi exercitationem nostrum distinctio expedita, culpa quo impedit.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-[#E5E5DD] text-[#002B6E] py-16">
    <div class="container !max-w-6xl">
      <h2>Thanks to those who support our mission.</h2>
      <ul class="sm:columns-2 lg:columns-3 gap-4 border-t border-current pt-4">
        @foreach ($supporters as $supporter)
          <li class="mb-4">{{ strip_tags($supporter) }}</li>
        @endforeach
      </ul>
    </div>
  </section>

  <section class="bg-white text-[#093236] py-16">
    <div class="container !max-w-6xl">
      <h2>Consolidated Financials</h2>
      <div class="tabs tabs--dark-green">
        <div role="tablist" class="flex flex-row flex-wrap gap-2 mb-2 border-b border-solid border-current" aria-orientation="horizontal" aria-label="LIIF Consolidated Financials">
          <button role="tab" class="text-lg font-semibold py-1 px-4" id="tab-financial-position" aria-selected="true" aria-controls="tabpanel-financial-position">Financial Position</button>
          <button role="tab" class="text-lg font-semibold py-1 px-4" id="tab-financial-activities" aria-selected="false" aria-controls="tabpanel-financial-activities">Financial Activities</button>
        </div>
        <div tabindex="0" role="tabpanel" id="tabpanel-financial-position" aria-labelledby="tab-financial-position">
          <p class="mt-8">Per Fiscal Year 2024 audited financials (in millions)</p>
          <table>
            <thead>
              <tr class="table-headers">
                <th scope="row">Assets</th>
                <th scope="col" class="text-center">2023</th>
                <th scope="col" class="text-center">2022</th>
                <th scope="col" class="text-center">2021</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Cash and investments</th>
                <td>55</td>
                <td>90</td>
                <td>62</td>
              </tr>
              <tr>
                <th scope="row">Restricted cash</th>
                <td>38</td>
                <td>50</td>
                <td>51</td>
              </tr>
              <tr>
                <th scope="row">Notes receivable</th>
                <td>529</td>
                <td>448</td>
                <td>515</td>
              </tr>
              <tr>
                <th scope="row">Allowance for loan losses</th>
                <td>(21)</td>
                <td>(17)</td>
                <td>(18)</td>
              </tr>
              <tr>
                <th scope="row">Other assets</th>
                <td>56</td>
                <td>30</td>
                <td>30</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Total Assets</th>
                <td>657</td>
                <td>601</td>
                <td>640</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th scope="row" class="table-headers" colspan="4">Liabilities and Net Assets</th>
              </tr>
              <tr class="table-headers">
                <th scope="row">Liabilities</th>
                <th scope="col" class="text-center">2023</th>
                <th scope="col" class="text-center">2022</th>
                <th scope="col" class="text-center">2021</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Notes payable</th>
                <td>450</td>
                <td>391</td>
                <td>428</td>
              </tr>
              <tr>
                <th scope="row">Funds held in trust</th>
                <td>6</td>
                <td>8</td>
                <td>10</td>
              </tr>
              <tr>
                <th scope="row">Other liabilities</th>
                <td>36</td>
                <td>37</td>
                <td>44</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Total Liabilities</th>
                <td>439</td>
                <td>436</td>
                <td>482</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr class="table-headers">
                <th scope="row">Net Assets</th>
                <th scope="col" class="text-center">2023</th>
                <th scope="col" class="text-center">2022</th>
                <th scope="col" class="text-center">2021</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Noncontrolling interest in subsidiaries</th>
                <td>5</td>
                <td>4</td>
                <td>4</td>
              </tr>
              <tr>
                <th scope="row">Without donor restrictions</th>
                <td>105</td>
                <td>103</td>
                <td>101</td>
              </tr>
              <tr>
                <th scope="row">With donor restrictions</th>
                <td>54</td>
                <td>58</td>
                <td>53</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Total Net Assets</th>
                <td>164</td>
                <td>165</td>
                <td>158</td>
              </tr>
              <tr class="[&amp;>th]:border-none [&amp;>td]:border-none [&amp;>td]:font-bold">
                <th scope="row">Total Liabilities and Net Assets</th>
                <td>657</td>
                <td>601</td>
                <td>640</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div tabindex="0" role="tabpanel" id="tabpanel-financial-activities" aria-labelledby="tab-financial-activities" hidden>
          <table>
            <thead>
              <tr class="table-headers">
                <th scope="row">Assets</th>
                <th scope="col" class="text-center">2023</th>
                <th scope="col" class="text-center">2022</th>
                <th scope="col" class="text-center">2021</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Cash and investments</th>
                <td>55</td>
                <td>90</td>
                <td>62</td>
              </tr>
              <tr>
                <th scope="row">Restricted cash</th>
                <td>38</td>
                <td>50</td>
                <td>51</td>
              </tr>
              <tr>
                <th scope="row">Notes receivable</th>
                <td>529</td>
                <td>448</td>
                <td>515</td>
              </tr>
              <tr>
                <th scope="row">Allowance for loan losses</th>
                <td>(21)</td>
                <td>(17)</td>
                <td>(18)</td>
              </tr>
              <tr>
                <th scope="row">Other assets</th>
                <td>56</td>
                <td>30</td>
                <td>30</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Total Assets</th>
                <td>657</td>
                <td>601</td>
                <td>640</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr>
                <th scope="row" class="table-headers" colspan="4">Liabilities and Net Assets</th>
              </tr>
              <tr class="table-headers">
                <th scope="row">Liabilities</th>
                <th scope="col" class="text-center">2023</th>
                <th scope="col" class="text-center">2022</th>
                <th scope="col" class="text-center">2021</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Notes payable</th>
                <td>450</td>
                <td>391</td>
                <td>428</td>
              </tr>
              <tr>
                <th scope="row">Funds held in trust</th>
                <td>6</td>
                <td>8</td>
                <td>10</td>
              </tr>
              <tr>
                <th scope="row">Other liabilities</th>
                <td>36</td>
                <td>37</td>
                <td>44</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Total Liabilities</th>
                <td>439</td>
                <td>436</td>
                <td>482</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr class="table-headers">
                <th scope="row">Net Assets</th>
                <th scope="col" class="text-center">2023</th>
                <th scope="col" class="text-center">2022</th>
                <th scope="col" class="text-center">2021</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Noncontrolling interest in subsidiaries</th>
                <td>5</td>
                <td>4</td>
                <td>4</td>
              </tr>
              <tr>
                <th scope="row">Without donor restrictions</th>
                <td>105</td>
                <td>103</td>
                <td>101</td>
              </tr>
              <tr>
                <th scope="row">With donor restrictions</th>
                <td>54</td>
                <td>58</td>
                <td>53</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Total Net Assets</th>
                <td>164</td>
                <td>165</td>
                <td>158</td>
              </tr>
              <tr class="[&amp;>th]:border-none [&amp;>td]:border-none [&amp;>td]:font-bold">
                <th scope="row">Total Liabilities and Net Assets</th>
                <td>657</td>
                <td>601</td>
                <td>640</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-[#F2F6F9] text-[#132D77] py-16">
    <div class="container !max-w-6xl">
      <h2>Board of Directors & Leadership</h2>

      <div class="mb-16">
        <h3 class="font-sans font-semibold text-lg pb-1 mb-2 border-b border-solid border-current">Officers</h3>
        <div class="sm:columns-2 md:columns-3 gap-8 mb-8">
          @foreach ($officers as $officer)
            <div class="break-inside-avoid mb-4">
              <strong class="block">{{ $officer['name'] }}</strong>
              <span>{{ $officer['title'] }}</span>
            </div>
          @endforeach
        </div>
      </div>

      <div class="tabs tabs--dark-blue">
        <div role="tablist" class="flex flex-row flex-wrap gap-2 mb-2 border-b border-solid border-current" aria-orientation="horizontal" aria-label="LIIF Leadership">
          <button role="tab" class="text-lg font-semibold py-1 px-4" id="tab-directors" aria-selected="true" aria-controls="tabpanel-directors">Directors</button>
          <button role="tab" class="text-lg font-semibold py-1 px-4" id="tab-senior-staff" aria-selected="false" aria-controls="tabpanel-senior-staff">Senior Staff</button>
        </div>
        <div tabindex="0" role="tabpanel" id="tabpanel-directors" aria-labelledby="tab-directors">
          <div class="mb-16">
            <div class="sm:columns-2 md:columns-3 gap-8 mb-8">
              @foreach ($directors as $director)
                <div class="break-inside-avoid mb-4">
                  <strong class="block">{{ $director['name'] }}</strong>
                  <span>{{ $director['title'] }}</span>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <div tabindex="0" role="tabpanel" id="tabpanel-senior-staff" aria-labelledby="tab-senior-staff" hidden>
          <div class="mb-16">
            <div class="sm:columns-2 md:columns-3 gap-8 mb-8">
              @foreach ($senior_staff as $staff)
                <div class="break-inside-avoid mb-4">
                  <strong class="block">{{ $staff['name'] }}</strong>
                  <span>{{ $staff['title'] }}</span>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('_partials.footer')
  @include('_partials.icons')
@endsection
