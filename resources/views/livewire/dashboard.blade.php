{{-- <div>
    <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div>
              <label for="start_date">Dari:</label>
              <input type="date" id="start_date" wire:model.live="startDate" class="form-control">
            </div>
          </div>
          <div class="col-md-2">
            <div>
              <label for="end_date">Sampai:</label>
              <input type="date" id="end_date" wire:model.live="endDate" class="form-control">
            </div>
          </div>
            <div class="col-md-12">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            
        </div>
    </div>

</div>
@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            @foreach($data as $item)
            '{{ $item->nopol }}',
            @endforeach
        ],
        datasets: [{
          label: 'Pemeliharaan',
          borderColor: '#36A2EB',
          backgroundColor: '#9BD0F5',
          data: [
            @foreach($data as $item)
            {{ $item->pemeliharaan_count }},
            @endforeach
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
@endpush --}}

<div>
  <livewire:chart.kendaraan-chart>
</div>
