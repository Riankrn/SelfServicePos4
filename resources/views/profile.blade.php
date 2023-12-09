<h1> PROFILE</h1> 
<hr>
<table border='0'>
    @if($nama == 'Rian')

    <tr>
        <td> Nama Lengkap : </td>
        <td>{{$nama}}</td>
    </tr>
    
    @endif
</table>
<hr>
<table border="0">
        <tr>
            <td>NAMA-MAHASISWA</td>
            </tr>
    <h2>Contoh Penerapan
        <br> Nama= Rian Kurniawan
        <br> Nim = 21030085
        <br> Prodi = KAPB
     </head>

<h2>Contoh Forelse</h2>
<table>
    @forelse($data_array as $data)
    <br> Nama = Rian Kurniawan
    <br> Nim = 21030085
    <br> Prodi = KAPB
    <tr>
        <td>Nama</td>
        <td>{{$data}}</td>
    </tr>
    @empty
    <tr>
        <td colspan = "2">Data Masih Kosong </td>
    </tr>
    @endforelse
</table>

<h2>Contoh for<h2>
<table>
    @for($i=0;$i<6;$i++)
        {{$i}}<br>
    @endfor
</table>