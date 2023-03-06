{{-- <x-app-layout title="Tambah Transaksi">
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
 --}}

@extends('layouts.backend')
@section('title','Karyawan - Invoice Customer')
@section('header','Invoice Customer')
@section('content')
<div class="col-md-12">
    <div class="card card-body printableArea">
        <h3><b>INVOICE</b> <span class="pull-right">{{$data->invoice}}</span></h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <address>
                        <h3> &nbsp;<b class="text-danger">{{$data->user->nama_cabang}}</b></h3>
                        <p class="text-muted m-l-5"> Diterima Oleh <span style="margin-left:20px"> </span>: {{$data->user->name}}
                            <br/> Alamat <span style="margin-left:70px"> </span>: {{$data->user->alamat_cabang}},
                            <br/> No. Telp <span style="margin-left:65px"> </span>: {{$data->user->no_telp}}
                            </p>
                    </address>
                </div>
                <div class="pull-right text-right">
                    <address>
                        <h3>Detail Order Customer :</h3>
                        <p class="text-muted m-l-30">
                            {{$data->customers->nama}}
                            <br/> {{$data->customers->alamat}}
                            <br/> {{$data->customers->no_telp}}</p>
                        <p class="m-t-30"><b>Tanggal Masuk :</b> <i class="fa fa-calendar"></i> {{carbon\carbon::parse($data->tgl_transaksi)->format('d-m-Y')}}</p>
                        <p><b>Tanggal Diambil :</b> <i class="fa fa-calendar"></i>
                            @if ($data->tgl_ambil == "")
                                Belum Diambil
                            @else
                            {{\carbon\carbon::parse($data->tgl_ambil)->format('d-m-Y')}}
                            @endif
                        </p>
                    </address>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive m-t-20" style="clear: both;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Jenis Pakaian</th>
                                <th class="text-right">Berat</th>
                                <th class="text-right">Harga</th>
                                <th class="text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoice as $item)
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>{{$item->price->jenis}}</td>
                                    <td class="text-right">{{$item->kg}} / kg</td>
                                    <td class="text-right">{{Rupiah::getRupiah($item->harga)}} /kg</td>
                                    <td class="text-right">
                                        <input type="hidden" value="{{$hitung = $item->kg * $item->harga}}">
                                        <p>{{Rupiah::getRupiah($hitung)}}</p>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <div class="pull-left m-t-10">
                    <h6 style="font-weight:bold">Metode Pembayaran :</h6>
                    <ol>
                      @foreach ($bank as $banks)
                        <li style="color: white"> {{$banks->nama_bank}} <br> {{$banks->no_rekening}} a/n {{$banks->nama_pemilik}}</li>
                      @endforeach
                    </ol>
                </div>
                <div class="pull-right m-t-10 text-right">
                    <p>Total : {{Rupiah::getRupiah($hitung)}}</p>
                    <p>Disc @if ($item->disc == "")
                        (0 %)
                    @else
                        ({{$item->disc}} %)
                    @endif :  </p>
                    <hr>
                    <h3><b>Total Bayar :</b> {{Rupiah::getRupiah($item->harga_akhir)}}</h3>
                </div>
                @endforeach
                <div class="clearfix"></div>
                <hr>
                <div class="text-right">
                    <a href="{{url('pelayanan')}}" class="btn btn-outline btn-danger" style="color:white">Back</a>
                    <a href="{{url('cetak-invoice/'.$item->id. '/print')}}" target="_blank" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
