<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body>
      Ini Halaman About
</body>
      @foreach($ortu as $data)
          Nama_ibu : {{$data->nama_ibu}}<br>
          Nama_ayah : {{$data->nama_ayah}}<br>
          Umur_ibu : {{$data->umur_ibu}}<br>
          Umur_ayah: {{$data->umur_ayah}}<br><hr>
       @endforeach   
       @foreach($anak as $data)
          Nama : {{$data->nama}}<br>
          Id_ortu : {{$data->orangtuaa_id}}<br>
          Umur : {{$data->umur}}<br>
          Alamat : {{$data->alamat}}<br><hr>
       @endforeach   





</html>
         