<x-layout>
    <div class="flex gap-4">
       
        <div class="flex-1 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50">NIK</th>
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
                    @foreach($ktp as $ktp)
                    <tr class="border-b border-gray-200 cursor-pointer hover:bg-gray-100" onclick="showDetails({{ $ktp->id }})">
                        <td class="px-6 py-4 bg-gray-50">{{ $ktp->nik }}</td>
                        <td class="px-6 py-4">{{ $ktp->nama }}</td>
                        <td class="px-6 py-4 bg-gray-50">{{ $ktp->tempat_lahir }}</td>
                        <td class="px-6 py-4">{{ $ktp->tanggal_lahir }}</td>
                        <td class="px-6 py-4 bg-gray-50">{{ $ktp->jenis_kelamin === 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                        <td class="px-6 py-4">{{ $ktp->alamat }}</td>
                        <td class="px-6 py-4 bg-gray-50">{{ $ktp->rt_rw }}</td>
                        <td class="px-6 py-4">{{ $ktp->kelurahan->nama_kelurahan }}</td>
                        <td class="px-6 py-4 bg-gray-50">{{ $ktp->kecamatan->nama_kecamatan }}</td>
                        <td class="px-6 py-4">{{ $ktp->agama }}</td>
                        <td class="px-6 py-4 bg-gray-50">{{ $ktp->status_perkawinan }}</td>
                        <td class="px-6 py-4">{{ $ktp->pekerjaan }}</td>
                        <td class="px-6 py-4 bg-gray-50">{{ $ktp->kewarganegaraan }}</td>
                        <td class="px-6 py-4">{{ $ktp->berlaku_hingga }}</td>
                        <td class="px-6 py-4 bg-gray-50">{{ $ktp->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

       
        <div id="details-section" class="w-1/3 p-4 border border-gray-300 rounded-lg bg-gray-50 shadow-md">
            <h3 class="text-lg font-semibold mb-2">Detail Data</h3>
            <div id="details-content">
               
            </div>
            <div id="alert-container">
               
            </div>
            <div id="action-buttons" class="mt-4 flex gap-2">
            </div>
        </div>
    </div>
    

    <script>
        function showDetails(id) {
            fetch(`/api/ktp/${id}`)
                .then(response => response.json())
                .then(data => {
                    const detailsHtml = `
                        <div class="bg-gray-50 p-4 ">
                            <p><strong class="font-medium text-gray-900">NIK:</strong> ${data.nik}</p>
                            <p><strong class="font-medium text-gray-900">Nama Lengkap:</strong> ${data.nama}</p>
                            <p><strong class="font-medium text-gray-900">Tempat Lahir:</strong> ${data.tempat_lahir}</p>
                            <p><strong class="font-medium text-gray-900">Tanggal Lahir:</strong> ${data.tanggal_lahir}</p>
                            <p><strong class="font-medium text-gray-900">Jenis Kelamin:</strong> ${data.jenis_kelamin === 'L' ? 'Laki-Laki' : 'Perempuan'}</p>
                            <p><strong class="font-medium text-gray-900">Alamat:</strong> ${data.alamat}</p>
                            <p><strong class="font-medium text-gray-900">RT/RW:</strong> ${data.rt_rw}</p>
                            <p><strong class="font-medium text-gray-900">Kel/Desa:</strong> ${data.kelurahan.nama_kelurahan}</p>
                            <p><strong class="font-medium text-gray-900">Kecamatan:</strong> ${data.kecamatan.nama_kecamatan}</p>
                            <p><strong class="font-medium text-gray-900">Agama:</strong> ${data.agama}</p>
                            <p><strong class="font-medium text-gray-900">Status Perkawinan:</strong> ${data.status_perkawinan}</p>
                            <p><strong class="font-medium text-gray-900">Pekerjaan:</strong> ${data.pekerjaan}</p>
                            <p><strong class="font-medium text-gray-900">Kewarganegaraan:</strong> ${data.kewarganegaraan}</p>
                            <p><strong class="font-medium text-gray-900">Berlaku Hingga:</strong> ${data.berlaku_hingga}</p>
                            <p><strong class="font-medium text-gray-900">Keterangan:</strong> ${data.status}</p>
                        </div>
                    `;
                    document.getElementById('details-content').innerHTML = detailsHtml;
                    const alertHtml = `
                    <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Perhatian!</span> Cek kembali data KTP!
                        </div>
                    </div>
                `;
                document.getElementById('alert-container').innerHTML = alertHtml;
                    const actionButtonsHtml = `
                        <button type="button" onclick="openRejectModal(${id})" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                            Tolak Berkas
                        </button>
                        <button type="button" onclick="confirmDocument(${id})" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                            Konfirmasi Berkas
                        </button>
                    `;
                    document.getElementById('action-buttons').innerHTML = actionButtonsHtml;
                })
                .catch(error => console.error('Error fetching details:', error));
        }
        function confirmDocument(id) {
        fetch(`/ktp/confirm/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Berkas telah dikonfirmasi.');
                window.location.reload();
            } else {
                alert('Gagal mengkonfirmasi berkas.');
            }
        })
        .catch(error => console.error('Error:', error));
    }

       
    </script>
   <!-- Modal untuk Penolakan Berkas -->
<div id="reject-modal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-lg font-medium">Alasan Penolakan</h3>
        <form id="reject-form">
        <input type="hidden" id="ktp-id" name="ktp_id" value="">
            <textarea id="rejection-reason" class="w-full h-32 mt-2 border border-gray-300 rounded-lg p-2" placeholder="Masukkan alasan penolakan..."></textarea>
            <div class="flex justify-end mt-4">
                <button type="button" onclick="closeRejectModal()" class="bg-gray-500 text-white px-4 py-2 rounded-md">Batal</button>
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md ml-2">Tolak</button>
            </div>
        </form>
    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('reject-form').addEventListener('submit', function(event) {
            event.preventDefault();
            let reason = document.getElementById('rejection-reason').value.trim();
            let ktpId = document.getElementById('ktp-id').value;

            if (reason === '') {
                alert('Alasan penolakan tidak boleh kosong.');
                return;
            }

            fetch(`/ktp/reject/${ktpId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ reason: reason })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Berkas telah ditolak.');
                    window.location.reload();
                } else {
                    alert('Gagal menolak berkas.');
                }
                closeRejectModal();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menolak berkas.');
            });
        });
    });
function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'fixed bottom-4 right-4 bg-blue-500 text-white p-4 rounded-lg shadow-lg';
    notification.innerText = message;

    const sidebar = document.querySelector('.sidebar');
    if (sidebar) {
        const notificationContainer = sidebar.querySelector('#notification-container');
        if (notificationContainer) {
            notificationContainer.innerHTML = ''; 
            notificationContainer.appendChild(notification);

            setTimeout(() => {
                notification.remove();
            }, 5000);
        }
    }
}

    function openRejectModal(id) {
        currentKtpId = id;
        document.getElementById('ktp-id').value = id;
        document.getElementById('reject-modal').classList.remove('hidden');
    }

    function closeRejectModal() {
        document.getElementById('reject-modal').classList.add('hidden');
    }

</script>

</x-layout>
