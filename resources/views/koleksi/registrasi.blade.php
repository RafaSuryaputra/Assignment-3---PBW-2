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
                    {{ __("Daftar Koleksi Perpustakaan") }}
   
                    <form method="POST" action="{{ route('koleksi.daftarKoleksi') }}">
                        @csrf
   
                        <div>
                            <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />
                            <x-text-input id="namaKoleksi" class="block w-full mt-1" type="text" name="namaKoleksi" :value="old('namaKoleksi')" required autofocus autocomplete="namaKoleksi" />
                            <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />
                            <select id="jenisKoleksi" class="block w-full mt-1 dark:bg-gray-800 dark:text-white" name="jenisKoleksi" required autofocus autocomplete="jenisKoleksi">
                                <option>Jenis Koleksi</option>
                                <option value="1" {{ old('jenisKoleksi') == '1' ? 'selected' : '' }}>Buku</option>
                                <option value="2" {{ old('jenisKoleksi') == '2' ? 'selected' : '' }}>Majalah</option>
                                <option value="3" {{ old('jenisKoleksi') == '3' ? 'selected' : '' }}>Cakram Digital</option>
                            </select>
                            <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />
                            <x-text-input id="jumlahKoleksi" class="block w-full mt-1" type="number" name="jumlahKoleksi" :value="old('jumlahKoleksi')" required autofocus autocomplete="jumlahKoleksi" />
                            <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
                        </div>
   
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                Simpan
                            </button>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
   </x-app-layout>

   <!-- Rafa Suryaputra - 6706223162 -->

   