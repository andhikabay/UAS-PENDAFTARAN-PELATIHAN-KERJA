<x-app-layout class="bg-[#EAF6FF]">
  <x-slot name="header"><h2 class="text-xl font-semibold text-[#2F2F2F]">Edit Pendaftaran</h2></x-slot>
  <div class="py-8 px-4 max-w-2xl mx-auto">
    <div class="bg-[#D0EBFF] p-8 rounded-2xl shadow-[8px_8px_12px_#B0CFE6,-8px_-8px_12px_#FFFFFF] space-y-6">
      @if($errors->any())<div class="text-red-600 bg-red-100 p-4 rounded space-y-2">@foreach($errors->all() as $e)<div>• {{ $e }}</div>@endforeach</div>@endif
      <form action="{{ route('pendaftaran.update',$pendaftaran) }}" method="POST" class="space-y-6">
        @csrf @method('PUT')
        <div><label class="block text-gray-700 font-medium">Peserta</label><select name="peserta_id" required class="mt-1 w-full border-gray-300 rounded-md shadow-inner focus:ring-[#74C0FC] focus:border-[#74C0FC]">@foreach($pesertas as $p)<option value="{{ $p->id }}" {{ old('peserta_id',$pendaftaran->peserta_id)==$p->id?'selected':'' }}>{{ $p->nama }}</option>@endforeach</select></div>
        <div><label class="block text-gray-700 font-medium">Pelatihan</label><select name="pelatihan_id" required class="mt-1 w-full border-gray-300 rounded-md shadow-inner focus:ring-[#74C0FC] focus:border-[#74C0FC]">@foreach($pelatihans as $pl)<option value="{{ $pl->id }}" {{ old('pelatihan_id',$pendaftaran->pelatihan_id)==$pl->id?'selected':'' }}>{{ $pl->judul }}</option>@endforeach</select></div>
        <div><label class="block text-gray-700 font-medium">Status</label><select name="status" required class="mt-1 w-full border-gray-300 rounded-md shadow-inner focus:ring-[#74C0FC] focus:border-[#74C0FC]">@foreach(['terdaftar','mengikuti','lulus'] as $st)<option value="{{ $st }}" {{ old('status',$pendaftaran->status)==$st?'selected':'' }}>{{ ucfirst($st) }}</option>@endforeach</select></div>
        <div class="flex space-x-4 pt-4"><button type="submit" class="px-6 py-2 bg-[#A5D8FF] text-[#2F2F2F] rounded-full shadow hover:bg-[#74C0FC] transition">Update</button><a href="{{ route('pendaftaran.index') }}" class="self-center text-[#2F2F2F] hover:underline">Batal</a></div>
      </form>
    </div>
  </div>
</x-app-layout>
