<div cl Ketikaass="page-heading">
    <h3></h3>
</div>
<form action="store" method="post">
	{{ csrf_field() }}
	Nama Restoran <input type="text" name="nama_restoran" required="required"> <br/>
	Nama Pemilik <input type="text" name="nama_pemilik" required="required"> <br/>
	Alamat <textarea name="alamat" required="required"></textarea> <br/>
	Jenis Restoran <input type="text" name="jenis_restoran" required="required"> <br/>
	Kapasitas <input type="number" name="kapasitas" required="required"> <br/>
	Jumlah Hari Kunjungan Tamu Ramai <input type="number" name="skt_ramai" required="required"> <br/>
	Jumlah Hari Kunjungan Tamu Normal <input type="number" name="skt_normal" required="required"> <br/>
	Jumlah Hari Kunjungan Tamu Sepi <input type="number" name="skt_sepi" required="required"> <br/>
	Jumlah Tamu Ketika Ramai <input type="number" name="tkt_ramai" required="required"> <br/>
	Jumlah Tamu Ketika Normal <input type="number" name="tkt_normal" required="required"> <br/>
	Jumlah Tamu Ketika Sepi <input type="number" name="tkt_sepi" required="required"> <br/>
	Pengeluaran Rerata Tamu per Makan (Rp) <input type="number" name="prt" required="required"> <br/>
	<input type="submit" value="Simpan">
</form>