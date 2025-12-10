@extends('components.layout')

@section('content')

{{-- Hero Section --}}
<section class="py-20 bg-neutral-50">
  <div class="container mx-auto px-6 lg:px-12">
    <div class="max-w-4xl">
      <h1 class="text-5xl lg:text-6xl font-light text-gray-900 mb-6 tracking-tight">About Me</h1>
      <div class="w-20 h-0.5 bg-gray-900 mb-8"></div>
      <p class="text-xl text-gray-700 leading-relaxed font-light">
        Charlene Cansing — SEO SPECIALIST
      </p>
    </div>
  </div>
</section>

{{-- Main Content --}}
<section class="py-20 bg-white">
  <div class="container mx-auto px-6 lg:px-12">
    <div class="grid lg:grid-cols-3 gap-16">
      
      {{-- Left Column: Profile Image & Quick Info --}}
      <div class="lg:col-span-1 space-y-8">
        <div class="aspect-[3/4] bg-gray-200 overflow-hidden">
          <img class="w-full h-full object-cover" 
               alt="Charlene Cansing"
               src="{{ asset('images/portfolioprofile.jpeg') }}">
        </div>
        
        <div class="space-y-6">
          <div>
            <h3 class="text-xs uppercase tracking-widest text-gray-500 mb-2">Location</h3>
            <p class="text-gray-900 font-light">Digos City, Philippines</p>
          </div>
          <div>
            <h3 class="text-xs uppercase tracking-widest text-gray-500 mb-2">Email</h3>
            <a href="mailto:charlenecansing21@gmail.com" class="text-gray-900 font-light hover:text-gray-600 transition-colors">
              charlenecansing21@gmail.com
            </a>
          </div>
          <div>
            <h3 class="text-xs uppercase tracking-widest text-gray-500 mb-2">Phone</h3>
            <a href="tel:+639151812230" class="text-gray-900 font-light hover:text-gray-600 transition-colors">
              +63 915 181 2230
            </a>
          </div>
          <div>
            <h3 class="text-xs uppercase tracking-widest text-gray-500 mb-2">LinkedIn</h3>
            <a href="https://linkedin.com/in/charlenecansing" target="_blank" class="text-gray-900 font-light hover:text-gray-600 transition-colors">
              /in/charlenecansing
            </a>
          </div>
        </div>

        {{-- Download CV Button --}}
        <div class="pt-4">
                  {{-- Download CV --}}
          <a href="https://drive.google.com/file/d/1twgrJ5Z5Fx1QrH01ytoQGMzyqTlpqdj3/view?usp=sharing" class="block">
            <button class="w-full px-6 py-4 bg-gray-900 text-white text-xs tracking-widest uppercase hover:bg-gray-800 transition-colors duration-300">
              Download CV
            </button>
          </a>

          {{-- View CV in browser --}}
          <a href="https://drive.google.com/file/d/1twgrJ5Z5Fx1QrH01ytoQGMzyqTlpqdj3/view?usp=sharing" target="_blank" class="block mt-3">
            <button class="w-full px-6 py-4 border border-gray-900 text-gray-900 text-xs tracking-widest uppercase hover:bg-gray-900 hover:text-white transition-all duration-300">
              View CV
            </button>
          </a>

        </div>
      </div>

      {{-- Right Column: Detailed Information --}}
      <div class="lg:col-span-2 space-y-16">
        
        {{-- Summary --}}
        <div class="space-y-6">
          <h2 class="text-3xl font-light text-gray-900 tracking-tight">Professional Summary</h2>
          <p class="text-gray-700 leading-relaxed font-light">
            Motivated BSIT student from the University of Mindanao Digos College with five years of experience as a Virtual Assistant specializing in e-commerce operations, administrative support, social media management, and SEO both on-page and off-page. Equipped with foundational skills in front-end web development and digital optimization. Known for adaptability, attention to detail, and a strong work ethic, bringing a collaborative mindset and a willingness to learn in an internship role.
          </p>
        </div>

        {{-- Work Experience --}}
        <div class="space-y-8">
          <h2 class="text-3xl font-light text-gray-900 tracking-tight">Work Experience</h2>
          
          {{-- Job 1 --}}
          <div class="border-l-2 border-gray-200 pl-6 space-y-3">
            <div class="flex justify-between items-start flex-wrap gap-2">
              <div>
                <h3 class="text-xl font-normal text-gray-900">SEO Specialist</h3>
                <p class="text-sm text-gray-600 font-light">QuickDesk Virtual Solutions</p>
              </div>
              <span class="text-sm text-gray-500 font-light">July 2025 – November 2025</span>
            </div>
            <ul class="space-y-2 text-gray-700 font-light">
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Conducted extensive keyword research to identify ranking opportunities for client websites.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Performed on-page SEO, including optimizing titles, meta descriptions, headers, URLs, and internal linking structures.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Created and optimized SEO-driven content outlines to improve page relevance and user engagement.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Completed competitor analysis to guide content strategy and ranking improvements.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Used SEO tools such as Google Search Console, Google Analytics, Ubersuggest, and Semrush for monitoring and reporting.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Helped improve organic traffic and search visibility for small business clients.
              </li>
            </ul>
          </div>

          {{-- Job 2 --}}
          <div class="border-l-2 border-gray-200 pl-6 space-y-3">
            <div class="flex justify-between items-start flex-wrap gap-2">
              <div>
                <h3 class="text-xl font-normal text-gray-900">General Virtual Assistant</h3>
                <p class="text-sm text-gray-600 font-light">Innosky Company</p>
              </div>
              <span class="text-sm text-gray-500 font-light">Dec 2022 – Aug 2025</span>
            </div>
            <ul class="space-y-2 text-gray-700 font-light">
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Managed LinkedIn accounts of developers to boost professional networking.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Sourced and qualified leads, scheduling meetings through Airtable.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Created customized CVs and professional documents using Canva.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Supported administrative and client-facing tasks to improve business efficiency.
              </li>
            </ul>
          </div>

          {{-- Job 3 --}}
          <div class="border-l-2 border-gray-200 pl-6 space-y-3">
            <div class="flex justify-between items-start flex-wrap gap-2">
              <div>
                <h3 class="text-xl font-normal text-gray-900">Account Manager</h3>
                <p class="text-sm text-gray-600 font-light">Bottom Line Concepts, LLC</p>
              </div>
              <span class="text-sm text-gray-500 font-light">Aug 2021 – Present</span>
            </div>
            <ul class="space-y-2 text-gray-700 font-light">
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Assisted in client account management and communication for a cost-savings consultancy.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Supported administrative and back-end operations to ensure smooth client engagement.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Coordinated with team members to maintain accurate records and follow-ups.
              </li>
            </ul>
          </div>

          {{-- Job 4 --}}
          <div class="border-l-2 border-gray-200 pl-6 space-y-3">
            <div class="flex justify-between items-start flex-wrap gap-2">
              <div>
                <h3 class="text-xl font-normal text-gray-900">Virtual Assistant</h3>
                <p class="text-sm text-gray-600 font-light">QuickDesk Virtual Solutions</p>
              </div>
              <span class="text-sm text-gray-500 font-light">Jan – Oct 2022</span>
            </div>
            <ul class="space-y-2 text-gray-700 font-light">
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Performed SEO tasks including keyword research and content optimization.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Handled data entry projects with accuracy and confidentiality.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Generated and verified leads for business outreach and sales campaigns.
              </li>

              {{-- Job 4 --}}
          <div class="border-l-2 border-gray-200 pl-6 space-y-3">
            <div class="flex justify-between items-start flex-wrap gap-2">
              <div>
                <h3 class="text-xl font-normal text-gray-900">Walmart Dropshipping Virtual Assistant</h3>
                <p class="text-sm text-gray-600 font-light">Drop it like a Box LLC, Waller Distributing LLC, GoGoGazelle LLC</p>
              </div>
              <span class="text-sm text-gray-500 font-light">Aug 2020 – Dec 2021</span>
            </div>
            <ul class="space-y-2 text-gray-700 font-light">
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Researched and sourced profitable products for Walmart Marketplace.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Created and uploaded bulk product listings using Walmart Seller Center and tools like OA Genius.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Updated prices and inventory to ensure listings were accurate.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Processed daily orders by placing them with suppliers Amazon, and Home Depot.
              </li>
              <li class="flex items-start">
                <span class="text-gray-400 mr-2">•</span>
                Tracked and confirmed shipment status for customer orders.
              </li>
          
            </ul>
          </div>
        </div>

        {{-- Education --}}
        <div class="space-y-6">
          <h2 class="text-3xl font-light text-gray-900 tracking-tight">Education & Training</h2>
          
          <div class="space-y-4">
            <div class="border-l-2 border-gray-200 pl-6 space-y-2">
              <h3 class="text-lg font-normal text-gray-900">General Virtual Assistant Training (176 hrs)</h3>
              <p class="text-sm text-gray-600 font-light">QuickDesk Virtual Solutions | 2022</p>
            </div>
            
            <div class="border-l-2 border-gray-200 pl-6 space-y-2">
              <h3 class="text-lg font-normal text-gray-900">Senior High School - Humanities & Social Sciences</h3>
              <p class="text-sm text-gray-600 font-light">Digos City | 2020</p>
            </div>

            <div class="border-l-2 border-gray-200 pl-6 space-y-2">
              <h3 class="text-lg font-normal text-gray-900">E-Commerce Workshop</h3>
              <p class="text-sm text-gray-600 font-light">Bill Company | 2021</p>
            </div>
          </div>
        </div>

        {{-- Skills --}}
        <div class="space-y-6">
          <h2 class="text-3xl font-light text-gray-900 tracking-tight">Skills & Services</h2>
          
          <div class="grid md:grid-cols-2 gap-4">
            <div class="space-y-2">
              <h3 class="text-xs uppercase tracking-widest text-gray-500">Core Competencies</h3>
              <ul class="space-y-2 text-gray-700 font-light">
                <li>E-Commerce Management</li>
                <li>Walmart Dropshipping</li>
                <li>Administrative Assistance</li>
                <li>Data Entry</li>
                <li>Lead Generation</li>
                <li>Email Marketing</li>
              </ul>
            </div>
            
            <div class="space-y-2">
              <h3 class="text-xs uppercase tracking-widest text-gray-500">Technical Skills</h3>
              <ul class="space-y-2 text-gray-700 font-light">
                <li>SEO & Content Optimization</li>
                <li>Social Media Management</li>
                <li>Photo & Video Editing</li>
                <li>Project Management</li>
                <li>Website Designing</li>
                <li>Real Estate Support</li>
              </ul>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

{{-- CTA Section --}}
<section class="py-20 bg-neutral-50">
  <div class="container mx-auto px-6 lg:px-12">
    <div class="max-w-3xl mx-auto text-center space-y-8">
      <h2 class="text-4xl lg:text-5xl font-light text-gray-900 tracking-tight">Let's Work Together</h2>
      <p class="text-lg text-gray-700 leading-relaxed font-light">
        I'm available for freelance projects and virtual assistance opportunities. 
        Let's discuss how I can help your business grow.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ url('/contact') }}">
          <button class="px-10 py-4 bg-gray-900 text-white text-xs tracking-widest uppercase hover:bg-gray-800 transition-colors duration-300">
            Get In Touch
          </button>
        </a>
        <a href="{{ url('/projects') }}">
          <button class="px-10 py-4 border border-gray-900 text-gray-900 text-xs tracking-widest uppercase hover:bg-gray-900 hover:text-white transition-all duration-300">
            View Projects
          </button>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection