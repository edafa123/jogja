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

        </td>
    </tr>
    <br>
    <?php endforeach; ?>
  </tbody>
</table>