<!DOCTYPE html>
<html>
<head>
    <title>Soal 1</title>
</head>
<body>
    <h1>Soal 1: Total Transaksi dan Nominal</h1>
    <table border="1">
        <tr>
            <th>Peserta ID</th>
            <th>Nama Pemilik QRIS</th>
            <th>Nama Usaha</th>
            <th>Total Transaksi</th>
            <th>Total Nominal Transaksi</th>
        </tr>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row->peserta_id }}</td>
                <td>{{ $row->nama_pemilik_qris }}</td>
                <td>{{ $row->nama_usaha }}</td>
                <td>{{ $row->total_transaksi }}</td>
                <td>Rp.{{ $row->total_nominal_transaksi }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>