<!DOCTYPE html>
<html>
<head>
<title>Kegiatan 2</title>
</head>
<body>
<h2>TUGAS KEGIATAN 2</h2>
<h3>Menampilkan Daftar Anggota Perpustakaan</h3>

</form>
<p>Mencari Data Anggota</p>
<form action="/anggota/lain" method="GET">

<input type="submit" value="Berikutnya">
</form>

</form>
<p>Daftar Peminjam</p>
<table border="1">
<tr>
<th>Id</th>
<th>Nama Anggota</th>
<th>Alamat</th>
<th>Jenis Kelamin</th>
<th>Telepon</th>
</tr>
@foreach($anggota as $t)
<tr>
<td>{{ $t->anggota_id}}</td>
<td>{{ $t->anggota_nama}}</td>
<td>{{ $t->anggota_alamat}}</td>
<td>{{ $t->anggota_jk}}</td>
<td>{{ $t->anggota_telp}}</td>
</tr>
@endforeach
</table>
</body>
</html>