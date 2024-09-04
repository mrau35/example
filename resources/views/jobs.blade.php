<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    @foreach ($jobs as $job)
        <ul>
            <li>
                {{$job['title']}} Company {{$job['company']}}
            </li>
        </ul>
    @endforeach
</x-layout>