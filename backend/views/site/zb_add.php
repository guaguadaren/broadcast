<?php
use yii\helpers\Url;
?>
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

					<div class="page-content">
							<div class="row">
							

									<div class="col-xs-12">
									
									<form class="form-horizontal" role="form" action="<?= Url::toRoute(['site/zb_adddo']); ?>" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 名称 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="名称" class="col-xs-10 col-sm-5" name="zb_name" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 房间号 </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-2" placeholder="房间号" class="col-xs-10 col-sm-5"  name="room_num"/>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-2">用户 </label>

														<div class="col-sm-9">
															<select name="u_id">
																<option value="">&nbsp;</option>
																<?php foreach ($user as $key => $value) { ?>
																	<option value="<?=$value['id'] ?>"><?=$value['user'] ?> </option>
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
