
<div class="col-sm-12">
     <div class="card">
         <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="border-bottom title-part-padding">                    
                    <a href="<?=base_url('pelanggan/input'); ?>"><button type="button" class="btn btn-primary" >Tambah</button></a>
                    <button type="button" class="btn btn-warning">Import</button>
                    <br/><br/>
                    </div>
                    <br/>
                </div>
            </div>

         <table id="example" class="display" style="width:100%">
        <thead>
        
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat Pelanggan</th>
                <th>Nomer HP</th>
                <th>Pekerjaan</th>                
            </tr>
        </thead>
        <?php
                          $no = 1;
                          foreach($data_pelanggan as $pelanggan){
                      ?>
        <tbody>
            <tr>
                <td><?php echo $pelanggan->id_pelanggan;?></td>
                <td><?php echo $pelanggan->nama_pelanggan;?></td>
                <td><?php echo $pelanggan->alamat_pelanggan;?></td>
                <td><?php echo $pelanggan->no_kontak;?></td>
                <td><?php echo $pelanggan->pekerjaan;?></td>                
            </tr> 
            <?php }?>           
        </tbody>
        <tfoot>
            <tr>
            <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat Pelanggan</th>
                <th>Nomer HP</th>
                <th>Pekerjaan</th> 
            </tr>
        </tfoot>
    </table>
         </div>
     </div>
</div>


