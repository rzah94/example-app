<x-layout>
    <x-slot:title>
        Posts
    </x-slot>
    @foreach($posts as $post)
        <div class="col-10">
            <h3 class="text-center">{{ $post->title }}</h3>

            <div class="col-6">
                {{ $post->content }}
            </div>

        </div>
    @endforeach
</x-layout>