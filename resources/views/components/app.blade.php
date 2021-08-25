<x-master>
    <section>
        <header class="container mx-auto">

            <main class="px-8 py-4">
                <div class="lg:flex lg:justify-between">
                    @if(auth()->check())
                        <div class="lg:w-32">
                            @include ('_sidebar-links')
                        </div>
                    @endif

                    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">

                        {{$slot}}
                    </div>
                    @if(auth()->check())

                        <div class="lg:w-1/6">
                            @include ('_friends-list')
                        </div>
                    @endif
                </div>
            </main>
        </header>
    </section>
</x-master>
