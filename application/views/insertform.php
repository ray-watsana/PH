
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>DATA
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
													<div class="row">
													<div class="col-lg-12">
														<a href="<?php echo site_url('welcome/insertform'); ?>"><button name="button" class="btn btn-info" style="text-align:center">เพิ่ม</button></a>
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
																					<td align="right">ชื่อ-นามสกุล :</td>
																					<td><input type="text" class="form-control" name="mem_name" value=""></td>
																				</tr>
																				<tr>
																					<td align="right">ที่อยู่ :</td>
																					<td><input type="text" class="form-control" name="mem_address" value=""></td>
																				</tr>
																				<tr>
																					<td align="right">เบอร์โทรศัพท์ :</td>
																					<td><input type="text" class="form-control" name="mem_phone" value=""></td>
																				</tr>
																				<tr>
																					<td align="right">วันเดือนปีเกิด :</td>
																					<td><input type="date" class="form-control" name="mem_bir" value=""></td>
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
