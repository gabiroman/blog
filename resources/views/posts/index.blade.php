<x-app-layout>
    <div class="container py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <article class="group flex flex-col w-full mx-auto bg-gray-200 hover:bg-indigo-200 p-5 rounded-md">
                    <img class="rounded" src="{{Storage::url($post->image->url)}}" alt="">
                    <div class="mt-2">
                        @foreach ($post->tags as $tag)
                            <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                        @endforeach
                    </div>
                    <div class="p-2">
                        <h1 class="text-3xl text-black group-hover:text-indigo-600">
                            <a href="{{route('posts.show', $post)}}">
                                {{$post->name}}
                            </a>
                        </h1>
                        <p class="text-gray-500 text-justify">
                            {{$post->extract}}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="my-1">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>