<x-app-layout title="Data Paket">
    <x-slot name="vendor_css">
        <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
        <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    </x-slot>
    <x-slot name="page_css"></x-slot>

    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- DataTable with Buttons -->
            <x-alert :message="session('success')" />
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <table class="datatables-basic table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis</th>
                                <th>Lama Hari</th>
                                <th>Berat</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Dibuat Oleh</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hargas as $harga)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $harga->jenis }}</td>
                                    <td>{{ $harga->hari }}</td>
                                    <td>{{ $harga->kg }}</td>
                                    <td>{{ Rupiah::getRupiah($harga->harga) }}</td>
                                    <td>
                                        @if ($harga->status == 1)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-danger">Tidak Aktif</span>
                                        @endif
                                    </td>
                                    <td>{{ $harga->harga_user }}</td>
                                        <div class="d-flex">
                                            <div class="d-inline-block">
                                                <a href="javascript:;"
                                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="text-primary ti ti-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end m-0">
                                                    <a href="{{ route('harga.edit', $harga->kode_user) }}"
                                                        class="dropdown-item">Edit</a>
                                                    <form
                                                        action="{{ route('karyawan.destroy', $harga->kode_user) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="dropdown-item text-danger confirm-delete">Hapus</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <x-slot name="vendor_js">
        <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    </x-slot>
    <x-slot name="page_js">
        <script src="../../assets/js/transaksi.js"></script>
        @if (session('success'))
            <script>
                $(document).ready(function() {
                    $('#liveToast').toast('show');
                });
            </script>
        @endif
    </x-slot>
</x-app-layout>
