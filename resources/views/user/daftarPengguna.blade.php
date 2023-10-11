<x-app-layout>
 <x-slot name="header">
     <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
         {{ __('Daftar Pengguna') }}
     </h2>
 </x-slot>

 <div class="py-12">
     <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
         <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
             <div class="p-6 text-gray-900 dark:text-gray-100">
                 <h2>{{ __("Daftar Pengguna") }}</h2>
                 @if(count($users) === 0)
                        <p>Data koleksi kosong.</p>
                    @else
                        <table class="w-full mt-4 border border-collapse table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border">Username</th>
                                    <th class="px-4 py-2 border">Nama Lengkap</th>
                                    <th class="px-4 py-2 border">Jenis Kelamin</th>
                                    <th class="px-4 py-2 border">Alamat</th>
                                    <th class="px-4 py-2 border">Nomor Telepon</th>
                                    <th class="px-4 py-2 border">Tanggal Lahir</th>
                                    <th class="px-4 py-2 border">Agama</th>
                                    <th class="px-4 py-2 border">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $jenisKelaminLabels = [
                                        '1' => 'Pria',
                                        '2' => 'Wanita',
                                    ];
                                @endphp
                                @foreach($users as $user)
                                    <tr>
                                        <td class="px-4 py-2 border">{{ $user->username }}</td>
                                        <td class="px-4 py-2 border">{{ $user->fullname }}</td>
                                        <td class="px-4 py-2 border">{{ $jenisKelaminLabels[$user->jenisKelamin] }}</td>
                                        <td class="px-4 py-2 border">{{ $user->address }}</td>
                                        <td class="px-4 py-2 border">{{ $user->phoneNumber }}</td>
                                        <td class="px-4 py-2 border">{{ $user->birthdate }}</td>
                                        <td class="px-4 py-2 border">{{ $user->agama }}</td>
                                        <td class="px-4 py-2 border">
                                            <a href="{{ route('user.infoPengguna', $user->id) }}" class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">View</a>
                                            {{-- <a href="{{ route('koleksi.update', $collection->id) }}" class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">View</a> --}}
                                            
                                            {{-- <form action="{{ route('koleksi.update', $collection->id) }}" method="PUT" class="inline">
                                                @csrf
                                                <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Edit</button>
                                            </form> --}}
                                            {{-- <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Delete</button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
             </div>
         </div>

     </div>
 </div>
</x-app-layout>

<!-- Rafa Suryaputra - 6706223162 -->