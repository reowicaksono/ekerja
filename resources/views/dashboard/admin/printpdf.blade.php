<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <center><h3>Informasi Data User</h3></center>
                        <table border="3" cellpadding="15" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email Address</th>
                                    <th>Kategori</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Pekerjaan</th>
                                    <th>Jenis Kelamin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datauser as $dataUSer)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td> {{$dataUSer->name}} </td>
                                    <td> {{$dataUSer->email}} </td>
                                    <td> {{$dataUSer->nama_kategori}} </td>
                                    <td> {{$dataUSer->Tempat_Tinggal}}, {{$dataUSer->Provinsi}} </td>
                                    <td> {{$dataUSer->No_Telepon}} </td>
                                    <td> {{$dataUSer->pekerjaan}} </td>
                                    <td> {{$dataUSer->jenis_kelamin}} </td>
                                </tr>
                                @empty
                                <td colspan="6" class="text-center">Tidak ada data...</td>
                                @endforelse
                            </tbody>
                        </table>

</body>
</html>