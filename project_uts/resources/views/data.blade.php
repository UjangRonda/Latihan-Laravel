<x-layout>
<div class="text-center">
        <h1 class="text-balance text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Detail Mahasiswa</h1>
        <br>
    <div class="text-center">
        <br>
        <p>Nama: <strong>{{ $data->nama }}</strong></p>
        <p>Kota: <strong>{{ $data->kota->kota }}</strong></p>
        <p>Kode: <strong>{{ $data->kode->kode }}</strong></p>
    </div>
        <div class="mt-10 flex items-center justify-center gap-x-6">
        </div>
      </div>
</x-layout>