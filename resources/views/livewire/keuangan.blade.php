<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Keuangan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"><a href="#">Keuangan</a></li>
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
                                                <div class="tab-pane fade show active" id="custom-tabs-six-riwayat-rm"
                                                    role="tabpanel" aria-labelledby="custom-tabs-six-riwayat-rm-tab">
                                                    <div class="card-body">
                                                        <div class="col-md-12">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="mb-2">
                                                                                    <span class="text-center">Saldo
                                                                                        Awal</span><br>
                                                                                </div>

                                                                                <p class="form-control">
                                                                                    {{ Laraindo\RupiahFormat::currency($saldo) }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="mb-2">
                                                                                    <span
                                                                                        class="text-center">Pengeluaran</span><br>
                                                                                </div>

                                                                                <p class="form-control">
                                                                                    {{ Laraindo\RupiahFormat::currency($pengeluaran) }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="mb-2">
                                                                                    <span class="text-center">Sisa
                                                                                        Saldo</span><br>
                                                                                </div>

                                                                                <p class="form-control">
                                                                                    {{ Laraindo\RupiahFormat::currency($sisa) }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <a href="{{ route('cetak') }}"
                                                                            class="btn btn-primary btn-flat btn-sm"
                                                                            target="_blank"><i
                                                                                class="fas fa-print mr-2"></i>Cetak
                                                                            Laporan
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>

                                                            <div class="card card-success card-outline">
                                                                <div class="card-header">
                                                                    <div class="card-title">
                                                                        Keuangan
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="cari"
                                                                                wire:model.live='cari'>
                                                                        </div>
                                                                    </div>

                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <th>Nota</th>
                                                                                <th>Tanggal</th>
                                                                                <th>Jumlah</th>
                                                                                <th>Aksi</th>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($post as $item)
                                                                                    <tr wire:key='{{ $item->id }}'>

                                                                                        <td> {{ $item->nota ?? '-' }}
                                                                                            @if ($item->tgl)
                                                                                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->tgl)->isoFormat('D MMMM Y') }}
                                                                                        </td>
                                                                                    @else
                                                                                        <td>-</td>
                                                                                @endif
                                                                                <td>{{ \Laraindo\RupiahFormat::currency($item->transaksi_sum_jumlah ?? 0) }}
                                                                                </td>
                                                                                <td>
                                                                                    <div
                                                                                        class="gap-3 table-actions d-flex align-items-center fs-6">
                                                                                        <div class="mr-2">
                                                                                            <a href="{{ route('transaksi', $item->id) }}"
                                                                                                class="btn btn-info btn-flat btn-sm"><i
                                                                                                    class="fas fa-money-check-alt mr-2"></i>Detail
                                                                                                Transaksi
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                </tr>
                                                                                @endforeach
                                                                            </tbody>
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
