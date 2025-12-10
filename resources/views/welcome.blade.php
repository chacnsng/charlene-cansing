@extends('components.layout')

@section('content')

{{-- Hero Section - Minimal & Clean --}}
<section class="min-h-screen flex items-center bg-neutral-50">
  <div class="container mx-auto px-6 lg:px-12 py-20">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      
      {{-- Left: Large Profile Image --}}
      <div class="order-2 lg:order-1">
        <div class="relative">
          <img class="w-full h-auto object-cover rounded-sm shadow-sm" 
               alt="Aphrodite - IT Professional"
               src="{{ asset('images/portfolioprofile.jpeg') }}">
        </div>
      </div>

      {{-- Right: Hero Text - Simple & Direct --}}
      <div class="order-1 lg:order-2 space-y-8">
        <div class="space-y-4">
          <h1 class="text-6xl lg:text-7xl xl:text-8xl font-light text-gray-900 tracking-tight">
            Charlene Cansing
          </h1>
          <div class="w-16 h-0.5 bg-gray-900"></div>
          <p class="text-xl lg:text-2xl font-light text-gray-600 tracking-wide">
            IT Professional & Web Developer
          </p>
        </div>
        
        <p class="text-base lg:text-lg text-gray-700 leading-relaxed max-w-lg font-light">
          I create thoughtful digital experiences through clean code and user-centered design. 
          Passionate about building web applications that make a difference.
        </p>
        
        <div class="flex gap-6 pt-4">
          <a href="{{ url('/projects') }}">
            <button class="px-8 py-3 bg-gray-900 text-white text-sm tracking-widest uppercase hover:bg-gray-800 transition-colors duration-300">
              Projects
            </button>
          </a>
          <a href="{{ url('/contact') }}">
            <button class="px-8 py-3 border border-gray-900 text-gray-900 text-sm tracking-widest uppercase hover:bg-gray-900 hover:text-white transition-all duration-300">
              Contact
            </button>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>





@endsection