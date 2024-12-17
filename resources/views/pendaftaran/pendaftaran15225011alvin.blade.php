<!-- resources/views/pendaftaran/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
</head>
<body>
    <h1>DATA PENDAFTARAN</h1>

    <form action="{{ route('pendaftaran.store') }}" method="POST">
        @csrf
        <div>
            <label for="tanggal_daftar">Tanggal Pendaftaran:</label>
            <input type="date" name="tanggal_daftar" id="tanggal_daftar" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required>
        </div>
        <br>
        <div>
            <label for="pasien_id">Pilih Pasien:</label>
            <select name="pasien_id" id="pasien_id" required>
                <option value="">-- Pilih Pasien --</option>
                @foreach($pasiens as $pasien)
                    <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <label for="dokter_id">Pilih Dokter:</label>
            <select name="dokter_id" id="dokter_id" required>
                <option value="">-- Pilih Dokter --</option>
                @foreach($dokters as $dokter)
                    <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit">Daftar</button><br>
    </form>
    <br>
    <table border="1" width="100%" >
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Pasien</th>
                <th>Umur</th>
                <th>No Antrian</th>
                <th>Dokter</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendaftaran as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->formatted_tanggal_daftar }}</td>
                    <td>{{ $item->pasien->nama }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->pasien->tanggal_lahir)->age }} tahun</td>
                    <td>{{ $item->nomor_antrian }}</td>
                    <td>{{ $item->dokter->nama }} <br>
                        <small>{{ $item->dokter->spesialisasi }}</small>
                    </td>
                    <td>
                        <form action="{{ route('pendaftaran.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
