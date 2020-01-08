<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <h1>halo hai</h1>
<table>
    <tr>
        <th>Nama Lengkap</th>
        <th>NIP</th>
        <th>Jenis Kelamin</th>
        <th>Unit Kerja</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Status</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Pangkat</th>
        <th>Jenjang Pendidikan</th>
        <th>Jurusan</th>
        <th>Universitas</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Berakhir</th>
        <th>Beasiswa</th>
        <th>Alasan Perpanjangan</th>
        <th>Lama Waktu Perpanjangan</th>
        <th>AKSI<th>
    </tr>
    @foreach($data_diri_pemohon as $row)
    <tr>
            <td>{{$row->nama}}</td>
            <td>{{$row->nip}}</td>
            <td>{{$row->nip}}</td>
            <td>{{$row->jk}}</td>
            <td>{{$row->unit_kerja}}</td>
            <td>{{$row->tempat_lahir}}</td>
            <td>{{$row->tgl_lahir}}</td>
            <td>{{$row->agama}}</td>
            <td>{{$row->status}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{$row->jabatan}}</td>
            <td>{{$row->pangkat}}</td>
            <td>{{$row->jenjang_pend}}</td>
            <td>{{$row->jurusan}}</td>
            <td>{{$row->univ}}</td>
            <td>{{$row->tgl_mulai}}</td>
            <td>{{$row->tgl_akhir}}</td>
            <td>{{$row->beasiswa}}</td>
            <td>{{$row->alasan_perp}}</td>
            <td>{{$row->jml_wkt_perp}}</td>
            <td>
                <a href="/datadiripemohon/{{$row->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/datadiripemohon/{{$row->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
            </td>
    </tr>
    @endforeach
</table>    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

