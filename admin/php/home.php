<h2>Chỉnh sửa Giới thiệu</h2>
<?php
    if(isset($_GET['msg'])){
             
        if($_GET['msg']=='updated'){
?>
<div class="alert alert-success text-center" role="alert">
    Cập nhật thành công !
</div>
<?php
        } 
    } 
?>

<form method="post" action="php/update_home.php">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" value="<?=$data['title']?>" class="form-control" id="title">
        </div>

        <div class="form-group col-md-6">
            <label for="name">Tên</label>
            <input type="text" name="name1" value="<?=$data['name']?>" class="form-control" id="name1" readonly="true">
        </div>

        <div class="form-group col-md-6">
            <label for="navname">Tên hiển thị trên Navbar</label>
            <input type="text" name="navname" value="<?=$data['navname']?>" class="form-control" id="navname">
        </div>

        <div class="form-group col-md-6">
            <label for="iam">Giới thiệu</label>
            <input type="text" name="iam" value="<?=$data['iam']?>" class="form-control" id="iam">
        </div>

        <div class="form-group col-md-6">
            <label for="facebook">Facebook</label>
            <input type="text" name="facebook" value="<?=$data['facebook']?>" class="form-control" id="facebook">
        </div>

        <div class="form-group col-md-6">
            <label for="instargram">Instargram</label>
            <input type="text" name="instargram" value="<?=$data['instargram']?>" class="form-control" id="instargram">
        </div>

        <div class="form-group col-md-6">
            <label for="twitter">Twitter</label>
            <input type="text" name="twitter" value="<?=$data['twitter']?>" class="form-control" id="twitter">
        </div>

        <div class="form-group col-md-6">
            <label for="github">Github</label>
            <input type="text" name="github" value="<?=$data['github']?>" class="form-control" id="github">
        </div>

    </div>
    <input type="submit" name="savehome" class="btn btn-primary" value="Save Changes">
</form>