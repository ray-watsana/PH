<div class="panel-body">
  <div class="row">
  <div class="col-lg-12">


    <div class="row">
      <div class="col-md-12">

    <table class="table table-hover" border="0">
      <head>
        
        <th>ชื่อโทรศัพท์</th>
        <th>ข้อมูล่</th>
        <th>เครือข่าย</th>
      </head>
    <?php foreach ($data as $key): ?>

  <tbody>
      <tr>
      <td><?php echo $key['p_id']; ?></td>
      <td><?php echo $key['p_name'];?></td>
      <td><?php echo $key['p_detail'];?></td>
      <td><?php echo $key['n_id'];?></td>


  </tbody>
    <?php endforeach; ?>
  </table>
  </div>
  </div>

</div>
</div>
</div>
<!-- /.panel-body -->
</div>
<!--End simple table example -->

</div>
