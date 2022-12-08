<x-layout>
    <x-slot:title>
        Posts
    </x-slot>
    @foreach ($users as $user)
        <div class="col-10">
            <h3 class="text-center">{{ $user->name }}</h3>

            <p>
                {{ $user->userEmail }}
            </p>

        </div>
    @endforeach
</x-layout>