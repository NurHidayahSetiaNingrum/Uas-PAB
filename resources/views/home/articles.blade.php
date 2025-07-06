@extends('layout')
@section('content')
<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="-my-8 divide-y-2 divide-gray-100">
           @foreach ($articles as $post)
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 mr-6 flex-shrink-0 flex flex-col">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ $post->getFirstMediaUrl('featured_images') != '' ? $post->getFirstMediaUrl('featured_images') : "https://dummyimage.com/720x400"}}" alt="blog">
          <span class="mt-1 text-gray-500 text-sm">{{ $post->created_at }}</span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $post->title }}</h2>
          <p class="leading-relaxed">{{ $post->excerpt }}</p>
        </div>
          <div class="flex justify-center">
          <a href="{{ route('post.detail', ['slug' => $post->slug]) }}" class="inline-block text-white bg-indigo-500 hover:bg-indigo-600 px-4 py-2 rounded text-sm">
        Lihat Selengkapnya
      </a>
      <!-- <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"> -->
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
          @endforeach
    </div>
</div>
</section>
@endsection