<x-app-layout title="Tambah Data Paket">
    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Form Tambah Data Paket</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pembayaran.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Pembayaran</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ti ti-user"></i></span>
                                            <input type="text" name="nama" class="form-control"
                                                id="basic-icon-default-fullname" value="{{ old('nama') }}"
                                                placeholder="John Doe">

                                        </div>
                                        @error('nama')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">No Rekening / Telp </label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ti ti-mail"></i></span>
                                            <input type="number" name="no_rekening"value="{{ old('no_rekening') }}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="email@laundry.com">

                                        </div>
                                        @error('no_rekening')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Pemilik</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ti ti-phone"></i></span>
                                            <input type="text" name="nama_pemilik" value="{{ old('nama_pemilik') }}"
                                                id="basic-icon-default-phone" class="form-control phone-mask"
                                                placeholder="+62 813 1233 4422">

                                        </div>
                                        @error('nama_pemilik')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                            <a href="{{ route('pembayaran.index') }}"
                                class="btn btn-danger waves-effect waves-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
