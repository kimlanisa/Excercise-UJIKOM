<x-app-layout title="Detail Paket">
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
                    <h4 class="card-title">Detail Data Paket</h4>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="card-body">
                            <div class="card-text">
                                <dl class="row">
                                    <dt class="col-sm-4">Nama</dt>
                                    <dd class="col-sm-4">: {{ $karyawan->name }}</dd>
                                </dl>

                                <dl class="row">
                                    <dt class="col-sm-4">Email</dt>
                                    <dd class="col-sm-4">: {{ $karyawan->email }}</dd>
                                </dl>

                                <dl class="row">
                                    <dt class="col-sm-4">No. Telepon</dt>
                                    <dd class="col-sm-4">:
                                        {{ $karyawan->no_telp == 0 ? 'Belum Input' : $karyawan->no_telp }}</dd>
                                </dl>

                                <dl class="row">
                                    <dt class="col-sm-4">Alamat</dt>
                                    <dd class="col-sm-4">: {{ $karyawan->alamat }}</dd>
                                </dl>
                            </div>
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
        <script src="../../assets/js/paket.js"></script>
    </x-slot>
</x-app-layout>
