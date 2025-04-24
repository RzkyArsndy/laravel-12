@props(['sekolah', 'selected' => null])

<div class="mb-4">
    <label for="sekolah" class="form-label">Pilih Sekolah</label>
    <select name="sekolah_id" id="sekolah" class="form-control" required>
        <option value="">-- Pilih Sekolah --</option>
        @foreach ($sekolah as $item)
            <option value="{{ $item->id }}" {{ $selected == $item->id ? 'selected' : '' }}>
                {{ $item->nama_sekolah }}
            </option>
        @endforeach
    </select>
</div>
