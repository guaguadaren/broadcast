<?php
use yii\helpers\Url;
?>
<style>
	td{
		text-align: center;
		font-size: 18px;
	}
	th{
		text-align: center;
	}
</style>
				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>
							<li class="active">账户管理</li>
                            <li class="active">主播列表</li>
						</ul><!-- .breadcrumb -->
					</div>

					<div class="page-content">


								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>编号</th>
														<th>主播名称</th>
														<th>主播房间号</th>
														<th>操作</th>
													</tr>
												</thead>

												<tbody>
													<?php foreach ($list as $key => $value) { ?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td><?=$value['id'] ?> </td>
														<td><?=$value['zb_name'] ?></td>
														<td><?=$value['room_num'] ?></td>
														<td style="text-align: center; width:150px;">
											                <a href=""><button class="btn">编辑<tton></a>
											                <a href=""><button class="btn btn-danger">删除<tton></a>
											            </td>
														<!-- <td style="color:red;">交易失败</td> -->
													</tr>
												<?php } ?>
												</tbody>
											</table>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->