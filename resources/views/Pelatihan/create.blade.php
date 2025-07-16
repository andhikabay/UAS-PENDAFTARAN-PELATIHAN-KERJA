<x-app-layout class="bg-[#EAF6FF]">
  <x-slot name="header">
    <h2 class="text-xl font-semibold text-[#2F2F2F]">{{ isset($pelatihan)?'Edit':'Tambah' }} Pelatihan</h2>
  </x-slot>
  <div class="py-8 px-4 max-w-2xl mx-auto">
    <div class="bg-[#D0EBFF] p-8 rounded-2xl shadow-[8px_8px_12px_#B0CFE6,-8px_-8px_12px_#FFFFFF] space-y-6">
      @if($errors->any())<div class="text-red-600 bg-red-100 p-4 rounded space-y-2">@foreach($errors->all() as $e)<div>• {{ $e }}</div>@endforeach</div>@endif
      <form action="{{ isset($pelatihan)?route('pelatihan.update',$pelatihan):route('pelatihan.store') }}" method="POST" class="space-y-6">
        @csrf @isset($pelatihan) @method('PUT') @endisset
        <div><label class="block text-gray-700 font-medium">Judul</label><input type="text" name="judul" value="{{ old('judul',$pelatihan->judul??'') }}" class="mt-1 w-full border-gray-300 rounded-md shadow-inner focus:ring-[#74C0FC] focus:border-[#74C0FC]" required></div>
        <div><label class="block text-gray-700 font-medium">Deskripsi</label><textarea name="deskripsi" rows="3" class="mt-1 w-full border-gray-300 rounded-md shadow-inner focus:ring-[#74C0FC] focus:border-[#74C0FC]">{{ old('deskripsi',$pelatihan->deskripsi??'') }}</textarea></div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div><label class="block text-gray-700 font-medium">Tanggal Mulai</label><input type="date" name="tanggal_mulai" value="{{ old('tanggal_mulai',$pelatihan->tanggal_mulai??'') }}" class="mt-1 w-full border-gray-300 rounded-md shadow-inner focus:ring-[#74C0FC] focus:border-[#74C0FC]" required></div>
          <div><label class="block text-gray-700 font-medium">Tanggal Selesai</label><input type="date" name="tanggal_selesai" value="{{ old('tanggal_selesai',$pelatihan->tanggal_selesai??'') }}" class="mt-1 w-full border-gray-300 rounded-md shadow-inner focus:ring-[#74C0FC] focus:border-[#74C0FC]" required></div>
        </div>
        <div><label class="block text-gray-700 font-medium">Kuota</label><input type="number" name="kuota" value="{{ old('kuota',$pelatihan->kuota??'') }}" class="mt-1 w-full border-gray-300 rounded-md shadow-inner focus:ring-[#74C0FC] focus:border-[#74C0FC]" required></div>
        <div class="flex space-x-4 pt-4">
          <button type="submit" class="px-6 py-2 bg-[#74C0FC] text-white rounded-full shadow hover:bg-[#A5D8FF] transition">{{ isset($pelatihan)?'Update':'Simpan' }}</button>
          <a href="{{ route('pelatihan.index') }}" class="self-center text-[#2F2F2F] hover:underline">Batal</a>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>
