@extends('_layouts.main')

@section('body')
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCSTHJZW" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  @include('_partials.header')
  <section class="bg-[#E5E5DD] pb-24">
    <div class="container">
      <div class="grid gap-8 md:gap-16 md:grid-cols-12">
        <div class="md:col-span-6">
          <div class="grid grid-cols-2 gap-4 md:gap-6 lg:gap-8">
            <figure class="overlay overlay--blue">
              <img class="lazy w-full h-full object-cover grayscale" data-src="{{ url('/assets/images/mission1-c.webp') }}" alt="Neatly arranged toys on a shelf in a preschool classroom.">
            </figure>
            <figure class="col-start-1 row-start-2 max-w-[80%] ml-auto overlay overlay--blue">
              <img class="lazy w-full h-full object-cover grayscale" data-src="{{ url('/assets/images/mission2.webp') }}" alt="A brick apartment building with an inviting front entrance.">
            </figure>
            <figure class="col-start-2 row-start-1 row-span-2 overlay overlay--blue">
              <img class="lazy w-full h-full object-cover grayscale" data-src="{{ url('/assets/images/mission3.webp') }}" alt="A woman in a blue and yellow polka dot dress poses confidently in front of a sign for a childcare academy.">
            </figure>
          </div>
        </div>
        <div class="flex flex-col justify-center md:col-span-6">
          <h2 class="leading-tight">Our Mission and Vision</h2>
          <p>Everyone in the United States should benefit from living in a community of opportunity, equity and well-being. LIIF mobilizes capital and partners to achieve this vision for people and communities.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white py-16">
    <div class="container">
      <h2>Our History</h2>

      <div class="grid gap-4 lg:gap-8 lg:grid-cols-2">
        <div class="flex flex-col">
          <p>The Low Income Investment Fund (LIIF) is a leading community development financial institution (CDFI) with a storied history dating back four decades. Today, we remain in the vanguard of innovative capital solutions. LIIF is dedicated to supporting projects that have high social value but lack access to capital at traditional lenders. From our San Francisco headquarters — and with regional offices in New York City, Atlanta, Los Angeles and Washington, D.C. — LIIF invests to help create communities of opportunity, equity and well-being.</p>
          <p><strong>Since our founding, LIIF has invested more than $3.5 billion to serve 2.5 million people across the nation.</strong> We are steadfastly committed to increasing and preserving the supply of affordable homes, child care spaces and community facilities such as charter schools and federally qualified health centers (FQHCs). Our early care and education (ECE) strategies have expanded significantly, now comprising facilities fund management, capacity building and advisory services.</p>
          <p>With a commitment to deepen our impact in lending, we developed the Impact-Risk-Profitability (IRP) Framework, which triangulates impact, risk and profitability to strategically allocate capital. Via a set of tools, the IRP operationalizes racial equity into how LIIF approaches lending. Our goal is prioritizing financing that builds power and agency for borrowers — and their communities.</p>
        </div>
        <div class="flex flex-col">
          <figure class="overlay overlay--green">
            <img class="lazy rounded-lg grayscale" data-src="{{ url('/assets/images/our-history.webp') }}" alt="Partially visible illustrated timeline photo of LIIF.">
          </figure>
        </div>
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
              <img class="lazy rounded-lg" data-src="{{ url('/assets/images/feature-leadership.webp') }}" alt="Daniel A. Nissenbaum and Reymundo Ocañas talking together while walking down the street.">
              <figcaption class="text-[#A5AAB5]">Chief Executive Officer Daniel A. Nissenbaum (left) and Board Chair Reymundo Ocañas (right)</figcaption>
            </figure>
          </div>
          <div class="lg:col-span-7">
            <blockquote class="relative font-bold text-lg md:text-xl xl:text-2xl leading-normal md:leading-normal xl:leading-normal">
              <p>As LIIF celebrates its 40th year of service and commitment to improving underserved communities, we express heartfelt gratitude to our supporters from the private, philanthropic and public sectors who have played a crucial role in this incredible journey. Your essential partnership has empowered us to strengthen our position as a trusted partner with a proven track record of success.</p>
            </blockquote>
            <x-call-to-action href="https://www.liifund.org/perspective/annual-letter-from-our-ceo-and-board-chair-as-liif-celebrates-turning-40/">Read the full letter.</x-call-to-action>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-[#E5E5DD] py-16">
    <div class="container">
      <h2 class="font-bold clamp-[text,4xl,8xl] mb-4 md:mb-12 leading-tight text-[#1A3626]">Advancing Racial Equity</h2>
      <div class="bg-[#0D373C] text-[#92D0CE] p-8 lg:p-16 xl:py-16 xl:px-24 rounded-xl sm:-mx-4">
        <div class="tabs tabs--main">
          <div role="tablist" class="flex flex-row flex-wrap gap-2 mb-2 border-b border-solid border-current" aria-orientation="horizontal" aria-label="">
            <button role="tab" class="md:text-lg lg:text-xl font-semibold py-2 px-4 md:py-4 md:px-8" id="tab-2030-goal" aria-selected="true" aria-controls="tabpanel-2030-goal">2030 Goal</button>
            <button role="tab" class="md:text-lg lg:text-xl font-semibold py-2 px-4 md:py-4 md:px-8" id="tab-community" aria-selected="false" aria-controls="tabpanel-community">Community</button>
            <button role="tab" class="md:text-lg lg:text-xl font-semibold py-2 px-4 md:py-4 md:px-8" id="tab-people" aria-selected="false" aria-controls="tabpanel-people">People</button>
            <button role="tab" class="md:text-lg lg:text-xl font-semibold py-2 px-4 md:py-4 md:px-8" id="tab-affordable-housing" aria-selected="false" aria-controls="tabpanel-affordable-housing">Affordable Housing</button>
            <button role="tab" class="md:text-lg lg:text-xl font-semibold py-2 px-4 md:py-4 md:px-8" id="tab-child-care" aria-selected="false" aria-controls="tabpanel-child-care">Child Care</button>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-2030-goal" aria-labelledby="tab-2030-goal">
            <h2 class="font-bold mb-4">2030 Goal</h2>
            <p class="text-lg md:text-xl max-w-[450px]">LIIF is driving $5 billion in investments over a decade to advance racial equity (2020-2030).</p>
            <div class="h-16 relative overflow-hidden flex mx-0 border border-[#92D0CE] items-center">
              <span class="text-span absolute left-4 text-base sm:text-xl font-bold leading-none z-10"><span id="target">61</span>% Funded</span>
              <span class="text-span absolute left-[45%] text-base sm:text-xl font-bold leading-none opacity-0 translate-x-(-4) z-10">reached by June 30, 2023</span>
              <div class="w-full h-full absolute bg-[#92D0CE]"></div>
              <div id="bar" class="h-full bg-gradient-to-r from-[#0D373C] to-[#166670] relative w-0 transition-width duration-1000 ease-out"></div>
            </div>
            <div class="font-oswald font-bold text-right clamp-[text,7xl,9xl] leading-none mt-8" aria-hidden="true">
              <sup>$</sup>5b
            </div>
            <div class="sr-only">5 billion dollars</div>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-community" aria-labelledby="tab-community" hidden>
            <h2 class="font-bold">Community</h2>
            <div class="text-right mt-8">
              <div class="font-oswald font-bold clamp-[text,7xl,9xl] leading-none" aria-hidden="true">
                <sup>$</sup>338m
              </div>
              <div class="sr-only">338 million dollars</div>
              <div class="text-lg md:text-xl">total invested</div>
            </div>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-people" aria-labelledby="tab-people" hidden>
            <h2 class="font-bold">People</h2>
            <div class="text-right mt-8">
              <div class="font-oswald font-bold clamp-[text,7xl,9xl] leading-none" aria-hidden="true">
                59k
              </div>
              <div class="sr-only">59 thousand</div>
              <div class="text-lg md:text-xl">people served</div>
            </div>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-affordable-housing" aria-labelledby="tab-affordable-housing" hidden>
            <h2 class="font-bold">Affordable Housing</h2>
            <div class="text-right mt-8">
              <div class="font-oswald font-bold clamp-[text,7xl,9xl] leading-none" aria-hidden="true">
                5.8k
              </div>
              <div class="sr-only">5,800</div>
              <div class="text-lg md:text-xl">affordable housing units created or preserved</div>
            </div>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-child-care" aria-labelledby="tab-child-care" hidden>
            <h2 class="font-bold">Child Care</h2>
            <div class="text-right mt-8">
              <div class="font-oswald font-bold clamp-[text,7xl,9xl] leading-none" aria-hidden="true">
                43.5k
              </div>
              <div class="sr-only">43,500</div>
              <div class="text-lg md:text-xl">child care spaces positively impacted</div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-4 text-right">
        *Stats FY24 (July 1, 2023 - June 30, 2024)
      </div>
    </div>
  </section>

  <section class="bg-white py-16">
    <div class="container">
      <div class="grid gap-4 lg:gap-8 lg:grid-cols-2">
        <div>
          <h2 class="font-bold text-3xl leading-tight md:text-5xl md:leading-tight mb-8">Investing in the Future: 40 Years Strong</h2>
          <p>In 1984, the Low Income Investment Fund (LIIF) was created to address the growing challenges faced by underserved communities. Forty years later, LIIF stands as a national leader with a proud legacy of creating opportunities for millions of people and strengthening communities. Over the decades, LIIF has deployed $3.5+ billion in capital to support small businesses, create jobs and improve local economies while impacting the lives of 2.5 million people in historically excluded communities. Lasting, transformative and systemic change has occurred.</p>
          <p>This milestone is more than just a celebration of years past: It’s a testament to the power of strategic investments, resilience and our unwavering commitment to social justice. We remain steadfastly committed to this critical work.</p>
          <x-call-to-action href="https://www.liifund.org/perspective/investing-in-the-future-40-years-strong/">Read the full story.</x-call-to-action>
        </div>
        <figure>
          <img class="lazy rounded-lg" data-src="{{ url('/assets/images/anchor-story.webp') }}" alt="The LIIF team gathered together in a lobby.">
        </figure>
      </div>
    </div>
  </section>

  <section class="bg-[#E5E5DD] py-24">
    <div class="container">
      <div class="grid gap-16 lg:grid-cols-12 mb-12 md:mb-24">
        <div class="lg:col-span-7">
          <div class="grid grid-cols-2 gap-4 sm:gap-8">
            <figure class="row-span-2 overlay overlay--beige">
              <img class="lazy w-full h-full object-cover grayscale" data-src="{{ url('/assets/images/AH2.webp') }}" alt="A woman and a man pose together for a photo outside on a sunny day.">
            </figure>
            <figure class="overlay overlay--beige">
              <img class="lazy w-full h-full object-cover grayscale" data-src="{{ url('/assets/images/AH3.webp') }}" alt="A car passes by a vibrant building featuring a strikingly colorful glass facade.">
            </figure>
            <figure class="col-start-2 max-w-[60%] overlay overlay--beige">
              <img class="lazy w-full h-full object-cover grayscale" data-src="{{ url('/assets/images/AH1.webp') }}" alt="A group of people gathered in front of a modern, stylish apartment building.">
            </figure>
          </div>
        </div>
        <div class="flex flex-col justify-center lg:col-span-5 text-[#39382F]">
          <h2 class="text-3xl">Shaping the Future of Housing: LIIF’s Investments in Affordable Homes and Developers of Color</h2>
          <p>Our vision for affordable housing goes beyond simply deploying capital to developers for building or renovating properties; it’s about creating thriving, resilient communities where individuals and families — particularly those in Black, Latino and other communities of color — can access social and economic equity. These communities have long been excluded from opportunities to build generational wealth and secure stable housing, but through long-term, transformative investments, we are helping to change that narrative.</p>
          <x-call-to-action href="https://www.liifund.org/perspective/shaping-the-future-of-housing-liifs-investments-in-affordable-homes-and-developers-of-color/">Read the full story.</x-call-to-action>
        </div>
      </div>
      <div class="grid gap-16 lg:grid-cols-12 mb-12 md:mb-24">
        <div class="lg:col-span-7">
          <div class="grid grid-cols-2 gap-4 sm:gap-8">
            <figure class="max-w-[60%] ml-auto overlay overlay--green">
              <img class="lazy w-full h-full object-cover grayscale" data-src="{{ url('/assets/images/ECE1.webp') }}" alt="A playground filled with bright play equipment, situated in front of a building.">
            </figure>
            <figure class="col-start-1 row-start-2 overlay overlay--green">
              <img class="lazy w-full h-full object-cover grayscale" data-src="{{ url('/assets/images/ECE2.webp') }}" alt="A woman plays with two young children in a vibrant classroom, surrounded by toys and cheerful decorations.">
            </figure>
            <figure class="col-start-2 row-start-1 row-span-2 overlay overlay--green">
              <img class="lazy w-full h-full object-cover grayscale" data-src="{{ url('/assets/images/ECE3.webp') }}" alt="A man and woman hold a sign that says Thank You LIIF.">
            </figure>
          </div>
        </div>
        <div class="flex flex-col justify-center lg:col-span-5 text-[#0C393E]">
          <h2 class="text-3xl">LIIF’s Commitment to Equity and Sustainability of the Early Care and Education Ecosystem</h2>
          <p>At LIIF, we are committed to centering community voices as the foundation for driving sustainable change in the early care and education (ECE) sector. Providers, families and children each offer valuable insights into the challenges they face, and their experiences are integral to shaping our work. By listening to and prioritizing their voices, we gain a deeper understanding of the unique needs within communities, allowing us to more effectively address barriers and ensure our resources create long-term, sustainable solutions.</p>
          <x-call-to-action href="https://www.liifund.org/perspective/liifs-commitment-to-equity-and-sustainability-of-the-early-care-and-education-ecosystem/">Read the full story.</x-call-to-action>
        </div>
      </div>
      <div class="grid gap-16 lg:grid-cols-12 mb-4 text-[#16223B]">
        <div class="flex flex-col justify-center lg:col-span-7">
          <h2 class="text-3xl">Impact Risk-Profitability</h2>
          <p>In 2022, LIIF made a commitment to reimagine the traditional Five Cs of credit (capacity, capital, conditions, character and collateral). That led to the creation of our Impact-Risk-Profitability (IRP) Framework — LIIF's new model for racial equity in lending. We saw this change as necessary if, as a leading national CDFI, we were to most impactfully deploy capital into historically excluded communities. It was paramount to consider the endemic systemic inequities that bar developers of color from accessing capital from traditional lenders.</p>
          <p>Our Black Developer Capital Initiative (BDCI) exemplifies how LIIF drives investments into communities of color. Despite strong track records, many developers of color have been systemically denied access to capital that would enable them to build more homes, grow their small businesses and create a generational asset. The following are three stories showcasing how racial equity in lending is a game changer.</p>
        </div>
      </div>

      <section class="splide" aria-label="" data-active-theme="dark-brown">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide" data-theme="dark-brown">
              <div class="grid lg:gap-16 lg:grid-cols-12">
                <div class="lg:col-span-5">
                  <figure class="mb-8">
                    <img class="lazy rounded-lg" data-src="{{ url('/assets/images/alaing.webp') }}" alt="Portrait of Alexis Laing.">
                  </figure>
                </div>
                <div class="lg:col-span-7">
                  <blockquote class="relative font-bold text-lg md:text-xl xl:text-2xl leading-normal md:leading-normal xl:leading-normal">
                    <p>BDCI by LIIF has provided the financial foundation to secure a seat at the table with current and future development partners. The line of credit offers the flexibility to leverage additional funding sources and more effectively scale our developments. With this funding, we can be involved in larger, high-impact projects that would have previously been out of reach.</p>
                    <cite>— Alexis Laing, President and CEO, Laing Companies</cite>
                  </blockquote>
                </div>
              </div>
            </li>
            <li class="splide__slide" data-theme="dark-green">
              <div class="grid lg:gap-16 lg:grid-cols-12">
                <div class="lg:col-span-5">
                  <figure class="mb-8">
                    <img class="lazy rounded-lg" data-src="{{ url('/assets/images/miller.webp') }}" alt="Portrait of Mike Miller.">
                  </figure>
                </div>
                <div class="lg:col-span-7">
                  <blockquote class="relative font-bold text-lg md:text-xl xl:text-2xl leading-normal md:leading-normal xl:leading-normal">
                    <p>The BDCI line of credit represents more than just funding — it's a vital tool that allows BOLD to execute our vision with precision and confidence. LIIF's support has been crucial in helping us maintain momentum on our mission to urgently expand the supply of affordable and workforce housing across California.</p>
                    <cite>— Mike Miller, Founder and President, BOLD Communities</cite>
                  </blockquote>
                </div>
              </div>
            </li>
            <li class="splide__slide" data-theme="dark-blue">
              <div class="grid lg:gap-16 lg:grid-cols-12">
                <div class="lg:col-span-5">
                  <figure class="mb-8">
                    <img class="lazy rounded-lg" data-src="{{ url('/assets/images/detraharris.webp') }}" alt="Portrait of Detra Harris.">
                  </figure>
                </div>
                <div class="lg:col-span-7">
                  <blockquote class="relative font-bold text-lg md:text-xl xl:text-2xl leading-normal md:leading-normal xl:leading-normal text-white">
                    <p>I am grateful for programs such as BDCI, which helped me fill a funding gap for an affordable housing project at a critical phase of the development process. Unfortunately, barriers are a reality check for Black developers. Having supporters, such as LIIF, assists in bridging financial disparities for Black-owned real estate investment and development firms. My uncertainty turned into confidence. I thank you, LIIF, for believing in me and my project.</p>
                    <cite>— Detra Harris, Principal, Strive Real Estate LLC</cite>
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
      <h2 class="leading-tight">About Our Partnerships</h2>
      <div class="max-w-3xl">
        <p>We forge strong partnerships with funders, foundations, government agencies and policymakers. LIIF drives racial equity in lending that supports the production and preservation of affordable housing; positively impacts children's spaces in the early care and education sector; and creates community facilities in historically under-resourced communities. Some examples follow showcasing how these partnerships lead to innovative programs, national funds and initiatives.</p>
      </div>

      <div class="md:columns-2 gap-8 mt-8">
        <div class="md:break-inside-avoid mb-8">
          <h3 class="block font-bold text-xl mb-2">Black Developer Capital Initiative (BDCI)</h3>
          <p>Following the successful deployment of $20 million in its first round, LIIF launched a second $20 million round of the Black Developer Capital Initiative (BDCI), expanding to the West Coast. By FY24, BDCI lines of credit had financed the predevelopment of 40+ affordable housing projects expected to create or preserve over 4,000 affordable housing units in geographies from Los Angeles and New Orleans to Canton, Georgia and Newark, New Jersey. Partners include Arnold Ventures, Bank of America, Capital One, Community Investment Guaranty Pool, Ford Foundation, Goldman Sachs, MacKenzie Scott and Wells Fargo.</p>
        </div>
        <div class="md:break-inside-avoid mb-8">
          <h3 class="block font-bold text-xl mb-2">Keeping Homes Affordable (KHA)</h3>
          <p>Keeping Homes Affordable (KHA) is a national affordable housing preservation financing facility managed by LIIF. The fund’s goal is to provide acquisition financing for nonprofit and mission driven for-profit developers to acquire and preserve affordable multifamily projects. This partnership with Calvert Impact Capital and Arnold Ventures led to full deployment of the $50 million facility by the end of FY24, preserving over 730 units of affordable housing in communities across the United States.</p>
        </div>
        <div class="md:break-inside-avoid mb-8">
          <h3 class="block font-bold text-xl mb-2">Purpose Built Communities</h3>
          <p>Since 2020, LIIF and Purpose Built Communities have partnered to support progress around holistic community redevelopment plans by providing access to resources through a suite of capital tools paired with technical assistance. LIIF brings project-level lending, flexible, long-term capital (“Equity with a Twist” or “EQT”) and capital grants to support network members. JPMorgan Chase serves as funder for EQT.</p>
        </div>
        <div class="md:break-inside-avoid mb-8">
          <h3 class="block font-bold text-xl mb-2">Growing Diverse Housing Developers (GDHD)</h3>
          <p>The Growing Diverse Housing Developers (GDHD) program supports the scaling of BIPOC-led affordable housing developers across the nation, with a focus on California, Georgia, Texas, New York City, Philadelphia and Washington, D.C. GDHD has the goal of supporting at least 1,500 units of affordable housing by offering developers grants, innovative capital products and a community of practice. CDFIs Capital Impact Partners and Reinvestment Fund are partners in this work, with Wells Fargo serving as funder for the $30 million GDHD initiative.</p>
        </div>
        <div class="md:break-inside-avoid mb-8">
          <h3 class="block font-bold text-xl mb-2">Golden State Acquisition Fund</h3>
          <p>LIIF is the administrative agent, fund manager and an originator of a collaborative of eight CDFIs, in partnership with the California Department of Housing and Community Development, for the acquisition of affordable housing sites, both preservation and new construction. With money revolved in a 3-to-1 ratio, there has been nearly $540 million deployed over the fund’s 11 years to acquire and preserve more than 11,000 units of affordable housing across the state of California.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-[#E5E5DD] text-[#002B6E] py-16">
    <div class="container !max-w-6xl">
      <h2 class="leading-tight">Thanks to those who support our mission.</h2>
      <ul class="sm:columns-2 lg:columns-3 gap-4 border-t border-current pt-4">
        @foreach ($page->supporters as $supporter)
          <li class="mb-4">{{ strip_tags($supporter) }}</li>
        @endforeach
      </ul>
    </div>
  </section>

  <section class="bg-white text-[#093236] py-16">
    <div class="container !max-w-6xl">
      <h2 class="leading-tight">Consolidated Financial Statements</h2>
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
                <th scope="col" class="text-center">2024</th>
                <th scope="col" class="text-center">2023</th>
                <th scope="col" class="text-center">2022</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Cash and investments</th>
                <td>58</td>
                <td>55</td>
                <td>90</td>
              </tr>
              <tr>
                <th scope="row">Restricted cash</th>
                <td>66</td>
                <td>38</td>
                <td>50</td>
              </tr>
              <tr>
                <th scope="row">Notes receivable</th>
                <td>639</td>
                <td>529</td>
                <td>448</td>
              </tr>
              <tr>
                <th scope="row">Allowance for loan losses</th>
                <td>(13)</td>
                <td>(21)</td>
                <td>(17)</td>
              </tr>
              <tr>
                <th scope="row">Other assets</th>
                <td>39</td>
                <td>56</td>
                <td>30</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Total Assets</th>
                <td>789</td>
                <td>657</td>
                <td>601</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr class="table-headers">
                <th scope="row">Liabilities</th>
                <th scope="col" class="text-center">2024</th>
                <th scope="col" class="text-center">2023</th>
                <th scope="col" class="text-center">2022</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Notes payable</th>
                <td>519</td>
                <td>450</td>
                <td>391</td>
              </tr>
              <tr>
                <th scope="row">Funds held in trust</th>
                <td>29</td>
                <td>6</td>
                <td>8</td>
              </tr>
              <tr>
                <th scope="row">Other liabilities</th>
                <td>63</td>
                <td>36</td>
                <td>37</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Total Liabilities</th>
                <td>611</td>
                <td>493</td>
                <td>436</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr class="table-headers">
                <th scope="row">Net Assets</th>
                <th scope="col" class="text-center">2024</th>
                <th scope="col" class="text-center">2023</th>
                <th scope="col" class="text-center">2022</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Noncontrolling interest in subsidiaries</th>
                <td>4</td>
                <td>5</td>
                <td>4</td>
              </tr>
              <tr>
                <th scope="row">Without donor restrictions</th>
                <td>121</td>
                <td>105</td>
                <td>103</td>
              </tr>
              <tr>
                <th scope="row">With donor restrictions</th>
                <td>54</td>
                <td>54</td>
                <td>58</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Total Net Assets</th>
                <td>179</td>
                <td>164</td>
                <td>165</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Total Liabilities and Net Assets</th>
                <td>790</td>
                <td>657</td>
                <td>601</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div tabindex="0" role="tabpanel" id="tabpanel-financial-activities" aria-labelledby="tab-financial-activities" hidden>
          <p class="mt-8">Per Fiscal Year 2024 audited financials (in millions)</p>
          <table>
            <thead>
              <tr class="table-headers">
                <th scope="row">Revenue</th>
                <th scope="col" class="text-center">2024</th>
                <th scope="col" class="text-center">2023</th>
                <th scope="col" class="text-center">2022</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Net financing income</th>
                <td>18</td>
                <td>11</td>
                <td>17</td>
              </tr>
              <tr>
                <th scope="row">Syndication fees</th>
                <td>6</td>
                <td>9</td>
                <td>9</td>
              </tr>
              <tr>
                <th scope="row">Grants and contributions</th>
                <td>42</td>
                <td>70</td>
                <td>28</td>
              </tr>
              <tr>
                <th scope="row">Other</th>
                <td>11</td>
                <td>9</td>
                <td>4</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Total Revenue</th>
                <td>77</td>
                <td>97</td>
                <td>58</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr class="table-headers">
                <th scope="row">Expenses</th>
                <th scope="col" class="text-center">2024</th>
                <th scope="col" class="text-center">2023</th>
                <th scope="col" class="text-center">2022</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Program expenses</th>
                <td>57</td>
                <td>83</td>
                <td>37</td>
              </tr>
              <tr>
                <th scope="row">Supporting expenses</th>
                <td>17</td>
                <td>15</td>
                <td>13</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Total Expenses before noncontrolling interest</th>
                <td>74</td>
                <td>98</td>
                <td>50</td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr class="table-headers">
                <th scope="row">Change in Assets</th>
                <th scope="col" class="text-center">2024</th>
                <th scope="col" class="text-center">2023</th>
                <th scope="col" class="text-center">2022</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Change in assets without donor restriction</th>
                <td>15</td>
                <td>3</td>
                <td>3</td>
              </tr>
              <tr>
                <th scope="row">Change in assets with donor restriction</th>
                <td>(1)</td>
                <td>(4)</td>
                <td>5</td>
              </tr>
              <tr class="total-row">
                <th scope="row">Change in total net assets</th>
                <td>14</td>
                <td>(1)</td>
                <td>8</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-[#F2F6F9] text-[#132D77] py-16">
    <div class="container !max-w-6xl">
      <h2 class="leading-tight">Board of Directors & Leadership</h2>

      <div class="mb-16">
        <h3 class="font-sans font-semibold text-lg pb-1 mb-2 border-b border-solid border-current">Officers</h3>
        <div class="sm:columns-2 md:columns-3 gap-8 mb-8">
          @foreach ($page->officers as $officer)
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
              @foreach ($page->directors as $director)
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
              @foreach ($page->senior_staff as $staff)
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
