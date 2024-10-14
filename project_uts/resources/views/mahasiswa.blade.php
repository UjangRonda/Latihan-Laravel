<x-layout>
<div class="text-center">
    <h1 class="text-balance text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Daftar Mahasiswa</h1>
    <br>
    <ul>
        @foreach ($mahasiswa as $data)
            <li>
                <a href="mahasiswa/{{ $data['id'] }}" class="text-blue-600 hover:underline">
                    <b>{{ $data['nama'] }}</b>
                </a>
            </li>
        @endforeach
    </ul>
    <div class="mt-10 flex items-center justify-center gap-x-6">
    </div>
</div>
</x-layout>
