
<a href="/anggota" class="text-sm text-gray-700 underline">Home</a>
    <body>
    <h3>Risma Auna (1461900027)</h3>
    <h3>Data Anggota dengan Inner Join</h3>
    <h4>Cari anggota :</h4>
    <form action="/anggota/cari" method="GET">
    <input type="text" name="lihat" placeholder="isikan disini" value="{{ old('cari') }}">
    <input type="submit" value="telusuri">
    </form>
    
    </form>

    </form>
        <div style="overflow-x:auto;">
            <table>
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Peminjaman</th>
                    <th>No. Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($anggota as $p)
                    <tr>
                    <td>{{ $p->anggota_id }}</td>
                    <td>{{ $p->anggota_nama }}</td>
                    <td>{{ $p->anggota_alamat }}</td>
                    <td>{{ $p->tgl_pinjam}}</td>
                    <td>{{ $p->anggota_telp}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>