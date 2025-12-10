@extends('components.layout')

@section('content')

<section class="py-32 bg-white">
  <div class="container mx-auto px-6 lg:px-12">

    {{-- Page Header --}}
    <div class="mb-16 space-y-4">
      <h1 class="text-6xl font-light text-gray-900 tracking-tight">
        Contact
      </h1>
      <p class="text-lg text-gray-600 font-light max-w-2xl">
        Have a question or want to work together? Feel free to send me a message.
      </p>
    </div>

    {{-- Form Container --}}
    <div class="max-w-2xl">

      @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 text-green-700 rounded">
          {{ session('success') }}
        </div>
      @endif

      <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
        @csrf

        {{-- Name --}}
        <div>
          <label class="block text-gray-800 font-medium mb-1">Name</label>
          <input type="text" name="name"
            class="w-full border border-gray-300 rounded-sm p-3 focus:border-red-500 focus:ring-red-500"
            value="{{ old('name') }}">
          @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{-- Email --}}
        <div>
          <label class="block text-gray-800 font-medium mb-1">Email</label>
          <input type="email" name="email"
            class="w-full border border-gray-300 rounded-sm p-3 focus:border-red-500 focus:ring-red-500"
            value="{{ old('email') }}">
          @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{-- Message --}}
        <div>
          <label class="block text-gray-800 font-medium mb-1">Message</label>
          <textarea name="message" rows="5"
            class="w-full border border-gray-300 rounded-sm p-3 focus:border-red-500 focus:ring-red-500">{{ old('message') }}</textarea>
          @error('message')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{-- Submit Button --}}
        <button
        class="px-10 py-3 bg-gray-900 text-gray-100 uppercase tracking-wider text-sm font-medium 
                hover:bg-gray-800 border border-gray-700 transition shadow-sm">
        Send Message
        </button>


      </form>

    </div>

  </div>
</section>

@endsection
