
		<div class="content">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
					
						<div class="box-content box-nomargin">
							
							<div class="container span13">

        <div class="">
		<div class="box-header well" >
						<h2>All User</h2>
						<div class="box-icon">
							<a class="badge badge-success" title="添加網站"  href="javascript:void(0)" onclick="adduser()"><i class="icon-plus icon-white"></i>Add user</a>			
						</div>
		</div>
			<div class="box-content">
            <table class="table">
			  <thead>
				<tr>
				  <th>序號</th>
				  <th>用户名</th>
				  <th>Email</th>
				  <th>管理</th>
				</tr>
			  </thead>
			  <tbody>
					<?php $j=0;?>
					<?php foreach($list as $l): ?>
					<tr>
					<td><?php echo (++$j+$add); ?></td>
					<td id="<?php echo $l['id'].'n';?>">
					<a href="javascript:void(0)"><?php echo $l['username'];?></a></td>
					<td id="<?php echo $l['id'].'u';?>"><?php echo $l['email'];?> </td>

					<td>

					<div class="btn-group">
					<a class="btn" title="查看" href="javascript:void(0)" onclick="selectuser_info(<?php echo $l['id']; ?>)"><i class="icon-search"></i></a>
					<a class="btn" title="修改基本信息"  href="javascript:void(0)" onclick="edituser(<?php echo $l['id']; ?>)"><i class="icon-cog"></i></a>
					<a class="btn" title="删除"  href="javascript:void(0)" onclick="deluser(<?php echo $l['id'];?>)"><i class="icon-remove"></i></a>
					</div>

					</td>

					<?php  endforeach;?>

					</tr>
			  </tbody>
			</table>
<div class="pagination">
  <ul>
				<?php echo $page ;?>
	</ul>
	</div>
		<hr>
</div>
      <footer>
        <p>&copy; Company 2013</p>
      </footer>
          </div>

		  
		  
	</div>



<!-- 删除用户 -->
<form method="post" action="<?php echo base_url()."url/deluser";?>" id="delform">
<div id="deluser" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">删除用户</h3>
  </div>
  <div class="modal-body">
    <p>
    此行为不可恢复，删除此用户包括此用户下的所有信息！
	<input name="id"  id="deluserid" type="hidden" value="" >
    </p>
  </div>
  <div class="modal-footer">
  <input name="submitclassify" type="submit" value="刪除" class="btn btn-danger" id="main">
    <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
    

  </div>
</div>
</form>
<!--del end-->

<!-- 添加用户 -->
 <form  method="post" action="<?php echo base_url()."url/adduser";?>" id="userform" class="form-horizontal" onsubmit="return addusercheck();">
<div id="adduser" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">添加用户</h3>
  </div>
  <div class="modal-body">
    <p>
		<ul class="unstyled">
			<li>&nbsp;</li>
			<li>
				<div class="control-group">
					<label class="control-label" for="inputAccount">账户</label>
					<div class="controls">
					  <input class="validate[required]" type="text" name="name" id="username" placeholder="username" value="">
					  <label id="error_msg_name" style="color:red;"></label>
					</div>
				</div>
			</li>
			<li>
				<div class="control-group">
					<label class="control-label" for="inputPassword">密码</label>
					<div class="controls">
					  <input class="validate[required]" type="password" name="password" placeholder="password">
					</div>
				</div>
			</li>
			<li>
				<div class="control-group">
					<label class="control-label" for="inputEmail">邮箱</label>
					<div class="controls">
					  <input type="email" class="validate[required,custom[email]]" id="inputEmail" name="email" placeholder="Email">
					</div>
				</div>
			</li>
		</ul>
		<div class="ui-box-cell">
		</div>
		
    </p>
  </div>
  <div class="modal-footer">
  
  <input name="submitclassify" type="submit" value="添加" class="btn btn-danger">
  <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
    

  </div>
</div>
</form>
<!-- end add user-->

<!-- 修改用户资料 -->
 <form method="post" action="<?php echo base_url()."url/edituser";?>" id="edituserform" class="form-horizontal">
<div id="edituser" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">修改用户的基本信息</h3>
  </div>
  <div class="modal-body">
    <p>
    <ul class="unstyled">
    <li>
		<div class="control-group">
			<label class="control-label" for="inputAccount">用户</label>
			<div class="controls">
			  <input class="validate[required]" type="text" name="name" id="editusername" placeholder="username" value="">
			</div>
		</div>
	</li>
	<li>
		<div class="control-group">
			<label class="control-label" for="inputPassword">新密码</label>
			<div class="controls">
			  <input class="validate[required]" type="password" name="password" id="edituserpwd" placeholder="password">
			</div>
		</div>
	</li>
	 </ul>

	<input name="userid" type="hidden" value="" id="edituserid">
    </p>
  </div>
  <div class="modal-footer">
  <input name="submitclassify" type="submit" value="修改" class="btn btn-success">
    <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
    

  </div>
</div>
</form>
<!-- end 修改用户 -->	

<!-- 查看账户更多信息 -->
<form method="post" action="" id="accinfo_form" class="form-horizontal">
<div id="selectuser_info" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="managerLabel">用户基本信息</h3>
  </div>
  <div class="modal-body">
    <p class="Account">
		<ul class="unstyled hideinfo">
			<li>
				<div class="control-group">
					<label class="control-label" for="inputAccount">用户</label>
					<div class="controls">
					  <input class="validate[required]" type="text" name="name" id="accname_info" placeholder="username" value="">
					</div>
				</div>
			</li>
			<li>
				<div class="control-group">
					<label class="control-label" for="inputEmail">邮箱</label>
					<div class="controls">
					  <input type="email" class="validate[required,custom[email]]" id="accEmail" name="email" placeholder="Email">
					</div>
				</div>
			</li>
		</ul>
		<a id="addinfo"></a>
	<input name="acount_name" type="hidden" value="" id="account_id">
    </p>
  </div>
  <div class="modal-footer">
	<input name="submitclassify" type="submit" value="修改" class="btn btn-success viewinfo">
    <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>

  </div>
</div>
</form>
<!-- end 查看账户 -->				
							
						</div>
					</div>
				</div>
			</div>
		</div>	

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
	<script>
	
    function deluser(id){
		$('#deluser').modal('show').on('shown',function(){
			$("#deluserid").attr('value',id);
			$("#main").focus();
		})
	};

    function adduser(){
		$('#adduser').modal('show').on('shown',function(){
			$("#username").focus();
		})
	};

	function edituser(id){
		$('#edituser').modal('show').on('shown',function(){
			$("#edituserid").attr('value',id);
			var name=$("#"+id+"n").text();
			var pwd=$("#"+id+"u").text();
			//alert(name);
			$("#editusername").attr('value',$.trim(name));
			//$("#edituserpwd").attr('value',pwd);
			$("#editusername").focus();

		})
	};
	function selectuser_info(id){
	
		$.post("<?php echo base_url();?>url/selectuser_info",{'acount_name':id},
			function(data){
			
			//data是字符串
			var data = $.parseJSON(data); //字符串转换成json格式 
			
			//console.log(data['name']);
			if(data){
			$('#selectuser_info').modal('show').on('shown',function(){
				$("#accname_info").attr('value',data['username']);
				$("#accEmail").attr('value',data['email']);
				$('.viewinfo').hide();
				});}
			
			});
		return false;
		
	};
	$(function(){
	
		//监听 validate验证库
		//validationEngine() 区别 validate()
    	$("#userform").validationEngine();
    	$("#edituserform").validationEngine();
		$("#accinfo_form").validate();
		$("#accinfo_form").validationEngine();
		
    });
	
	function addusercheck(){
		//規範寫法
		var f = true;
		var username = $('#username').val();
		$.ajax({
				type    : "post",
				url     : "<?php echo base_url(); ?>account_manage/checkuser",
				data    : "username="+username,
				async   : false,
				success : function(d){
						if(d==1)
						{
							$('#error_msg_name').html('Username is existed.');
							f = false;
						}
					}
			});
		return f;
	}
	$(function(){
		$('#username').focus(function(){
			$('#error_msg_').html('');
		});
	});
    </script>
