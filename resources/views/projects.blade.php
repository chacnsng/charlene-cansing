@extends('components.layout')

@section('content')

<section class="py-32 bg-white">
  <div class="container mx-auto px-6 lg:px-12">

    {{-- Page Header --}}
    <div class="mb-20 space-y-4">
      <h1 class="text-6xl font-light text-gray-900 tracking-tight">
        Projects
      </h1>
      <p class="text-lg text-gray-600 font-light max-w-2xl">
        A curated selection of the applications, systems, and designs I’ve created throughout my journey as an IT professional.
      </p>
    </div>

    {{-- Projects Grid --}}
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">

      {{-- Project Card 1 --}}
      <div class="group cursor-pointer">
        <div class="aspect-[4/3] bg-gray-200 overflow-hidden rounded-sm shadow-sm">
          <img src="{{ asset('images/IntellectConnect.jpg') }}" 
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        </div>
        <h3 class="text-xl font-normal text-gray-900 mt-4">Intellect Connect</h3>
        <p class="text-sm text-gray-600 font-light">A Web and Mobile-Based Tutoring and Learning Support Platform for Kindergarten and Elementary Students</p>
      </div>

      {{-- Project Card 1 --}}
      <div class="group cursor-pointer">
        <div class="aspect-[4/3] bg-gray-200 overflow-hidden rounded-sm shadow-sm">
          <img src="{{ asset('images/Gora.png') }}" 
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        </div>
        <h3 class="text-xl font-normal text-gray-900 mt-4">Gora</h3>
        <p class="text-sm text-gray-600 font-light">Your AI Travel Buddy</p>
      </div>

      {{-- Project Card 2 --}}
      <div class="group cursor-pointer">
        <div class="aspect-[4/3] bg-gray-200 overflow-hidden rounded-sm shadow-sm">
          <img src="{{ asset('images/Picsure.png') }}" 
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        </div>
        <h3 class="text-xl font-normal text-gray-900 mt-4">Picsure Photo Booth System</h3>
        <p class="text-sm text-gray-600 font-light">AI-Powered ID Generation</p>
      </div>

      {{-- Project Card 3 --}}
      <div class="group cursor-pointer">
        <div class="aspect-[4/3] bg-gray-200 overflow-hidden rounded-sm shadow-sm">
          <img src="{{ asset('images/Picture1.jpg') }}" 
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        </div>
        <h3 class="text-xl font-normal text-gray-900 mt-4">Higanteng Laagan Travel System</h3>
        <p class="text-sm text-gray-600 font-light">Tour Booking & Management Website</p>
      </div>

      {{-- Project Card 3 --}}
      <div class="group cursor-pointer">
        <div class="aspect-[4/3] bg-gray-200 overflow-hidden rounded-sm shadow-sm">
          <img src="{{ asset('images/JobSpotter.png') }}" 
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        </div>
        <h3 class="text-xl font-normal text-gray-900 mt-4">Job Spotter</h3>
        <p class="text-sm text-gray-600 font-light">Mobile Application</p>
      </div>

      {{-- Add more projects here --}}
      
    </div>

  </div>
</section>

@endsection
