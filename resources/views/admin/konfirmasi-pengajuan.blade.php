<x-layout>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
        <div>
            <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5" type="button">
                <svg class="w-3 h-3 text-gray-500 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                    </svg>
                Last 30 days
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
             <!-- Dropdown menu -->
             <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                <ul class="p-3 space-y-1 text-sm text-gray-700" aria-labelledby="dropdownRadioButton">
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100">
                            <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last day</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100">
                            <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last 7 days</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100">
                            <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last 30 days</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100">
                            <input id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last month</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100">
                            <input id="filter-radio-example-5" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                            <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last year</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
        </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-gray-50 ">NIK</th>
                    <th scope="col" class="px-6 py-3">Nama Lengkap</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50">Tempat Lahir</th>
                    <th scope="col" class="px-6 py-3">Tanggal Lahir</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50">Jenis Kelamin</th>
                    <th scope="col" class="px-6 py-3">Alamat</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50">RT/RW</th>
                    <th scope="col" class="px-6 py-3">Kel/Desa</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50">Kecamatan</th>
                    <th scope="col" class="px-6 py-3">Agama</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50">Status Perkawinan</th>
                    <th scope="col" class="px-6 py-3">Pekerjaan</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50">Kewarganegaraan</th>
                    <th scope="col" class="px-6 py-3">Berlaku Hingga</th>
                    <th scope="col" class="px-6 py-3 bg-gray-50">Keterangan</th>
                </tr>
            </thead>
            <tbody id="table-body">
                @foreach($ktp as $item)
                <tr id="printable-{{ $item->nik }}" class="border-b border-gray-200">
                    <td class="px-6 py-4 flex items-center">
                        <!-- Tombol dropdown untuk aksi -->
                        <div class="relative inline-block text-left ms-4">
                            <button type="button" class="flex items-center p-2 text-sm text-gray-600 hover:bg-gray-100 rounded-md" id="dropdownDefaultButton" data-dropdown-toggle="dropdown{{ $item->nik }}" aria-expanded="false">
                                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown{{ $item->nik }}" class="z-10 hidden absolute right-0 w-48 mt-2 origin-top-right bg-white border border-gray-200 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                <div class="p-1">
                                    <a href="#" onclick="printData('{{ $item->nik }}'); return false;" class="block px-4 py-2 text-sm text-blue-600 hover:bg-blue-100 rounded-md">
                                        Print
                                    </a>
                                    <form action="{{ route('admin.ktp.destroy', $item->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?');" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-100 rounded-md">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{ $item->nik }}
                    </td>
                    <td class="px-6 py-4">{{ $item->nama }}</td>
                    <td class="px-6 py-4">{{ $item->tempat_lahir }}</td>
                    <td class="px-6 py-4">{{ $item->tanggal_lahir }}</td>
                    <td class="px-6 py-4">{{ $item->jenis_kelamin === 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                    <td class="px-6 py-4">{{ $item->alamat }}</td>
                    <td class="px-6 py-4">{{ $item->rt_rw }}</td>
                    <td class="px-6 py-4">{{ $item->kelurahan->nama_kelurahan }}</td>
                    <td class="px-6 py-4">{{ $item->kecamatan->nama_kecamatan }}</td>
                    <td class="px-6 py-4">{{ $item->agama }}</td>
                    <td class="px-6 py-4">{{ $item->status_perkawinan }}</td>
                    <td class="px-6 py-4">{{ $item->pekerjaan }}</td>
                    <td class="px-6 py-4">{{ $item->kewarganegaraan }}</td>
                    <td class="px-6 py-4">{{ $item->berlaku_hingga }}</td>
                    <td class="px-6 py-4">{{ $item->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tambahkan JavaScript untuk mengendalikan dropdown -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('[data-dropdown-toggle]').forEach(function (button) {
                button.addEventListener('click', function () {
                    const dropdownId = this.getAttribute('data-dropdown-toggle');
                    const dropdown = document.getElementById(dropdownId);
                    dropdown.classList.toggle('hidden');
                });
            });
        });
        document.getElementById('table-search').addEventListener('input', function() {
    const searchValue = this.value.toLowerCase();
    const tableRows = document.querySelectorAll('#table-body tr');
    
    tableRows.forEach(row => {
        const rowText = row.textContent.toLowerCase();
        if (rowText.includes(searchValue)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});
function generateSuratNumber() {
    const prefix = 'SKD-';
    const randomNumber = Math.floor(Math.random() * 1000000); 
    return `${prefix}${randomNumber}`;
}

function printData(nik) {
    const namaKepalaDesa = 'Sugeng A.Md';
    const alamatDesa = 'Jl. Raya Tritih Lor';
    const nomorSurat = generateSuratNumber();
    const tempatPenerbitanSurat = 'Kelurahan Jeruklegi';
    const tanggalPenerbitanSurat = new Date().toLocaleDateString();

    // Ambil data dari tabel
    const itemData = document.querySelector(`#printable-${nik}`);
    const namaLengkap = itemData.querySelector('td:nth-child(2)').textContent.trim();
    const tempatLahir = itemData.querySelector('td:nth-child(3)').textContent.trim();
    const tanggalLahir = itemData.querySelector('td:nth-child(4)').textContent.trim();
    const jenisKelamin = itemData.querySelector('td:nth-child(5)').textContent.trim();
    const alamat = itemData.querySelector('td:nth-child(6)').textContent.trim();
    const rtRw = itemData.querySelector('td:nth-child(7)').textContent.trim();
    const kelurahan = itemData.querySelector('td:nth-child(8)').textContent.trim();
    const kecamatan = itemData.querySelector('td:nth-child(9)').textContent.trim();
    const agama = itemData.querySelector('td:nth-child(10)').textContent.trim();
    const statusPerkawinan = itemData.querySelector('td:nth-child(11)').textContent.trim();
    const pekerjaan = itemData.querySelector('td:nth-child(12)').textContent.trim();
    const kewarganegaraan = itemData.querySelector('td:nth-child(13)').textContent.trim();
    const berlakuHingga = itemData.querySelector('td:nth-child(14)').textContent.trim();
    const status = itemData.querySelector('td:nth-child(15)').textContent.trim();

    // Template Surat Keterangan Desa
    const suratKeterangan = `
        <html>
        <head>
            <title>Surat Keterangan Desa</title>
            <style>
             body { font-family: Arial, sans-serif; margin: 40px; }
            .header { text-align: center; margin-bottom: 20px; }
            .header img { float: left; width: 70px; }
            .header div { text-align: center; }
            .header h2, h3 { margin: 0; }
            .header p { margin: 5px 0; font-size: 14px; }
            .line { border-top: 2px solid black; margin: 20px 0; }
            .content p { margin: 5px 0; line-height: 1.6; }
            .content .indented { margin-left: 40px; }
            .content .spaced { margin-bottom: 20px; }
            .centered { text-align: center; }
            .signature { margin-top: 30px; text-align: right; }
            .date { text-align: right; margin-bottom: 40px; }
            </style>
        </head>
        <body>
            <div class="header">
                <img src="{{ asset('asset/clp.png') }}" alt="Logo Kabupaten Cilacap">
                <div>
                    <h2>PEMERINTAHAN KABUPATEN CILACAP</h2>
                    <h3>KECAMATAN JERUKLEGI</h3>
                    <h3>DESA TRITIH LOR</h3>
                    <p>Jl. Raya Tritih Lor +62 888888888 | info@panda.id</p>
                </div>
            </div>
            <div class="line"></div>
            <div class="content">
                <h2 style="text-align: center;">SURAT KETERANGAN</h2>
                <p style="text-align: center;">Nomor: ${nomorSurat}</p>

                <p style="text-align: center;">Yang bertanda tangan di bawah ini, kami Kepala Desa Tritih Lor, Kecamatan Jeruklegi, Kabupaten Cilacap, menerangkan dengan sebenarnya kepada :</p>
                <p>Nama Lengkap: ${namaLengkap}</p>
                <p>Tempat/Tanggal Lahir: ${tempatLahir}, ${tanggalLahir}</p>
                <p>Jenis Kelamin: ${jenisKelamin}</p>
                <p>Alamat: ${alamat}</p>
                <p>RT/RW: ${rtRw}</p>
                <p>Kel/Desa: ${kelurahan}</p>
                <p>Kecamatan: ${kecamatan}</p>
                <p>Agama: ${agama}</p>
                <p>Status Perkawinan: ${statusPerkawinan}</p>
                <p>Pekerjaan: ${pekerjaan}</p>
                <p>Kewarganegaraan: ${kewarganegaraan}</p>
                <p>Berlaku Hingga: ${berlakuHingga}</p>
                <p>Adalah benar warga desa kami yang berdomisili di alamat tersebut di atas.</p>
                <p style="text-align: center;">Demikian surat keterangan ini dibuat dengan sebenarnya dan dapat digunakan untuk keperluan pembuatan Kartu Tanda Penduduk (KTP) sesuai kebutuhan.</p>

                <div class="signature">
                    <p>${tempatPenerbitanSurat}, ${tanggalPenerbitanSurat}</p>
                    <p>Kepala Desa,</p>
                    <p>[TTD]</p>
                    <p>${namaKepalaDesa}</p>
                    <p>NIP: 758758949934</p>
                </div>
            </div>
        </body>
        </html>
    `;

    const printWindow = window.open('', '', 'height=600,width=800');
    printWindow.document.write(suratKeterangan); 
    printWindow.document.write('</body></html>'); 
    
    printWindow.document.close();
    printWindow.focus();
    printWindow.print();
}


    </script>
</x-layout>
