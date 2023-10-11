<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Daftar Koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>{{ __("Daftar Koleksi Perpustakaan") }}</h2>
                    @if(count($collections) === 0)
                        <p>Data koleksi kosong.</p>
                    @else
                        <table class="w-full mt-4 border border-collapse table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border">Nama Koleksi</th>
                                    <th class="px-4 py-2 border">Jenis Koleksi</th>
                                    <th class="px-4 py-2 border">Jumlah Koleksi</th>
                                    <th class="px-4 py-2 border">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $jenisKoleksiLabels = [
                                        '1' => 'Buku',
                                        '2' => 'Majalah',
                                        '3' => 'Cakram Digital',
                                    ];
                                @endphp
                                @foreach($collections as $collection)
                                    <tr>
                                        <td class="px-4 py-2 border">{{ $collection->namaKoleksi }}</td>
                                        <td class="px-4 py-2 border">{{ $jenisKoleksiLabels[$collection->jenisKoleksi] }}</td>
                                        <td class="px-4 py-2 border">{{ $collection->jumlahKoleksi }}</td>
                                        <td class="px-4 py-2 border">
                                            <a href="{{ route('koleksi.infoKoleksi', $collection->id) }}" class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">View</a>
                                            {{-- <a href="{{ route('koleksi.update', $collection->id) }}" class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">View</a> --}}
                                            
                                            {{-- <form action="{{ route('koleksi.update', $collection->id) }}" method="PUT" class="inline">
                                                @csrf
                                                <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Edit</button>
                                            </form> --}}
                                            <form action="{{ route('koleksi.destroy', $collection->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                    <a href="{{ route('koleksi.registrasi') }}">Tambah Data</a>
                </button>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Rafa Suryaputra - 6706223162 -->