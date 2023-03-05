<x-app-layout title="Tambah Transaksi">
    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Form Tambah Transaksi</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('transaksi.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label"></label>
                                        <select name="id_pelanggan" class="form-select select2 @error('id_costumer') is-invalid @enderror">
                                            <option value="">Pilih Pelanggan</option>
                                            @foreach ($customers as $item)
                                                <option value="{{ $item->id }}" {{ old('id_costumer') == $costumers->id ? 'selected' : '' }}> {{ $item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('id_costumer')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">No Transaksi</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ti ti-file-invoice"></i></span>
                                            <input type="text" name="invoice" class="form-control"
                                                id="basic-icon-default-fullname" value="{{ $newID }}"
                                                readonly">

                                        </div>
                                        @error('invoice')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Berat</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="ti ti-mail"></i></span>
                                        <input type="text" name="kg" value="{{ old('kg') }}"
                                            id="basic-icon-default-company" class="form-control"
                                            placeholder="Berat Cucian" autocomplete="off">

                                    </div>
                                    @error('kg')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Status Pembayaran</label>
                                    <select name="status_pembayaran" class="form-select" >
                                        <option value="">Pilih Status Pembayaran</option>
                                        <option value="Lunas" {{ old('status_pembayaran') == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                                        <option value="Belum Lunas" {{ old('status_pembayaran') == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
                                    </select>

                                    </div>
                                    @error('status_pembayaran')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Pembayaran</label>
                                        <select name="jenis_pembayaran" class="form-select" >
                                            <option value="">Pilih Jenis Pembayaran</option>
                                            <option value="Lunas" {{ old('jenis_pembayaran') == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                                            <option value="Belum Lunas" {{ old('jenis_pembayaran') == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
                                        </select>

                                        </div>
                                        @error('jenis_pembayaran')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Paket</label>
                                        <select id="id "name="harga_id" class="form-select" >
                                            <option value="">Pilih Paket</option>
                                            @foreach (paket as pkt)
                                                <option value="{{ $pkt->id }}" {{ old('harga_id') == $pkt->id ? 'selected' : '' }}> {{ $pkt->nama_paket}}</option>
                                            @endforeach
                                        </select>

                                        </div>
                                        @error('harga_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span id="select-hari"></span>
                                </div>
                                <div class="col-md-2">
                                    <span id="select-harga"></span>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label class="form-label">Disc</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ti ti-file-invoice"></i></span>
                                            <input type="number" name="disc" class="form-control"   
                                                id="basic-icon-default-fullname"
                                                placeholder="Tulis Disc">

                                        </div>
                                        @error('disc')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                            <a href="{{ route('transaksi.index') }}"
                                class="btn btn-danger waves-effect waves-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
