<div class="page-heading">
    <h3></h3>
</div>
@foreach ($restoran as $r)
<form action="/pajakrestoran/update" method="post">
	{{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $r->id }}"> <br/>
	Nama Restoran <input type="text" name="nama_restoran" required="required" value="{{$r->nama_restoran}}"> <br/>
	Nama Pemilik <input type="text" name="nama_pemilik" required="required" value="{{$r->nama_pemilik}}"> <br/>
	Alamat <textarea name="alamat" required="required">{{$r->alamat}}</textarea> <br/>
	Jenis Restoran <input type="text" name="jenis_restoran" required="required" value="{{$r->jenis_restoran}}"> <br/>
	Kapasitas <input type="number" name="kapasitas" required="required" value="{{$r->kapasitas}}"> <br/>
	Jumlah Hari Kunjungan Tamu Ramai <input type="number" name="skt_ramai" required="required" value="{{$r->skt_ramai}}"> <br/>
	Jumlah Hari Kunjungan Tamu Normal <input type="number" name="skt_normal" required="required" value="{{$r->skt_normal}}"> <br/>
	Jumlah Hari Kunjungan Tamu Sepi <input type="number" name="skt_sepi" required="required" value="{{$r->skt_sepi}}"> <br/>
	Jumlah Tamu Ketika Ramai <input type="number" name="tkt_ramai" required="required" value="{{$r->tkt_ramai}}"> <br/>
	Jumlah Tamu Ketika Normal <input type="number" name="tkt_normal" required="required" value="{{$r->tkt_normal}}"> <br/>
	Jumlah Tamu Ketika Sepi <input type="number" name="tkt_sepi" required="required" value="{{$r->tkt_sepi}}"> <br/>
	Pengeluaran Rerata Tamu per Makan (Rp) <input type="number" name="prt" required="required" value="{{$r->prt}}"> <br/>
	<input type="submit" value="Simpan">
</form>
@endforeach
