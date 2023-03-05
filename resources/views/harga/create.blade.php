<x-app-layout title="Tambah Data Paket">
    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Form Tambah Data Paket</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('harga.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label"></label>
                                        <select name="id_karyawan" class="form-select">
                                            <option value="">Pilih Karyawan</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}" {{ old('id_karyawan') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                        </select>
                                        @error('id_karyawan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Paket</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ti ti-file-invoice"></i></span>
                                            <input type="text" name="jenis" class="form-control"
                                                id="basic-icon-default-fullname" value="{{ old('jenis') }}"
                                                placeholder="Tambahkan Jenis Paket">

                                        </div>
                                        @error('jenis')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Harga Per-Kg</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="ti ti-mail"></i></span>
                                        <input type="text" name="harga" value="{{ old('harga') }}"
                                            id="basic-icon-default-company" class="form-control"
                                            placeholder="Harga Per-Kg" autocomplete="off">

                                    </div>
                                    @error('harga')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Lama Hari</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="ti ti-mobile"></i></span>
                                        <input type="number" name="hari" value="{{ old('hari') }}"
                                            id="basic-icon-default-phone" class="form-control"
                                            placeholder="Lama Hari" autocomplete="off">

                                    </div>
                                    @error('hari')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                            <a href="{{ route('harga.index') }}"
                                class="btn btn-danger waves-effect waves-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
