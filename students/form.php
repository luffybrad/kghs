<?php
include "../header.php";
include "../connection.php";
$f = ($_GET['f']);
if($f=="all"){
    ?>
 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-east-tab" data-bs-toggle="pill" data-bs-target="#pills-east" type="button" role="tab" aria-controls="pills-east" aria-selected="false">East</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-west-tab" data-bs-toggle="pill" data-bs-target="#pills-west" type="button" role="tab" aria-controls="pills-west" aria-selected="false">West</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
    <?php
  $sql = "select * from students_tbl";
  $res = mysqli_query($conn,$sql);
  ?>
  <table class="table">
    <thead>
<tr>
    <th>
        Admission Number
    </th>
    <th>
        Name
    </th>
    <th>
        Form
    </th>
    <th>
        Stream
    </th>
</tr>
</thead>
<tbody>
<?php
while($row=mysqli_fetch_assoc($res)){
    ?>
    <tr>
        <td>
            <?php echo $row["adm_no"];?>
        </td>
        <td>
            <?php echo $row["name"];?>
        </td>
        <td>
            <?php echo $row["form"];?>
        </td>
        <td>
            <?php echo $row["stream"];?>
        </td>
    </tr>
    <?php
}
?>
</tbody>
</table>
  </div>
  <div class="tab-pane fade" id="pills-east" role="tabpanel" aria-labelledby="pills-east-tab" tabindex="0">
  <?php
  $sql = "select * from students_tbl where stream='E'";
  $res = mysqli_query($conn,$sql);
  ?>
  <table class="table">
    <thead>
<tr>
    <th>
        Admission Number
    </th>
    <th>
        Name
    </th>
    <th>
        Form
    </th>
    <th>
        Stream
    </th>
</tr>
</thead>
<tbody>
<?php
while($row=mysqli_fetch_assoc($res)){
    ?>
    <tr>
        <td>
            <?php echo $row["adm_no"];?>
        </td>
        <td>
            <?php echo $row["name"];?>
        </td>
        <td>
            <?php echo $row["form"];?>
        </td>
        <td>
            <?php echo $row["stream"];?>
        </td>
    </tr>
    <?php
}
?>
</tbody>
</table>
  </div>
  <div class="tab-pane fade" id="pills-west" role="tabpanel" aria-labelledby="pills-west-tab" tabindex="0">
  <?php
  $sql = "select * from students_tbl where stream='W'";
  $res = mysqli_query($conn,$sql);
  ?>
  <table class="table">
    <thead>
<tr>
    <th>
        Admission Number
    </th>
    <th>
        Name
    </th>
    <th>
        Form
    </th>
    <th>
        Stream
    </th>
</tr>
</thead>
<tbody>
<?php
while($row=mysqli_fetch_assoc($res)){
    ?>
    <tr>
        <td>
            <?php echo $row["adm_no"];?>
        </td>
        <td>
            <?php echo $row["name"];?>
        </td>
        <td>
            <?php echo $row["form"];?>
        </td>
        <td>
            <?php echo $row["stream"];?>
        </td>
    </tr>
    <?php
}
?>
</tbody>
</table>
  </div>
</div>
<?php
}else{
    ?>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-east-tab" data-bs-toggle="pill" data-bs-target="#pills-east" type="button" role="tab" aria-controls="pills-east" aria-selected="false">East</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-west-tab" data-bs-toggle="pill" data-bs-target="#pills-west" type="button" role="tab" aria-controls="pills-west" aria-selected="false">West</button>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
      <?php
    $sql = "select * from students_tbl where form='$f'";
    $res = mysqli_query($conn,$sql);
    ?>
    <table class="table">
      <thead>
  <tr>
      <th>
          Admission Number
      </th>
      <th>
          Name
      </th>
      <th>
          Form
      </th>
      <th>
          Stream
      </th>
  </tr>
  </thead>
  <tbody>
  <?php
  while($row=mysqli_fetch_assoc($res)){
      ?>
      <tr>
          <td>
              <?php echo $row["adm_no"];?>
          </td>
          <td>
              <?php echo $row["name"];?>
          </td>
          <td>
              <?php echo $row["form"];?>
          </td>
          <td>
              <?php echo $row["stream"];?>
          </td>
      </tr>
      <?php
  }
  ?>
  </tbody>
  </table>
    </div>
    <div class="tab-pane fade" id="pills-east" role="tabpanel" aria-labelledby="pills-east-tab" tabindex="0">
    <?php
    $sql = "select * from students_tbl where form='$f' AND stream='E'";
    $res = mysqli_query($conn,$sql);
    ?>
    <table class="table">
      <thead>
  <tr>
      <th>
          Admission Number
      </th>
      <th>
          Name
      </th>
      <th>
          Form
      </th>
      <th>
          Stream
      </th>
  </tr>
  </thead>
  <tbody>
  <?php
  while($row=mysqli_fetch_assoc($res)){
      ?>
      <tr>
          <td>
              <?php echo $row["adm_no"];?>
          </td>
          <td>
              <?php echo $row["name"];?>
          </td>
          <td>
              <?php echo $row["form"];?>
          </td>
          <td>
              <?php echo $row["stream"];?>
          </td>
      </tr>
      <?php
  }
  ?>
  </tbody>
  </table>
    </div>
    <div class="tab-pane fade" id="pills-west" role="tabpanel" aria-labelledby="pills-west-tab" tabindex="0">
    <?php
    $sql = "select * from students_tbl where form='$f' AND stream='W'";
    $res = mysqli_query($conn,$sql);
    ?>
    <table class="table">
      <thead>
  <tr>
      <th>
          Admission Number
      </th>
      <th>
          Name
      </th>
      <th>
          Form
      </th>
      <th>
          Stream
      </th>
  </tr>
  </thead>
  <tbody>
  <?php
  while($row=mysqli_fetch_assoc($res)){
      ?>
      <tr>
          <td>
              <?php echo $row["adm_no"];?>
          </td>
          <td>
              <?php echo $row["name"];?>
          </td>
          <td>
              <?php echo $row["form"];?>
          </td>
          <td>
              <?php echo $row["stream"];?>
          </td>
      </tr>
      <?php
  }
  ?>
  </tbody>
  </table>
    </div>
  </div>


<?php
}
include "../footer.php";
?>
