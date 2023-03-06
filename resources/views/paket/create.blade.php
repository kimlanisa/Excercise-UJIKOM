<x-app-layout title="Tambah Data Paket">
    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Form Tambah Data Paket</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('paket.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Paket</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ti ti-user"></i></span>
                                            <input type="text" name="name" class="form-control"
                                                id="basic-icon-default-fullname" value="{{ old('name') }}"
                                                placeholder="Nama Paket ">

                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Laundry</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ti ti-mail"></i></span>
                                            <input type="type" name="jenis"value="{{ old('jenis') }}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="Jenis Laundry">

                                        </div>
                                        @error('jenis')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Paket</label>
                                        <select name="service" class="form-select">
                                            <option value="">Pilih Paket</option>
                                            <option value="satuan">Satuan</option>
                                            <option value="kiloan">Kiloan</option>
                                        </select>
                                        @error('service')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Harga Per-Kg</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ti ti-phone"></i></span>
                                            <input type="number" name="harga" value="{{ old('harga') }}"
                                                id="basic-icon-default-phone" class="form-control phone-mask format_harga"
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
                                            <span class="input-group-text"><i class="ti ti-phone"></i></span>
                                            <input type="number" name="hari" value="{{ old('hari') }}"
                                                id="basic-icon-default-phone" class="form-control phone-mask"
                                                placeholder="Lama Hari">

                                        </div>
                                        @error('hari')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                            <a href="{{ route('paket.index') }}"
                                class="btn btn-danger waves-effect waves-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
