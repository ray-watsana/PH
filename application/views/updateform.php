<div class="col-md-12">
	<div class="card">
		<div class="header">

			<div class="row">
				<div class="col-lg-12">
					<h1 align="center">แก้ไขข้อมูล</h1>
					<div class="row">
						<div class="col-sm-2 col-sm=2"></div>
						<div class="col-md-6">
							<table class="table" border="0" >
									<?php echo form_open('/welcome/update');?>

									<tr>
										<td>CodePhone</td>
										<td><input type="text" value="<?php echo $data[0]['p_id']?>" disabled="disabled"></td>
									</tr>

									<tr>
										<td> Name</td>
										<td>	<input type="text" name="name" value="<?php echo $data[0]['p_name']?>" class="form-control"></td>
									</tr>

									<tr>
										<td>Detail</td>
										<td><input type="text" name="detail" value="<?php echo $data[0]['detail']?>" class="form-control"></td>
									</tr>


									<tr>
										<td>Network</td>
										<td><input type="text" name="n_id" value="<?php echo $data[0]['n_id']?>" class="form-control"></td>
									</tr>

									<tr>
									<input type="hidden"  name="p_id" value="<?php echo $data[0]['p_id']?>" >
									<br><br>
									<td><input type="submit" value="submit" ></td>
									<br>
									<?php echo form_close();?>
								</tr>

								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
