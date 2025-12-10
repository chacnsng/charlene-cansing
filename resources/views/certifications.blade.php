@extends('components.layout')

@section('content')

{{-- Page Header --}}
<section class="py-24 bg-neutral-50 border-b border-gray-200">
  <div class="container mx-auto px-6 lg:px-12">
    <h1 class="text-5xl lg:text-6xl font-light text-gray-900 tracking-tight">
      Certifications
    </h1>
    <p class="text-gray-600 mt-6 max-w-2xl font-light leading-relaxed">
      A collection of my professional certifications showcasing my commitment to continuous learning
      and advancement in the field of technology and cybersecurity.
    </p>
  </div>
</section>

{{-- Certifications Grid --}}
<section class="py-24 bg-white">
  <div class="container mx-auto px-6 lg:px-12">

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-6xl">

      {{-- Certificate Items --}}
      @php
        $certs = [
          ['image' => 'Cisco - Network Defense.png', 'title' => 'Network Defense', 'provider' => 'Cisco - Networking Academy', 'year' => '2025'],
          ['image' => 'Cisco - Cyber Threat Management.png', 'title' => 'Cyber Threat Management', 'provider' => 'Cisco - Networking Academy', 'year' => '2025'],
          ['image' => 'Cisco - Introduction to Cybersecurity.png', 'title' => 'Introduction to Cybersecurity', 'provider' => 'Cisco - Networking Academy', 'year' => '2025'],
          ['image' => 'Great Learning - Programming Basics.png', 'title' => 'Programming Basics', 'provider' => 'Great Learning', 'year' => '2022'],
          ['image' => 'Course Bank - Designing Presentation Slide.jpg', 'title' => 'Designing Presentation Slide', 'provider' => 'Course Bank', 'year' => '2022'],
          ['image' => 'Course Bank - Microsoft Productivity Tool.jpg', 'title' => 'Microsoft Productivity Tool', 'provider' => 'Course Bank', 'year' => '2022'],
          ['image' => 'Course Bank - Navigating Google Workspace.jpg', 'title' => 'Navigating Google Workspace.jpg', 'provider' => 'Course Bank', 'year' => '2022'],
        ];
      @endphp

      @foreach ($certs as $cert)
      <div x-data="{ open: false }" class="group cursor-pointer">

        <div @click="open = true" class="aspect-[4/3] bg-gray-200 overflow-hidden mb-5 border border-gray-200 shadow-sm">
          <img 
            src="{{ asset('images/' . $cert['image']) }}" 
            alt="{{ $cert['title'] }} Certificate" 
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        </div>

        <h3 class="text-lg font-normal text-gray-900">{{ $cert['title'] }}</h3>
        <p class="text-sm text-gray-600 font-light">{{ $cert['provider'] }}</p>
        <p class="text-xs text-gray-500 mt-2 uppercase tracking-widest">{{ $cert['year'] }}</p>

        {{-- Modal --}}
        <div 
          x-show="open"
          x-transition
          @click="open = false"
          class="fixed inset-0 bg-black/80 z-50 flex items-center justify-center p-6"
        >
          <img 
            src="{{ asset('images/' . $cert['image']) }}" 
            class="max-h-[90vh] w-auto rounded-lg shadow-2xl border border-white/10"
          >
        </div>

      </div>
      @endforeach

    </div>

  </div>
</section>


{{-- CTA --}}
<section class="py-24 bg-neutral-50">
  <div class="container mx-auto px-6 lg:px-12 text-center">
    <h2 class="text-4xl lg:text-5xl font-light text-gray-900 tracking-tight mb-8">
      Want to verify my certifications?
    </h2>
    <a href="{{ url('/contact') }}">
      <button class="px-10 py-4 bg-gray-900 text-white text-sm tracking-widest uppercase hover:bg-gray-800 transition-colors duration-300">
        Contact Me
      </button>
    </a>
  </div>
</section>

@endsection
