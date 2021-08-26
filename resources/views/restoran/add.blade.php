<div class="page-heading">
    <h3></h3>
</div>
<form action="store" method="post">
	{{ csrf_field() }}
	Nama <input type="text" name="nama" required="required"> <br/>
	kapasitas <input type="number" name="kapasitas" required="required"> <br/>
	potensi pajak <input type="number" name="potensi_pajak" required="required"> <br/>
	<input type="submit" value="Simpan">
</form>