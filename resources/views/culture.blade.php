@extends('components.layout')

@section('content')

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    
    {{-- Hallyu Hero Section --}}
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-5xl text-4xl mb-4 font-extrabold text-gray-900">
        Riding the Wave: <span class="text-red-600">Hallyu's</span> Global Impact
      </h1>
      <p class="mb-8 leading-relaxed text-lg text-gray-700">
        The **Korean Wave (Hallyu)** is more than just entertainment; it's a global phenomenon that has captivated millions. Explore the music, television, film, and fashion that define modern South Korea and continue to shape trends worldwide.
      </p>
      <div class="flex justify-center space-x-4">
        <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded-lg text-lg shadow-md transition duration-150">Dive into K-Pop</button>
        <button class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded-lg text-lg shadow-md transition duration-150">Binge K-Dramas</button>
      </div>
    </div>
    
    {{-- Placeholder Image for Culture --}}
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 rounded-lg overflow-hidden shadow-2xl">
      <img class="object-cover object-center w-full h-full" alt="Neon lights of Seoul and K-Pop aesthetics" src="https://placehold.co/720x500/FEE2E2/B91C1C?text=Hallyu+Global+Impact">
    </div>
  </div>
</section>

<div class="container px-5 py-12 mx-auto">
  <div class="text-center mb-10">
    <h2 class="sm:text-3xl text-2xl font-bold title-font text-gray-900 mb-2 border-b-2 border-red-500 inline-block pb-1">Cultural Pillars</h2>
  </div>
</div>

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-12 mx-auto">
    <div class="-my-8 divide-y-2 divide-gray-100">
      
      {{-- K-Pop Section --}}
      <div class="py-8 flex flex-wrap md:flex-nowrap items-center">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-bold title-font text-red-500">K-POP</span>
          <span class="mt-1 text-gray-500 text-sm">MUSIC & IDOLS</span>
        </div>
        <div class="md:flex-grow">
          <h3 class="text-2xl font-medium text-gray-900 title-font mb-2">The Rhythmic Powerhouse</h3>
          <p class="leading-relaxed">K-Pop is defined by its polished production, synchronized choreography, and powerful fan communities (**fandoms**). From stadium-filling acts to indie artists, the industry is known for its rigorous training systems and ability to blend diverse genres into a unique sound. Learn about the biggest groups, their music videos, and the cultural movements they inspire.</p>
          <a class="text-red-500 inline-flex items-center mt-4 cursor-pointer hover:text-red-700">
            Explore Artists
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

      {{-- K-Drama/Film Section --}}
      <div class="py-8 flex flex-wrap md:flex-nowrap items-center">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-bold title-font text-red-500">K-DRAMA & FILM</span>
          <span class="mt-1 text-gray-500 text-sm">STORYTELLING</span>
        </div>
        <div class="md:flex-grow">
          <h3 class="text-2xl font-medium text-gray-900 title-font mb-2">Captivating Narratives</h3>
          <p class="leading-relaxed">Korean dramas and films are celebrated worldwide for their high production value, compelling plots, and emotional depth, successfully crossing over to global streaming platforms. From romantic comedies to intense thrillers and historical epics (**Sageuk**), South Korea sets the bar for cinematic quality and innovative television.</p>
          <a class="text-red-500 inline-flex items-center mt-4 cursor-pointer hover:text-red-700">
            View Popular Shows
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

      {{-- Esports Section --}}
      <div class="py-8 flex flex-wrap md:flex-nowrap items-center">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-bold title-font text-red-500">ESPORTS</span>
          <span class="mt-1 text-gray-500 text-sm">GAMING CULTURE</span>
        </div>
        <div class="md:flex-grow">
          <h3 class="text-2xl font-medium text-gray-900 title-font mb-2">The Gaming Nation</h3>
          <p class="leading-relaxed">South Korea is considered the birthplace and epicenter of competitive video gaming, or **Esports**. With dedicated professional leagues, gaming houses, and public broadcasts, Esports is a significant cultural phenomenon. Explore the history of PC Bangs (Internet Cafés) and the teams dominating global tournaments.</p>
          <a class="text-red-500 inline-flex items-center mt-4 cursor-pointer hover:text-red-700">
            Meet the Teams
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection