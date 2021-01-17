   <h2>Tin nhắn</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Tên</th>
              <th>Email</th>
              <th>SDT</th>
              <th>Lời nhắn</th>
            </tr>
          </thead>
          <tbody>
            
             <?php
    $query="SELECT * FROM contact";
      $queryrun=mysqli_query($conn,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
          <tr>
          <td>#<?=$count+1?></td>
              <td><?=$data['name']?></td>
              <td><?=$data['email']?></td>
              <td><?=$data['phone']?></td>
              <td><?=$data['message']?></td>
            </tr>
          <?php
              $count++;
      }
      if($count==0){ ?>
          <td colspan="5" align="center"> Không có tin nhắn nào !</td>
      <?php }
        ?>
              
          </tbody>
        </table>
      </div>