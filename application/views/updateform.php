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
										<td><input type="text" class="form-control" value="<?php echo $data[0]['p_id']?>" disabled="disabled"></td>
									</tr>

									<tr>
										<td> Name</td>
										<td>	<input type="text" name="p_name" value="<?php echo $data[0]['p_name']?>" class="form-control"></td>
									</tr>

									<tr>
										<td>Detail</td>
										<td><input type="text" name="p_detail" value="<?php echo $data[0]['p_detail']?>" class="form-control"></td>
									</tr>
									<tr>
										<td>Network</td>
										<td>
										<select name="n_id" class="form-control">
											<<?php foreach ($network as $key ): ?>
												<?php if ($data[0]['n_id']==$key['n_id']): ?>
													<option selected value="<?php echo $key['n_id']?>" ><?php echo $key['n_name'] ?></option>

												<?php else: ?>
													<option value="<?php echo $key['n_id']?>" ><?php echo $key['n_name'] ?></option>

												<?php endif; ?>
											<?php endforeach; ?>
										</select>
										</td>
									</tr>
									<tr>
										<td>Numphone</td>
										<td><input type="text" name="p_num" value="<?php echo $data[0]['p_num']?>" class="form-control"></td>
									</tr>
									<tr>
									<input type="hidden"  name="p_id" value="<?php echo $data[0]['p_id']?>" >
									<br><br>
									<td align="center" colspan="3"><input class="btn btn-info" type="submit" value="แก้ไข"></td>
									<br>
									<?php echo form_close();?>
								</tr>

								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
