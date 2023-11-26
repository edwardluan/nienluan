<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Thêm Sinh viên</div>
			<p><a href="students.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Vui lòng nhập chi tiết bên dưới</div>		
	<form class="form-horizontal" method="POST" action="student_save.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Họ:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname"  placeholder="Firstname" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tên:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname"  placeholder="Lastname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Giới tính:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="gender"  placeholder="Gender" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Địa chỉ:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address"  placeholder="Address" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">SDT:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="contact"  placeholder="Contact" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Type:</label>
			<div class="controls">
			<select name="type" required>
			
			
			
									<option></option>
									<option>Sinh viên</option>
									<option>Giáo viên</option>
									<option></option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Năm thứ:</label>
			<div class="controls">
				<select name="year_level" >
					

									<option> </option>
									<option>Năm nhất</option>
									<option>Năm thứ hai</option>
									<option>Năm thứ ba</option>
									<option>Năm thứ tư</option>
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Lưu</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>