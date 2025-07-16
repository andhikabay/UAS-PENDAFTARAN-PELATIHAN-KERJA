<x-app-layout class="bg-[#EAF6FF]">
  <x-slot name="header"><h2 class="text-xl font-semibold text-[#2F2F2F]">Edit Peserta</h2></x-slot>
  <div class="py-8 px-4 max-w-2xl mx-auto">
    <div class="bg-[#D0EBFF] p-8 rounded-2xl shadow-[8px_8px_12px_#B0CFE6,-8px_-8px_12px_#FFFFFF] space-y-6">
      @if($errors->any())<div class="text-red-600 bg-red-100 p-4 rounded space-y-2">@foreach($errors->all() as $e)<div>• {{ $e }}</div>@endforeach</div>@endif
      <form action="{{ route('peserta.update',$peserta) }}" method="POST" class="space-y-6">
        @csrf @method('PUT')
        @foreach(['nama','email','no_hp'] as $f)
          <div>
            <label class="block text-gray-700 font-medium">{{ ucfirst(str_replace('_',' ',$f)) }}</label>
            <input type="{{ $f=='email'?'email':'text' }}" name="{{ $f }}" value="{{ old($f,$peserta->{$f}) }}" class="mt-1 w-full border-gray-300 rounded-md shadow-inner focus:ring-[#74C0FC] focus:border-[#74C0FC]" required>
          </div>
        @endforeach
        <div>
          <label class="block text-gray-700 font-medium">Alamat</label>
          <textarea name="alamat" rows="3" class="mt-1 w-full border-gray-300 rounded-md shadow-inner focus:ring-[#74C0FC] focus:border-[#74C0FC]" required>{{ old('alamat',$peserta->alamat) }}</textarea>
        </div>
        <div class="flex space-x-4 pt-4">
          <button type="submit" class="px-6 py-2 bg-[#A5D8FF] text-[#2F2F2F] rounded-full shadow hover:bg-[#74C0FC] transition">Update</button>
          <a href="{{ route('peserta.index') }}" class="self-center text-[#2F2F2F] hover:underline">Batal</a>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>
