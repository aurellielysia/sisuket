<x-layout-user>
<section class="bg-white">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900">Pengisian Form Pembuatan KTP</h2>
      <form action="{{ route('user.form-ktp.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="nik" class="block mb-2 text-sm font-medium text-gray-900">NIK</label>
                  <input type="text" name="nik" id="nik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
              </div>
              <div class="sm:col-span-2">
                  <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                  <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
              </div>
              <div>
                <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"  required="">
            </div>
            <div class="relative max-w-sm">
            <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" clip-rule="evenodd"/>
                </svg>
            </div>
            <input id="datepicker-actions" name="tanggal_lahir" datepicker datepicker-buttons datepicker-autoselect-today type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Select date">
        </div>

              <div>
                  <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                  <select name="jenis_kelamin" id="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                  </select>
              </div>
              <div>
                  <label for="agama" class="block mb-2 text-sm font-medium text-gray-900">Agama</label>
                  <select name="agama" id="agama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                  <option value="">Pilih Agama</option>
                  <option value="islam">Islam</option>
                  <option value="kristen">Krsiten</option>
                  <option value="hindhu">Hindu</option>
                  <option value="buddha">Buddha</option>
                  <option value="konghucu">Konghucu</option>
                  <option value="katholik">Katholik</option>
                  </select>
              </div>
              <div>
                  <label for="id_kelurahan" class="block mb-2 text-sm font-medium text-gray-900">Kelurahan</label>
                  <select name="id_kelurahan" id="id_kelurahan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                  <option value="">Pilih Kelurahan</option>
                  @foreach($kelurahan as $kel)
                  <option value="{{ $kel->id }}">{{ $kel->nama_kelurahan }}</option>
                  @endforeach  
                </select>
              </div>
              <div>
                  <label for="id_kecamatan" class="block mb-2 text-sm font-medium text-gray-900">Kecamatan</label>
                  <select name="id_kecamatan" id="id_kecamatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                  <option value="">Pilih Kecamatan</option>
                  @foreach($kecamatan as $kec)
                  <option value="{{ $kec->id }}">{{ $kec->nama_kecamatan }}</option>
                  @endforeach  
                </select>
              </div>
              <div>
                  <label for="status_perkawinan" class="block mb-2 text-sm font-medium text-gray-900">Status Perkawinan</label>
                  <select name="status_perkawinan" id="status_perkawinan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                  <option value="">Pilih Status Perkawinan</option>
                  <option value="belum menikah">Belum Menikah</option>
                  <option value="menikah">Menikah</option>
                  </select>
              </div>
              <div>
                  <label for="kewarganegaraan" class="block mb-2 text-sm font-medium text-gray-900">Kewarganegaraan</label>
                  <select name="kewarganegaraan" id="kewarganegaraan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                  <option value="">Pilih Kewarganegaraan</option>
                  <option value="wni">WNI</option>
                  <option value="wna">WNA</option>
                  </select>
              </div>
              <div>
                  <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                  <select name="pekerjaan" id="pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                  <option value="">Pilih Pekerjaan</option>
                  <option value="belum bekerja">Belum Bekerja</option>
                  <option value="wiraswasta">Wiraswasta</option>
                  <option value="tni">TNI</option>
                  <option value="plori">Polri</option>
                  </select>
              </div>
              <div>
                <label for="rt_rw" class="block mb-2 text-sm font-medium text-gray-900">Rt/Rw</label>
                <input type="text" name="rt_rw" id="rt_rw" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"  required="">
            </div>
          <div class="sm:col-span-2">
              <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
              <textarea id="alamat" name="alamat" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Domisili"></textarea>
          </div>
          <div class="sm:col-span-2">
                  <label for="berlaku_hingga" class="block mb-2 text-sm font-medium text-gray-900">Berlaku Hingga</label>
                  <!-- <p id="berlaku_hingga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">Seumur Hidup</p> -->
                  <input type="text" name="berlaku_hingga" id="berlaku_hingga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"  required="">
                </div>
          </div>
          <div class="mt-6 flex items-center justify-end gap-x-6">
              <a href="{{ route('user.pengajuan') }}">
                  <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
              </a>
              <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
          </div>
      </form>
  </div>
</section>
</x-layout-user>
