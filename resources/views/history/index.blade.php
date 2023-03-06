<x-app-layout title="Laporan Transaksi">
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
                                <th>TGL Transaksi</th>
                                <th>Nama Konsumen</th>
                                <th>Paket Laundry</th>
                                <th>Status Order</th>
                                <th>Status Pembayaran</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($karyawans as $karyawan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $karyawan->kode_user }}</td>
                                    <td>{{ $karyawan->name }}</td>
                                    <td>{{ $karyawan->email }}</td>
                                    <td>{{ $karyawan->alamat }}</td>
                                    <td>{{ $karyawan->no_telp }}</td>
                                    <td>{{ $karyawan->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="d-inline-block">
                                                <a href="javascript:;"
                                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="text-primary ti ti-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end m-0">
                                                    <a href="{{ route('karyawan.show', $karyawan->kode_user) }}"
                                                        class="dropdown-item">Detail</a>
                                                    <a href="{{ route('karyawan.edit', $karyawan->kode_user) }}"
                                                        class="dropdown-item">Edit</a>
                                                    <form
                                                        action="{{ route('karyawan.destroy', $karyawan->kode_user) }}"
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
                            @endforeach --}}
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
        <script src="../../assets/js/history.js"></script>
        @if (session('success'))
            <script>
                $(document).ready(function() {
                    $('#liveToast').toast('show');
                });
            </script>
        @endif
    </x-slot>
</x-app-layout>
