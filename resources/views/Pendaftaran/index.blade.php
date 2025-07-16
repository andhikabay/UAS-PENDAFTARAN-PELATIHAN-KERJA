<x-app-layout class="bg-[#EAF6FF]">
  <x-slot name="header"><h2 class="text-xl font-semibold text-[#2F2F2F]">Daftar Pendaftaran</h2></x-slot>
  <div class="py-6 px-4 max-w-7xl mx-auto space-y-6">
    <a href="{{ route('pendaftaran.create') }}" class="px-4 py-2 bg-[#A5D8FF] text-[#2F2F2F] rounded-full shadow-[4px_4px_8px_#B0CFE6,-4px_-4px_8px_#FFFFFF] hover:bg-[#74C0FC] transition">+ Tambah Data</a>
    @if(session('success'))<div class="px-4 py-3 bg-white rounded-full shadow text-sm text-[#2F2F2F]">{{ session('success') }}</div>@endif
    <div class="bg-[#D0EBFF] rounded-2xl shadow-[8px_8px_12px_#B0CFE6,-8px_-8px_12px_#FFFFFF] overflow-x-auto">
      <table class="min-w-full text-sm text-[#2F2F2F]">
        <thead class="bg-[#EAF6FF]">
          <tr>
            <th class="px-6 py-3 text-left">Peserta</th>
            <th class="px-6 py-3 text-left">Pelatihan</th>
            <th class="px-6 py-3 text-left">Status</th>
            <th class="px-6 py-3 text-left">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse($pendaftarans as $item)
            <tr class="border-b">
              <td class="px-6 py-4">{{ $item->peserta->nama }}</td>
              <td class="px-6 py-4">{{ $item->pelatihan->judul }}</td>
              <td class="px-6 py-4">{{ ucfirst($item->status) }}</td>
              <td class="px-6 py-4 space-x-2">
                <a href="{{ route('pendaftaran.edit',$item) }}" class="px-3 py-1 bg-[#A5D8FF] rounded-full hover:bg-[#74C0FC] transition">Edit</a>
                <form action="{{ route('pendaftaran.destroy',$item) }}" method="POST" class="inline-block">@csrf @method('DELETE')<button onclick="return confirm('Yakin?')" class="px-3 py-1 bg-[#A5D8FF] rounded-full hover:bg-[#74C0FC] transition">Hapus</button></form>
              </td>
            </tr>
          @empty
            <tr><td colspan="4" class="px-6 py-4 text-center">Belum ada data.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
    <div class="flex justify-end">{{ $pendaftarans->links() }}</div>
  </div>
</x-app-layout>
