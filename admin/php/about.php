<h2>Chỉnh sửa Thông tin</h2>
<?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
<div class="alert alert-success text-center" role="alert">
    Cập nhật thành công !
</div>
<?php
  }  
  if($_GET['msg']=='error'){
      ?>
<div class="alert alert-danger text-center" role="alert">
    Ảnh đính kèm không đúng hoặc vượt quá kích thước cho phép !
</div>
<?php
  } } 
?>
<form method="post" action="php/update_about.php" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <img src="../images/<?=$data['avartar']?>" class="oo img-thumbnail"><br>
            <label>Ảnh đại diện (Kích thước tối đa 2mb)</label>
            <div class="custom-file">
                <input type="file" name="avartar" class="custom-file-input" id="avartar">
                <label class="custom-file-label" for="avartar"></label>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label for="name">Tên</label>
            <input type="text" name="name" value="<?=$data['name']?>" class="form-control" id="name"
                placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="email">Email</label>
            <input type="text" name="email" value="<?=$data['email']?>" class="form-control" id="email"
                placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="phone">SDT</label>
            <input type="text" name="phone" value="<?=$data['phone']?>" class="form-control" id="phone"
                placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="dob">Ngày sinh</label>
            <input type="text" name="dob" value="<?=$data['dob']?>" class="form-control" id="dob"
                placeholder="">
        </div>
        <div class="form-group col-md-6">
            <label for="nationality">Quốc tịch</label>
            <input type="text" name="nationality" value="<?=$data['nationality']?>" class="form-control" id="nationality"
                placeholder="">
        </div>
        <div class="form-group col-md-6">
            <label for="address">Địa chỉ</label>
            <input type="text" name="address" value="<?=$data['address']?>" class="form-control" id="address"
                placeholder="">
        </div>
        <div class="form-group col-md-6">
            <label for="objective">Mục tiêu</label>
            <textarea type="text" name="objective"  class="form-control" id="objective" rows="5"
                placeholder=""><?=$data['objective']?></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="icando">Có thể làm</label>
            <textarea type="text" name="icando"  class="form-control" id="icando" rows="5"
                placeholder=""><?=$data['icando']?></textarea>
        </div>

    </div>
    <input type="submit" name="saveabout" class="btn btn-primary" value="Lưu thay đổi">
</form>
