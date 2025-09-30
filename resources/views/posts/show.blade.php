<x-layout>
    <main class="max-w-4xl mx-auto mt-10 lg:mt-20 space-y-6 px-6">
        <article class="space-y-8">
            <!-- Back to Posts Navigation -->
            <div class="flex justify-between items-center">
                <a href="/"
                   class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                    <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path class="fill-current"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                            </path>
                        </g>
                    </svg>
                    Back to Posts
                </a>

                <div class="space-x-2">
                    <x-category-button :category="$post->category"/>
                </div>
            </div>

            <!-- Post Title -->
            <header class="text-center space-y-4">
                <h1 class="font-bold text-3xl lg:text-5xl leading-tight">
                    {{ $post->title }}
                </h1>

                <div class="flex items-center justify-center space-x-4 text-gray-500 text-sm">
                    <time>Published {{ $post->created_at->diffForHumans() }}</time>
                    <span>•</span>
                    <a href="/?author={{ $post->author->username }}" class="hover:text-blue-500">{{ $post->author->name }}</a>
                </div>
            </header>

            <!-- Featured Image -->
            <div class="w-full">
                @php
                    $illustrations = [
                        '/images/illustration-1.jpg',
                        '/images/illustration-2.jpg',
                        '/images/illustration-3.jpg',
                        '/images/illustration-4.jpg',
                        '/images/illustration-5.png'
                    ];
                    $imageIndex = $post->id % count($illustrations);
                    $selectedImage = $illustrations[$imageIndex];
                @endphp
                <img src="{{ $selectedImage }}" alt="Blog Post illustration" class="rounded-xl w-full h-64 lg:h-96 object-cover shadow-lg">
            </div>

            <!-- Post Content -->
            <div class="prose prose-lg max-w-none">
                <div class="space-y-4 lg:text-lg leading-relaxed">{!! $post->body !!}</div>
            </div>

            <!-- Author Info -->
            <div class="flex items-center justify-center pt-8 border-t border-gray-200">
{{--                <img src="/images/lary-avatar.svg" alt="Author avatar" class="w-12 h-12 rounded-full">--}}
                <div class="ml-4">
                    <h5 class="font-bold text-lg">
                        <a href="/?author={{ $post->author->username }}" class="hover:text-blue-500">{{ $post->author->name }}</a>
                    </h5>
                </div>
            </div>
        </article>
    </main>
</x-layout>
