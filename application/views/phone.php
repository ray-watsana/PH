<div class="panel-body">
  <div class="row">
  <div class="col-lg-12">


    <div class="row">
      <div class="col-md-12">
        <a href="<?php echo site_url('welcome/insertform'); ?>"><button name="button" class="btn btn-info" style="text-align:center">เพิ่ม</button></a>
        <br><br>

    <table class="table table-hover" border="1">
      <head>
        <th>รหัส</th>
        <th>ชื่อโทรศัพท์</th>
        <th>ข้อมูล</th>
        <th>เครือข่าย</th>
        <th>จำนวน</th>
        <th colspan="2">จัดการ</th>
      </head>
    <?php foreach ($data as $key): ?>

  <tbody>
      <tr>
      <td><?php echo $key['p_id']; ?></td>
      <td><?php echo $key['p_name'];?></td>
      <td><?php echo $key['p_detail'];?></td>
      <td><?php echo $key['n_name'];?></td>
      <td><?php echo $key['p_num'];?></td>
      <td><a href="<?php echo site_url('welcome/updateform/'.$key['p_id'])?>"><button name="button" class="btn btn-warning">แก้ไข</button></a>
      <a href="<?php echo site_url('welcome/del/'.$key['p_id'])?>" onclick="return confirm('ยืนยันการลบ !')"><button name="button" class="btn btn-danger">ลบ</button></a></td>

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
