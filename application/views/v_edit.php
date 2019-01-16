<h1>Edit Data</h1>
<form name="form_edit">
        <label for="">ID </label><br><br>
        <input type="text" name="id" value="<?php echo $row->id; ?>" ><br><br>
        <label for="">Nama </label><br><br>
        <input type="text" name="nama" value="<?php echo $row->nama; ?>" required><br><br>
        <label for="">alamat</label><br><br>
        <input type="text" name="alamat" value="<?php echo $row->alamat; ?>" required><br><br>
        <label for="">Pekerjaan</label><br><br>
        <input type="text" name="pekerjaan" value="<?php echo $row->pekerjaan; ?>" required><br><br>
        <button type="submit">Edit</button>
</form>

 <script>
        $('[name="form_edit"]').on('submit',function(e){
            e.preventDefault();
            
            var name= $('[name="name"]').val();

            var dataForm = $(this).serialize();
            console.log(dataForm);
            $.ajax({
                url : "<?php echo base_url('Crud/edit'); ?>",
                type: "POST",
                data: dataForm + "&submit=1",
                success: function(data)
                {
                    console.log('sukses');
                    
                   setTimeout(function(){
                        window.location = "<?php echo base_url('Crud/index') ?>";
                   }, 2000);
                },
                error: function(){
                    setTimeout(function(){
                       window.location = "<?php echo base_url('Crud/add') ?>";
                    }, 2000);
                    console.log('error');
                }
            });
        });
    </script>