<h2>Chỉnh sửa Kỹ năng</h2>
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
<h4 ID="skillsection">Kỹ năng</h4>

<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Id</th>
            <th>Kỹ năng</th>
            <th>Nắm chắc</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query2="SELECT * FROM skills";
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
                        <div class="modal-body" id="skilleditbox">
                            <form method="post" action="php/update_skills.php">
                                <input type="hidden" name="id" value="<?=$data2['id']?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="website">Kỹ năng</label>
                                        <input type="text" name="skill" value="<?=$data2['skill']?>"
                                            class="form-control" id="website" placeholder="PHP">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="website">Nắm chắc</label>
                                        <input type="text" name="score" value="<?=$data2['score']?>"
                                            class="form-control" id="website" placeholder="100">
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <input type="submit" class="btn btn-primary" name="supdate" value="Cập nhật">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <td>#<?=$count?></td>
            <td><?=$data2['skill']?></td>
            <td><?=$data2['score']?>%</td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
                    Chỉnh sửa
                </button> <a href="php/update_skills.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger"
                        data-toggle="modal" data-target="#exampleModal">
                        Xóa
                    </button></a></td>
        </tr>
        <?php $count++;
} ?>
    </tbody>
</table>
<form action="php/update_skills.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="sn">Kỹ năng</label>
            <input type="text" name="skill" class="form-control" id="website" placeholder="PHP" required>
        </div>
        <div class="form-group col-md-5">
            <label for="website">Nắm chắc</label>
            <input type="text" name="score" class="form-control" id="website" placeholder="100" required>
        </div>
        <div class="form-group col-md-2">
            <label class="text-white">submit</label>
            <input type="submit" name="addskill" class="btn btn-primary form-control" value="Thêm kỹ năng">
        </div>

    </div>
</form>

<!-- More Skill Section -->
<hr>
<h4 ID="moreskillsection">Kỹ năng khác</h4>

<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Id</th>
            <th>Kỹ năng</th>
            <th>Khả năng</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query3="SELECT * FROM more_skills";
            $queryrun3=mysqli_query($conn,$query3);
            $count=1;         
            while($data3=mysqli_fetch_array($queryrun3)){
        ?>
        <tr>
            <div class="modal fade" id="modal<?=$data3['id']?>" tabindex="-1" role="dialog"
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
                            <form method="post" action="php/update_skills.php">
                                <input type="hidden" name="id" value="<?=$data3['id']?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="website">Kỹ năng</label>
                                        <input type="text" name="skill" value="<?=$data3['skill']?>"
                                            class="form-control" id="website" placeholder="Tự học">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="website">Khả năng</label>
                                        <input type="text" name="score" value="<?=$data3['score']?>"
                                            class="form-control" id="website" placeholder="100">
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <input type="submit" class="btn btn-primary" name="msupdate" value="Cập nhật">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <td>#<?=$count?></td>
            <td><?=$data3['skill']?></td>
            <td><?=$data3['score']?>%</td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?=$data3['id']?>">
                    Chỉnh sửa
                </button> <a href="php/update_skills.php?mdel=<?=$data3['id']?>"><button type="button" class="btn btn-danger"
                        data-toggle="modal" data-target="#exampleModal">
                        Xóa
                    </button></a></td>
        </tr>
        <?php $count++;
} ?>
    </tbody>
</table>
<form action="php/update_skills.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="sn">Kỹ năng</label>
            <input type="text" name="skill" class="form-control" id="website" placeholder="PHP" required>
        </div>
        <div class="form-group col-md-5">
            <label for="website">Khả năng</label>
            <input type="text" name="score" class="form-control" id="website" placeholder="100" required>
        </div>
        <div class="form-group col-md-2">
            <label class="text-white">submit</label>
            <input type="submit" name="addmoreskill" class="btn btn-primary form-control" value="Thêm kỹ năng">
        </div>

    </div>
</form>