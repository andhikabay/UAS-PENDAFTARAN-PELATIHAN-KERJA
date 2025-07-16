<x-app-layout class="bg-[#EAF6FF]">
  <x-slot name="header"><h2 class="text-2xl font-sans font-semibold text-[#2F2F2F]">Dashboard</h2></x-slot>
  <div class="py-6 px-4 space-y-8 max-w-7xl mx-auto">

    {{-- Statistik --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
      @foreach(['Peserta','Pelatihan','Pendaftaran'] as $key)
        <div class="bg-[#D0EBFF] rounded-2xl p-6 shadow-[9px_9px_16px_#B0CFE6,-9px_-9px_16px_#FFFFFF]">
          <div class="text-sm text-[#2F2F2F] font-medium">{{ $key }}</div>
          <div class="mt-2 text-3xl font-bold text-[#2F2F2F]">{{ ${'jumlah'.$key} }}</div>
        </div>
      @endforeach
    </div>

    {{-- Charts --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <div class="bg-[#D0EBFF] rounded-2xl px-6 py-4 shadow-[6px_6px_12px_#B0CFE6,-6px_-6px_12px_#FFFFFF]">
        <h3 class="text-lg font-semibold text-[#2F2F2F] mb-4">Status Pendaftaran</h3>
        <div class="flex justify-center py-2">
          <canvas id="statusChart" class="w-[160px] h-[160px]"></canvas>
        </div>
      </div>
      <div class="bg-[#D0EBFF] rounded-2xl px-6 py-4 shadow-[6px_6px_12px_#B0CFE6,-6px_-6px_12px_#FFFFFF]">
        <h3 class="text-lg font-semibold text-[#2F2F2F] mb-4">Peserta per Pelatihan</h3>
        <canvas id="pelatihanChart" class="w-full h-64"></canvas>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    new Chart(document.getElementById('statusChart'), {
      type: 'pie',
      data: {
        labels: {!! json_encode(array_keys($statusStat->toArray())) !!},
        datasets: [{ data: {!! json_encode(array_values($statusStat->toArray())) !!}, backgroundColor: ['#74C0FC','#A5D8FF','#D0EBFF'] }]
      }
    });
    new Chart(document.getElementById('pelatihanChart'), {
      type: 'bar',
      data: {
        labels: {!! json_encode($pesertaPerPelatihan->pluck('judul')) !!},
        datasets: [{ label: 'Peserta', data: {!! json_encode($pesertaPerPelatihan->pluck('pendaftaran_count')) !!}, backgroundColor: '#74C0FC' }]
      },
      options: { responsive: true, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true } } }
    });
  </script>
</x-app-layout>
