<div class="page-heading">
    <h3>{{$title}}</h3>
</div>
<div class="row">
    <div class="col-md-3">
        <a href="pajakrestoran/add" class="btn btn-primary">Tambah</a>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col">Nama Restoran</th>
            <th scope="col">Kapasitas</th>
            <th scope="col">Potensi Pajak</th>
            <th scope="col" class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php $i = 1; ?>
            @foreach ($restoran as $r)
                <th scope="row" style="text-align: center; vertical-align:middle"><?= $i++; ?></th>
                <td>{{$r->nama_restoran}}</td>
                <td>{{$r->kapasitas}}</td>
                <td>{{$r->potensi_pajak}}</td>
                <td>
                    <a href="pajakrestoran/edit/{{$r->id}}">EDIT</a>
                    <a href="pajakrestoran/delete/{{$r->id}}">HAPUS</a>
                </td>
        </tr>
            @endforeach

    </tbody>
</table>