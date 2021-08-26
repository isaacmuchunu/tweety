<x-app>
    <form method="POST" action="{{$user->path()}}">
        @csrf
        @method('PATCH')


    </form>
</x-app>
