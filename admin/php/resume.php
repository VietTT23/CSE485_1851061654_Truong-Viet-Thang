<h2>Chỉnh sửa Lý lịch</h2>
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
<form action="php/update_resume.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Loại</label>
            <select name="category" class="custom-select">
                <option value="e" selected>Học vấn</option>
                <option value="pe">Kinh nghiệm</option>
            </select>
        </div>
        <div class="form-group col-md-8">
            <label for="sn">Bằng cấp</label>
            <input type="text" name="degree" class="form-control" id="website"
                placeholder="" required>
        </div>
        <div class="form-group col-md-8">
            <label for="website">Tên Trường học hoặc Công ty</label>
            <input type="text" name="name" class="form-control" id="website"
                placeholder="" required>
        </div>
        <div class="form-group col-md-4">
            <label for="website">Khoảng thời gian</label>
            <input type="text" name="year" class="form-control" id="website" placeholder="" required>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">Mô tả</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group col-md-2 ml-auto">
            <input type="submit" name="addtoresume" class="btn btn-primary form-control" value="Thêm">
        </div>

    </div>
</form>

<table id="resumelist" class="table table-striped table-sm .table-responsive ">
    <thead>
        <tr>
            <th>Id</th>
            <th>Loại</th>
            <th>Bằng cấp</th>
            <th>Trường/Công ty</th>
            <th>Thời gian</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query2="SELECT * FROM education_and_experience";
            $queryrun2=mysqli_query($conn,$query2);
            $count=1;         
            while($data2=mysqli_fetch_array($queryrun2)){
            $cat = $data2['category']=='e'?$cat="Học vấn":$cat="Kinh nghiệm";
        ?>
        <tr>
            <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="exampleModalLabel">Sửa</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="skilleditbox">
                            <form action="php/update_resume.php" method="post">
                                <input type="hidden" name="id" value="<?=$data2['id']?>">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Loại</label>
                                        <select name="category" class="custom-select">
                                            <?php 
                                                if($data2['category']=='e'){ 
                                            ?>
                                            <option value="e" selected>Học vấn</option>
                                            <option value="pe">Kinh nghiệm</option>
                                            <?php  }else{ ?>
                                            <option value="e">Học vấn</option>
                                            <option value="pe" selected>Kinh nghiệm</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="degree">Bằng cấp</label>
                                        <input type="text" name="degree" value="<?=$data2['degree']?>"
                                            class="form-control" id="degree"
                                            placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="name">Trường/Công ty</label>
                                        <input type="text" name="name" value="<?=$data2['name']?>"
                                            class="form-control" id="name" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="year">Thời gian</label>
                                        <input type="text" name="year" value="<?=$data2['year']?>" class="form-control"
                                            id="year" placeholder="2018-2019" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleFormControlTextarea1">Mô tả</label>
                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                                            rows="3"><?=$data2['description']?></textarea>
                                    </div>


                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <input type="submit" class="btn btn-primary" name="rupdate" value="Cập nhật">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <td>#<?=$count?></td>
                <td><?=$cat?></td>
                <td><?=$data2['degree']?></td>
                <td><?=$data2['year']?></td>
                <td><?=$data2['name']?></td>

                <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#modal<?=$data2['id']?>">
                        Chỉnh sửa
                    </button> <a href="php/update_resume.php?del=<?=$data2['id']?>"><button type="button"
                            class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
                            Xóa
                        </button></a>
                </td>
        </tr>
        <?php $count++; } ?>
    </tbody>
</table>