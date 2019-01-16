<i class="fa fa-search"></i>
<h1 style="text-align:center;">Data Produk</h1>
<form action="<?php echo base_url('Crud/cari') ?>" method="post">
    <input type = "text" name = "title">
    <input type = "submit" name = "submit" value = "Search"> 
</form>
 <div class="col">
        <a href="<?php echo base_url('Crud/tambah') ?>">Tambah</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">alamat</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($query as $row): ?>
    <tr>   
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->nama; ?></td>
        <td><?php echo $row->alamat; ?></td>
        <td><?php echo $row->pekerjaan; ?></td>

        <td>
            <a href="<?php echo base_url('Crud/edit/'. $row->id) ?>">Edit</a>
            <a href="<?php echo base_url('Crud/hapus/'. $row->id) ?>">Hapus</a>

        </td>
    </tr>
    <br>
    <?php endforeach; ?>
  </tbody>
</table>