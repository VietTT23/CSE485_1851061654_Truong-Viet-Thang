<h2>Chỉnh sửa Sở thích</h2>
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

<!-- Skill Section -->
<hr>
<h4 ID="interests">Sở thích</h4>

<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tên</th>
            <th>Chi tiết</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query2="SELECT * FROM interests";
            $queryrun2=mysqli_query($conn,$query2);
            $count=1;         
            while($data2=mysqli_fetch_array($queryrun2)){
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
                        <div class="modal-body" id="interestseditbox">
                            <form method="post" action="php/update_interests.php">
                                <input type="hidden" name="id" value="<?=$data2['id']?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="title">Tên</label>
                                        <input type="text" name="title" value="<?=$data2['title']?>"
                                            class="form-control" id="title">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="description">Chi tiết</label>
                                        <input type="text" name="description" value="<?=$data2['description']?>"
                                            class="form-control" id="description" >
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <input type="submit" class="btn btn-primary" name="iupdate" value="Cập nhật">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <td>#<?=$count?></td>
            <td><?=$data2['title']?></td>
            <td><?=$data2['description']?></td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
                    Chỉnh sửa
                </button> <a href="php/update_interests.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger"
                        data-toggle="modal" data-target="#exampleModal">
                        Xóa
                    </button></a></td>
        </tr>
        <?php $count++;
} ?>
    </tbody>
</table>
<form action="php/update_interests.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="sn">Tên</label>
            <input type="text" name="title" class="form-control" id="title"  required>
        </div>
        <div class="form-group col-md-5">
            <label for="website">Chi tiết</label>
            <input type="text" name="description" class="form-control" id="description"  required>
        </div>
        <div class="form-group col-md-2">
            <label class="text-white">submit</label>
            <input type="submit" name="addinterests" class="btn btn-primary form-control" value="Thêm">
        </div>

    </div>
</form>