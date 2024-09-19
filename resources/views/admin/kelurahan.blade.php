<x-layout>
    <section class="w-full bg-white">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                Tambah Kelurahan
            </button>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-16 py-3 border-r border-gray-200">No</th>
                        <th scope="col" class="px-16 py-3 border-r border-gray-200">Kelurahan</th>
                        <th scope="col" class="px-16 py-3 border-r border-gray-200">Kecamatan</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelurahan as $index => $kelurahan)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-900 border-r border-gray-200">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 font-semibold text-gray-900 border-r border-gray-200">{{ $kelurahan->nama_kelurahan }}</td>
                            <td class="px-6 py-4 font-semibold text-gray-900 border-r border-gray-200">{{ $kelurahan->kecamatan->nama_kecamatan }}</td>
                            <td class="px-6 py-4">
                                <form action="{{ route('admin.kelurahan.destroy', $kelurahan->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="font-medium text-red-600 hover:underline">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!-- Modal content -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <form action="{{ route('admin.kelurahan.store') }}" method="POST">
                @csrf
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-lg font-semibold text-gray-900">Add Kecamatan</h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                            <label for="nama_kelurahan" class="block mb-2 text-sm font-medium text-gray-900">Nama Kecamatan</label>
                    <input type="text" name="nama_kelurahan" id="nama_kelurahan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type kecamatan name" required>
                    </div>
                    </div>
                    <div class="col-span-2">
                                <label for="id_kecamatan" class="block mb-2 text-sm font-medium text-gray-900">Kecamatan</label>
                                <select name="id_kecamatan" id="id_kecamatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                                    @foreach($kecamatan as $kecamatan)
                                        <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama_kecamatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Add
                    </button>
                    </div>
             </form>
           </div>
         </div>
    </x-layout>