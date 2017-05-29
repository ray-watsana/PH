

                        <div class="panel-body">
													<div class="row">
													<div class="col-lg-12">

														<br><br>

														<div class="row">
															<div class="col-md-12">

																<?php echo form_open('welcome/insert'); ?>
																<div class="container" align="center">
																	<div class="row">
																		<div class="col-md-2 col-sm=2"></div>
																		<div class="col-md-8">
																			<h5>เพิ่มข้อมูล</h5>
																			<table class="table table-hover" border="0">
																				<tr>
																					<td align="right">ชื่อโทรศัพท์ :</td>
																					<td><input type="text" class="form-control" name="p_name" value="">  </td>
																				</tr>
																				<tr>
																					<td align="right">ข้อมูล :</td>
																					<td><input type="text" class="form-control" name="p_detail" value=""></td>
																				</tr>
																				<tr>
																					<td align="right">เครือข่าย :</td>
																					<td><input type="text" class="form-control" name="n_id" value=""></td>
																				</tr>

																				<tr>
																					<td align="center" colspan="3"><input class="btn btn-info" type="submit" value="เพิ่ม"></td>
																				</tr>
																			</table>
																		</div>
																	</div>
																</div>

																<?php echo form_close(); ?>
													</div>
													</div>

							</div>
							</div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!--End simple table example -->

                </div>



</body>

</html>
