<h1>{{ $data }}</h1>


 @forelse ($data as $item)
    <h1>{{ $item -> nama_guru }}</h1>
    <h1>{{ $item -> jns_klmn }}</h1>
    <h1>{{ $item -> tgl_lahir }}</h1>
    <h1>{{ $item -> nip }}</h1>
     
 @empty
     
 @endforelse