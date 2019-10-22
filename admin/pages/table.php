                    <div class="col-md-12">
                     <h2>Table Messages</h2>
                    </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="tabel-data" class="table table-striped table-bordered" width="100%">
            <thead>
               <tr>
                  <th class="info">No</th>
                  <th class="info">Nama</th>
                  <th class="info">Email</th>
                   <th class="info">Subject</th>
                   <th class="info">Pesan</th>
                   <th class="info">Aksi</th>
               </tr>
             </thead>
             <tbody>
              
<?php
include "../koneksi.php";
$query=mysql_query("select * from pesan where id_pesan")or die(mysql_error());
    $no=1;
  while ($data = mysql_fetch_array($query)){
?>

<tr>
<td><?php echo $no;?></td>
<td><?php echo $data['nama'];?></a></td>
<td><?php echo $data['email'];?></a></td>
<td><?php echo $data['subject'];?></td>
<td><?php echo $data['pesan'];?></td>
<td align="center"> 
<a href='pages/detail_pemesanan.php?id=<?php echo $data['id']; ?>' class="btn btn-info" data-toggle="modal" data-target="#myModal" title="Lihat"> Detail </a>&nbsp;
<a href='index_admin.php?p=proses_checkin&booking_id=<?php echo $data['booking_id']; ?>' class="btn btn-success"> Kirim Email </a></td>
<?php
$no++;
}
?>
</tr>
</tbody>
</table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

