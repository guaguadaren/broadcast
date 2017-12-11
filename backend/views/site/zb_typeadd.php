<?php
use yii\helpers\Url;
?>
<style>
	.f_but{
		padding: 10px;
		background-color:#FFDAB9;
		border-radius: 5px;
		border:3px solid black;
	}
	.z_but{
		padding: 10px;
		background-color:#FFDAB9;
		border-radius: 5px;
		border:3px solid black;
	
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
							<li class="active">安居客控制台</li>
							<li class="active">房源管理</li>
							<li class="active">账号设置</li>
							<li class="active">添加账号</li>
						</ul><!-- .breadcrumb -->
					</div>
<button class="f_but">父级添加</button>&nbsp&nbsp<button class="z_but">子级添加</button>
					<div class="page-content-f">
						<h1>父级添加</h1>
							<div class="row">
									<div class="col-xs-12">
									<form class="form-horizontal" role="form" action="<?= Url::toRoute(['site/type_add']); ?>" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 分类名称 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="分类名称" class="col-xs-10 col-sm-5" name="game_name" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="space-4"></div>

								<!-- 	<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 类型 </label>
													<div class="col-sm-9">
														<select >
															<option value="">&nbsp;</option>
															<option value="BY">包月</option>
															<option value="FBY">非包月</option>
														</select>
														</div>
								</div>



									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">到期时间</label>

										<div class="col-sm-9">
													<div class="input-group" style=" width:150px;">
														<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
														<span class="input-group-addon">
															<i class="icon-calendar bigger-110"></i>
														</span>
													</div>
										</div>
									</div> -->
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="btn btn-info" value="增加">
											<!-- <button class="btn btn-info" type="button">
												<i class="icon-ok bigger-110"></i>
												增加
											</button> -->

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>



								</form>
									</div><!-- /span -->
								</div><!-- /row -->

					</div><!-- /.page-content -->

					<div class="page-content-z" style="display: none;">
						<h1>子级添加</h1>
							<div class="row">
									<div class="col-xs-12">
									<form class="form-horizontal" role="form" action="<?= Url::toRoute(['site/type_add']); ?>" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 分类名称 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="分类名称" class="col-xs-10 col-sm-5" name="game_name" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="space-4"></div>

									<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-2">父级分类 </label>

														<div class="col-sm-9">
															<select name="parent_id">
																<option value="">&nbsp;</option>
																<?php foreach ($type as $key => $value) { ?>
																	<option value="<?=$value['game_id'] ?>"><?=$value['game_name'] ?> </option>
																<?php } ?>
															</select>
														</div>
									</div>

								<!-- 	<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 类型 </label>
													<div class="col-sm-9">
														<select >
															<option value="">&nbsp;</option>
															<option value="BY">包月</option>
															<option value="FBY">非包月</option>
														</select>
														</div>
								</div>



									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">到期时间</label>

										<div class="col-sm-9">
													<div class="input-group" style=" width:150px;">
														<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
														<span class="input-group-addon">
															<i class="icon-calendar bigger-110"></i>
														</span>
													</div>
										</div>
									</div> -->
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="btn btn-info" value="增加">
											<!-- <button class="btn btn-info" type="button">
												<i class="icon-ok bigger-110"></i>
												增加
											</button> -->

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>



								</form>
									</div><!-- /span -->
								</div><!-- /row -->

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<script src="./jquery-1.8.2.min.js"></script>
				<script>
					$(function(){
						$(".f_but").click(function(){
							$(".page-content-z").hide();
							$(".page-content-f").show();
						})
						$(".z_but").click(function(){
							$(".page-content-f").hide();
							$(".page-content-z").show();
						})
					})
				</script>
