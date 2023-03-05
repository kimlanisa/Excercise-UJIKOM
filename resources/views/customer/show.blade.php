<x-app-layout title="Details Customer">
    <x-slot name="vendor_css">
        <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    </x-slot>
    <x-slot name="page_css">
        <style>
            .row {
                display: flex;
                flex-wrap: nowrap !important;
                margin-right: -14px;
                margin-left: -3.99px !important;
            }

            @media(max-width: 768px) {
                .row {
                    display: flex;
                    flex-wrap: wrap !important;
                    margin-right: -14px;
                    margin-left: -3.99px !important;
                }
            }
        </style>
    </x-slot>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Data Customer</h4>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="card-body">
                            <div class="card-text">
                                <dl class="row">
                                    <dt class="col-sm-4">Nama</dt>
                                    <dd class="col-sm-4">: {{ $customer->name }}</dd>
                                </dl>

                                <dl class="row">
                                    <dt class="col-sm-4">Email</dt>
                                    <dd class="col-sm-4">: {{ $customer->email }}</dd>
                                </dl>

                                <dl class="row">
                                    <dt class="col-sm-4">No. Telepon</dt>
                                    <dd class="col-sm-4">:
                                        {{ $customer->no_telp == 0 ? 'Belum Input' : $customer->no_telp }}</dd>
                                </dl>

                                <dl class="row">
                                    <dt class="col-sm-4">Alamat</dt>
                                    <dd class="col-sm-4">: {{ $customer->alamat }}</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <dl class="row">
                                    <dt class="col-sm-4">Total Kg</dt>
                                    <dd class="col-sm-4">: 20 Kg</dd>
                                </dl>

                                <dl class="row">
                                    <dt class="col-sm-4">Total Rupiah</dt>
                                    <dd class="col-sm-4">:
                                        Rp. 340.000
                                    </dd>
                                </dl>

                                <dl class="row">
                                    <dt class="col-sm-4">Total Laundry</dt>
                                    <dd class="col-sm-4">: 6 Kali</dd>
                                </dl>

                                <dl class="row">
                                    <dt class="col-sm-4">Laundry Terakhir</dt>
                                    <dd class="col-sm-4">: 20-10-2021
                                    </dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-4">Pendaftaran Akun</dt>
                                    <dd class="col-sm-4">: {{ $customer->created_at }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 pt-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Transaksi Customer</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive m-t-0">
                            <table class="datatables-show table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Invoice</th>
                                        <th>Tgl Transaksi</th>
                                        <th>Tgl Diambil</th>
                                        <th>Jumlah KG</th>
                                        <th>Jenis Pembayaran</th>
                                        <th>Status Transaksi</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="vendor_js">
        <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    </x-slot>
    <x-slot name="page_js">
        <script src="../../assets/js/customer.js"></script>
    </x-slot>
</x-app-layout>
