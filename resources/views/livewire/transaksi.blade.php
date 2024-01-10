    <div>
        <x-slot name="header">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">Transaksi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item active">Master</li> --}}
                        <li class="breadcrumb-item active"><a href="#">Transaksi</a></li>
                    </ol>
                </div>
            </div>
        </x-slot>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="tab-pane fade active show">
                                <div class="tab-pane active show fade" id="custom-tabs-one-rm" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-rm-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-success card-outline card-tabs">
                                                <div class="tab-content" id="custom-tabs-six-tabContent">
                                                    <div class="tab-pane fade show active"
                                                        id="custom-tabs-six-riwayat-rm" role="tabpanel"
                                                        aria-labelledby="custom-tabs-six-riwayat-rm-tab">
                                                        <div class="card-body">
                                                            <div class="col-md-12">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6">

                                                                            <div class="mb-2 row">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 col-form-label">Nomor
                                                                                    Polisi
                                                                                    <small
                                                                                        class="text-danger">*</small></label>
                                                                                <div class="col-sm-8">
                                                                                    <select class="form-control"
                                                                                        wire:model.defer='form.kendaraan_id'
                                                                                        disabled>
                                                                                        <option value="">Pilih
                                                                                            Kendaraan</option>
                                                                                        @foreach ($listKendaraan ?? [] as $item)
                                                                                            <option
                                                                                                value="{{ $item['nopol'] }}">
                                                                                                {{ $item['nopol'] . ' (' . $item['merk'] . '/' . $item['tipe'] . ')' }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    @error('form.kendaraan_id')
                                                                                        <span
                                                                                            class="form-text text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-2 row">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 col-form-label">Tanggal
                                                                                    <small
                                                                                        class="text-danger">*</small></label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="date"
                                                                                        class="form-control"
                                                                                        wire:model='form.tgl' disabled>
                                                                                    @error('form.tgl')
                                                                                        <span
                                                                                            class="form-text text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mb-2 row">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 col-form-label">Pengguna
                                                                                    Kendaraan
                                                                                    <small
                                                                                        class="text-danger">*</small></label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        wire:model='form.pengguna_kendaraan'
                                                                                        placeholder="Pengguna Kendaraan"
                                                                                        disabled>
                                                                                    @error('form.pengguna_kendaraan')
                                                                                        <span
                                                                                            class="form-text text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <br>
                                                                <form wire:submit='save'>

                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="mb-2 row">
                                                                                    <label for="inputEmail3"
                                                                                        class="col-sm-4 col-form-label">Jenis
                                                                                        Perawatan
                                                                                        <small
                                                                                            class="text-danger">*</small></label>
                                                                                    <div class="col-sm-8">
                                                                                        <select class="form-control"
                                                                                            wire:model.defer='form2.perawatan_id'>
                                                                                            <option value="">Pilih
                                                                                                Perawatan</option>
                                                                                            @foreach ($listPerawatan ?? [] as $item)
                                                                                                <option
                                                                                                    value="{{ $item['id'] }}">
                                                                                                    {{ $item['nama'] }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        @error('form2.perawatan_id')
                                                                                            <span
                                                                                                class="form-text text-danger">{p{
                                                                                                $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>

                                                                                <div class="mb-2 row">
                                                                                    <label for="inputEmail3"
                                                                                        class="col-sm-4 col-form-label">Kilometer
                                                                                        Kendaraan
                                                                                        <small
                                                                                            class="text-danger">*</small></label>
                                                                                    <div class="col-sm-8">
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            wire:model='form2.kilometer'>
                                                                                        @error('form2.kilometer')
                                                                                            <span
                                                                                                class="form-text text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>

                                                                                <div class="mb-2 row">
                                                                                    <label for="inputEmail3"
                                                                                        class="col-sm-4 col-form-label">Tempat
                                                                                        <small
                                                                                            class="text-danger">*</small></label>
                                                                                    <div class="col-sm-8">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            wire:model='form2.tempat'>
                                                                                        @error('form2.tempat')
                                                                                            <span
                                                                                                class="form-text text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">

                                                                                <div class="mb-2 row">
                                                                                    <label for="inputEmail3"
                                                                                        class="col-sm-4 col-form-label">Nama
                                                                                        Barang / Jasa
                                                                                        <small
                                                                                            class="text-danger">*</small></label>
                                                                                    <div class="col-sm-8">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            wire:model='form2.nama'>
                                                                                        @error('form2.nama')
                                                                                            <span
                                                                                                class="form-text text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>

                                                                                <div class="mb-2 row">
                                                                                    <label for="inputEmail3"
                                                                                        class="col-sm-4 col-form-label">Volume
                                                                                        <small
                                                                                            class="text-danger">*</small></label>
                                                                                    <div class="col-sm-8">
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            wire:model.live='form2.volume'>
                                                                                        @error('form2.volume')
                                                                                            <span
                                                                                                class="form-text text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>

                                                                                <div class="mb-2 row">
                                                                                    <label for="inputEmail3"
                                                                                        class="col-sm-4 col-form-label">Satuan
                                                                                        <small
                                                                                            class="text-danger">*</small>
                                                                                    </label>
                                                                                    <div class="col-sm-8">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            wire:model='form2.satuan'>
                                                                                        @error('form2.satuan')
                                                                                            <span
                                                                                                class="form-text text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-2 row">
                                                                                    <label for="inputEmail3"
                                                                                        class="col-sm-4 col-form-label">Harga
                                                                                        Satuan
                                                                                        <small
                                                                                            class="text-danger">*</small>
                                                                                    </label>
                                                                                    <div class="col-sm-8">
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            wire:model.live='form2.harga_satuan'>
                                                                                        @error('form2.harga_satuan')
                                                                                            <span
                                                                                                class="form-text text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-2 row">
                                                                                    <label for="inputEmail3"
                                                                                        class="col-sm-4 col-form-label">Jumlah
                                                                                        <small
                                                                                            class="text-danger">*</small>
                                                                                    </label>
                                                                                    <div class="col-sm-8">
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            wire:model='form2.jumlah'
                                                                                            readonly>
                                                                                        @error('form2.jumlah')
                                                                                            <span
                                                                                                class="form-text text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                        <span>{{ Terbilang::make($form2['jumlah'] ?? 0, ' rupiah', '') }}</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-3 card-footer">
                                                                        <button type="submit"
                                                                            class="btn btn-info">Simpan</button>
                                                                    </div>
                                                                </form>
                                                                <br>

                                                                <div class="card card-success card-outline">
                                                                    <div class="card-header">
                                                                        <div class="card-title">
                                                                            Transaksi
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    placeholder="cari"
                                                                                    wire:model.live='cari'>
                                                                            </div>
                                                                        </div>

                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <th>No</th>
                                                                                    <th>Jenis Perawatan</th>
                                                                                    <th>Nama</th>
                                                                                    <th>Tempat</th>
                                                                                    <th>Harga</th>
                                                                                    <th>Aksi</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ($post as $item)
                                                                                        <tr
                                                                                            wire:key='{{ $item->id }}'>
                                                                                            <td>{{ $loop->index + $post->firstItem() }}
                                                                                            </td>
                                                                                            <td> {{ $item->perawatan->nama ?? '-' }}
                                                                                            </td>
                                                                                            <td> {{ $item->nama ?? '-' }}
                                                                                            <td> {{ $item->tempat ?? '-' }}
                                                                                            </td>
                                                                                            <td> {{ \Laraindo\RupiahFormat::currency($item->jumlah) }}
                                                                                            </td>
                                                                                            <td>
                                                                                                <div
                                                                                                    class="gap-3 table-actions d-flex align-items-center fs-6">
                                                                                                    <div
                                                                                                        class="mr-2">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            wire:click="getEdit('{{ $item->id }}')"
                                                                                                            class="btn btn-warning btn-flat btn-sm"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="left"
                                                                                                            title="Edit"><i
                                                                                                                class="fas fa-pencil-alt"></i>
                                                                                                            Edit
                                                                                                        </button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="btn btn-danger btn-flat btn-sm"
                                                                                                            wire:click="delete('{{ $item->id }}')"><i
                                                                                                                class="fas fa-trash"></i>
                                                                                                            Hapus
                                                                                                        </button>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    @endforeach
                                                                                </tbody>
                                                                                <tfoot>
                                                                                    <th colspan="4">Total</th>
                                                                                    <th>{{ \Laraindo\RupiahFormat::currency($total) }}
                                                                                    </th>
                                                                                </tfoot>
                                                                            </table>
                                                                        </div>
                                                                        {{ $post->links() }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
        </section>
    </div>
