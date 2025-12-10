<header class="bg-white border-b border-gray-200">
  <div class="container mx-auto px-6 lg:px-12">
    <div class="flex items-center justify-between py-6">
      
      {{-- Logo / Brand - Minimal Text --}}
      <a href="{{ url('/') }}" class="flex items-center group">
        <span class="text-2xl font-light text-gray-900 tracking-tight group-hover:text-gray-600 transition-colors duration-300">
          Charlene.
        </span>
      </a>

      {{-- Desktop Navigation --}}
      <nav class="hidden md:flex items-center space-x-12">
        <a href="{{ url('/') }}" 
           class="text-sm uppercase tracking-widest text-gray-700 hover:text-gray-900 transition-colors duration-300 {{ request()->is('/') ? 'text-gray-900' : '' }}">
          Home
        </a>
        <a href="{{ url('/about') }}" 
           class="text-sm uppercase tracking-widest text-gray-700 hover:text-gray-900 transition-colors duration-300 {{ request()->is('about') ? 'text-gray-900' : '' }}">
          About
        </a>
        <a href="{{ url('/projects') }}" 
           class="text-sm uppercase tracking-widest text-gray-700 hover:text-gray-900 transition-colors duration-300 {{ request()->is('projects') ? 'text-gray-900' : '' }}">
          Projects
        </a>
        <a href="{{ url('/certifications') }}" 
          class="text-sm uppercase tracking-widest text-gray-700 hover:text-gray-900 transition-colors duration-300 {{ request()->is('certifications') ? 'text-gray-900' : '' }}">
          Certifications
        </a>

        <a href="{{ url('/contact') }}" 
           class="text-sm uppercase tracking-widest text-gray-700 hover:text-gray-900 transition-colors duration-300 {{ request()->is('contact') ? 'text-gray-900' : '' }}">
          Contact
        </a>
        

      </nav>

      {{-- CTA Button --}}
      <div class="hidden md:block">
        <a href="{{ url('/contact') }}">
          <button class="px-6 py-2 bg-gray-900 text-white text-xs tracking-widest uppercase hover:bg-gray-800 transition-colors duration-300">
            Get In Touch
          </button>
        </a>
      </div>

      {{-- Mobile Menu Button --}}
      <button class="md:hidden text-gray-900" id="mobile-menu-button">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>

    {{-- Mobile Navigation Menu --}}
    <div class="hidden md:hidden pb-6" id="mobile-menu">
      <nav class="flex flex-col space-y-4">
        <a href="{{ url('/') }}" 
           class="text-sm uppercase tracking-widest text-gray-700 hover:text-gray-900 transition-colors duration-300 py-2 {{ request()->is('/') ? 'text-gray-900' : '' }}">
          Home
        </a>
        <a href="{{ url('/about') }}" 
           class="text-sm uppercase tracking-widest text-gray-700 hover:text-gray-900 transition-colors duration-300 py-2 {{ request()->is('about') ? 'text-gray-900' : '' }}">
          About
        </a>
        <a href="{{ url('/projects') }}" 
           class="text-sm uppercase tracking-widest text-gray-700 hover:text-gray-900 transition-colors duration-300 py-2 {{ request()->is('projects') ? 'text-gray-900' : '' }}">
          Projects
        </a>
        <a href="{{ url('/contact') }}" 
           class="text-sm uppercase tracking-widest text-gray-700 hover:text-gray-900 transition-colors duration-300 py-2 {{ request()->is('contact') ? 'text-gray-900' : '' }}">
          Contact
        </a>
        <a href="{{ url('/contact') }}" class="pt-2">
          <button class="w-full px-6 py-3 bg-gray-900 text-white text-xs tracking-widest uppercase hover:bg-gray-800 transition-colors duration-300">
            Get In Touch
          </button>
        </a>
      </nav>
    </div>
  </div>
</header>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
      mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
      });
    }
  });
</script>