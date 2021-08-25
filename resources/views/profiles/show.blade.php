<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg"
                 alt=""
                 class="mb-2"
            >

            <img src="{{ $user->avatar }}"
                 alt=""
                 class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                 style="left: 50%"
                 width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <a href="" class="rounded-full py-2 px-4 border border-gray-300 mr-2 text-black text-xs "> Edit Profile</a>
                <a href="" class=" bg-blue-500 rounded-full shadow py-2 px-4 white text-xs "> Follow Me</a>

            </div>

        </div>

        <p class="text-sm">
            The name’s {{$user->name}} Don’t wear it out. {{$user->name}} is an anthropomorphic gray
            and white rabbit or hare who is famous for his flippant, insouciant personality.
            He is also characterized by a Brooklyn accent,
        </p>


    </header>

    @include ('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>
