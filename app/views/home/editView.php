<?php

$id = $_REQUEST['id'];
$sql = "select * from clients where client_id=$id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$resultProvinceID = mysqli_query($con,"select province_id from province where province_name='".$row['province']."'");
$rowProvince = mysqli_fetch_assoc($resultProvinceID);
?>


<div class="container" id="createMember" onload="populateProvince()">
    <form class="form-horizontal" action="../app/controllers/updateClient.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="Client">Name:</label>
            <div class="col-sm-10">
                <input type="text" name="name" onblur="checkClientName(this.value)" class="form-control" id="client" placeholder="Client's Name" value="<?php echo $row['client_name'];?>">
                <span><small id="nameError" style="color: red"></small></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input value="<?php echo $row['email'];?>" type="email" name="email" onblur="checkEmail(this.value)" class="form-control" id="email" placeholder="Enter Email">
                <span><small id="emailError" style="color: red"></small></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Phone:</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row['phone'];?> "name="phone" onblur="checkPhone(this.value)" class="form-control" id="email" placeholder="Enter Phone">
                <span><small id="phoneError" style="color: red"></small></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Dob:</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row['dob'];?>" name="dob" onblur="checkDOB(this.value)" class="form-control" id="email" placeholder="Enter DOB DD/MM/YYYY">
                <span><small id="dobError" style="color: red"></small></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="designation">Gender:</label>
            <div class="col-sm-10">
                <select name="gender" id="designation" class="form-control" >
                    <option selected value="<?php echo $row['gender'];?>"><?php echo $row['age'];?></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="age">Age:</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row['age'];?>" name="age" class="form-control" id="age" placeholder="Enter Age">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Province:</label>
            <div class="col-sm-10">
                <select name="province" id="province" class="form-control" onclick="selectCity(this.value)">
                    <option selected value="<?php echo $rowProvince['province_id'];?>"><?php echo $row['province'];?></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">City:</label>
            <div class="col-sm-10">
                <select name="city" id="city" class="form-control">
                    <option selected value="<?php echo $row['city'];?>"><?php echo $row['city'];?></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="notes">Notes:</label>
            <div class="col-sm-offset-2 col-sm-10">
                <textarea name="notes" class="form-control"><?php echo $row['notes'];?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <button type="submit" name="submit" class="btn btn-default">Update</button>
            </div>
        </div>
    </form>
</div>

