<h1>Tambah Data</h1>
<!-- <form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form> -->
<form name="form_input" >

	<label for="">Nama</label><br>
	<input type="text" name="nama" required><br><br>
	<label for="">alamat</label><br>
	<input type="text" name="alamat" required><br><br>
	<label for="">Pekerjaan</label><br>
	<input type="text" name="pekerjaan" required><br><br>
	<button type="submit">Save</button>
</form>
<script>
	$('[name="form_input"]').on('submit',function(e){
            e.preventDefault();
            
            var name= $('[name="nama"]').val();

            var dataForm = $(this).serialize();
            console.log(dataForm);
            $.ajax({
                url :"<?php echo base_url('Crud/tambah');?>",
                type: "POST",
                data: dataForm + "&submit=1",
                success: function(data)
                {
                   setTimeout(function(){
                        window.location = "<?php echo base_url('Crud/index') ?>";
                   }, 2000);
                },
                error: function(){
                    setTimeout(function(){
                        window.location = "<?php echo base_url('Crud/tambah') ?>";
                   }, 2000);
                }
            });
        });
</script>