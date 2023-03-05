<x-app-layout title="Edit Data Customer">
    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Form Edit Data Customer</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('customer.update', $customer->kode_user) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">ID Customer</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" disabled="" name="kode_user" class="form-control"
                                                value="{{ $customer->kode_user ?? old('kode_user') }}">
                                        </div>
                                        @error('id_customer')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ti ti-user"></i></span>
                                            <input type="text" name="name" class="form-control"
                                                id="basic-icon-default-fullname"
                                                value="{{ $customer->name ?? old('name') }}" placeholder="John Doe">

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
                                        <label class="form-label">Email</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ti ti-mail"></i></span>
                                            <input type="email"
                                                name="email"value="{{ $customer->email ?? old('email') }}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="email@laundry.com">

                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">No Hp/Wahtsapp</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ti ti-phone"></i></span>
                                            <input type="text" name="no_telp"
                                                value="{{ $customer->no_telp ?? old('no_telp') }}"
                                                id="basic-icon-default-phone" class="form-control phone-mask"
                                                placeholder="+62 813 1233 4422">

                                        </div>
                                        @error('no_telp')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="ti ti-message-dots"></i></span>
                                    <textarea name="alamat" rows="4" class="form-control" placeholder="Jln. Jendral Sudirman No 45">{{ $customer->alamat ?? old('alamat') }}</textarea>
                                </div>
                                @error('alamat')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                            <a href="{{ route('customer.index') }}"
                                class="btn btn-danger waves-effect waves-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
