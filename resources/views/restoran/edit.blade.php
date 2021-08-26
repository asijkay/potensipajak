<div class="page-heading">
    <h3></h3>
</div>
@foreach ($restoran as $r)
<form action="/pajakrestoran/update" method="post">
	{{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $r->id }}"> <br/>
	Nama <input type="text" name="nama" required="required" value="{{$r->nama_restoran}}"> <br/>
	kapasitas <input type="number" name="kapasitas" required="required" value="{{$r->kapasitas}}"> <br/>
	potensi pajak <input type="number" name="potensi_pajak" required="required" value="{{$r->potensi_pajak}}"> <br/>
	<input type="submit" value="Simpan">
</form>
@endforeach
