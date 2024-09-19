<x-layout-user>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 p-4  rounded-lg">
        <!-- Kotak Pengajuan KTP -->
        <div class="flex flex-col items-center justify-center p-4 border border-gray-300 rounded-lg hover:bg-gray-100">
            <a href="{{ route('user.form-ktp') }}" class="flex items-center justify-center">
                <img src="{{ asset('asset/ktp2.jpeg') }}" alt="Form KTP" class="w-32 h-32 rounded bg-gray-50 hover:opacity-80 transition-opacity duration-300">
            </a>
            <h1 class="mt-4 text-lg font-bold">Pengajuan KTP</h1>
        </div>
        
        <!-- Kotak Pengajuan Akta Kelahiran -->
        <div class="flex flex-col items-center justify-center p-4 border border-gray-300 rounded-lg hover:bg-gray-100">
            <a href="#" class="flex items-center justify-center">
                <img src="{{ asset('asset/lahir.jpg') }}" alt="Form Akta Kelahiran" class="w-32 h-32 rounded bg-gray-50 hover:opacity-80 transition-opacity duration-300">
            </a>
            <h1 class="mt-4 text-lg font-bold">Pengajuan Akta Kelahiran</h1>
        </div>
        
        <!-- Kotak Pengajuan Surat Kematian -->
        <div class="flex flex-col items-center justify-center p-4 border border-gray-300 rounded-lg hover:bg-gray-100">
            <a href="#" class="flex items-center justify-center">
                <img src="{{ asset('asset/akta.png') }}" alt="Form Surat Kematian" class="w-32 h-32 rounded bg-gray-50 hover:opacity-80 transition-opacity duration-300">
            </a>
            <h1 class="mt-4 text-lg font-bold">Pengajuan Surat Kematian</h1>
        </div>
        
        <!-- Kotak Pengajuan Surat Pindah -->
        <div class="flex flex-col items-center justify-center p-4 border border-gray-300 rounded-lg hover:bg-gray-100">
            <a href="#" class="flex items-center justify-center">
                <img src="{{ asset('asset/pindah.jpeg') }}" alt="Form Surat Pindah" class="w-32 h-32 rounded bg-gray-50 hover:opacity-80 transition-opacity duration-300">
            </a>
            <h1 class="mt-4 text-lg font-bold">Pengajuan Surat Pindah</h1>
        </div>

        <!-- Tambahan Kotak lainnya sesuai kebutuhan -->
        <div class="flex flex-col items-center justify-center p-4 border border-gray-300 rounded-lg hover:bg-gray-100">
            <a href="#" class="flex items-center justify-center">
                <img src="{{ asset('asset/cerai.jpeg') }}" alt="Form Surat Cerai" class="w-32 h-32 rounded bg-gray-50 hover:opacity-80 transition-opacity duration-300">
            </a>
            <h1 class="mt-4 text-lg font-bold">Pengajuan Surat Cerai</h1>
        </div>

        <div class="flex flex-col items-center justify-center p-4 border border-gray-300 rounded-lg hover:bg-gray-100">
            <a href="#" class="flex items-center justify-center">
                <img src="{{ asset('asset/domisili.png') }}" alt="Form Surat Domisili" class="w-32 h-32 rounded bg-gray-50 hover:opacity-80 transition-opacity duration-300">
            </a>
            <h1 class="mt-4 text-lg font-bold">Pengajuan Surat Domisili</h1>
        </div>

        <div class="flex flex-col items-center justify-center p-4 border border-gray-300 rounded-lg hover:bg-gray-100">
            <a href="#" class="flex items-center justify-center">
                <img src="{{ asset('asset/kk.png') }}" alt="Form Kartu Keluarga" class="w-32 h-32 rounded bg-gray-50 hover:opacity-80 transition-opacity duration-300">
            </a>
            <h1 class="mt-4 text-lg font-bold">Pengajuan Kartu Keluarga</h1>
        </div>

        <div class="flex flex-col items-center justify-center p-4 border border-gray-300 rounded-lg hover:bg-gray-100">
            <a href="#" class="flex items-center justify-center">
                <img src="{{ asset('asset/nikah.jpeg') }}" alt="Form Surat Kuasa" class="w-32 h-32 rounded bg-gray-50 hover:opacity-80 transition-opacity duration-300">
            </a>
            <h1 class="mt-4 text-lg font-bold">Pengajuan Surat Nikah</h1>
        </div>
    </div>
</x-layout-user>
