
<div class="container" id="createMember" onload="populateProvince()">
    <form class="form-horizontal" action="../app/controllers/addClient.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="Client">Name:</label>
            <div class="col-sm-10">
                <input type="text" name="name" onblur="checkClientName(this.value)" class="form-control" id="client" placeholder="Client's Name">
                <span><small id="nameError" style="color: red"></small></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" name="email" onblur="checkEmail(this.value)" class="form-control" id="email" placeholder="Enter Email">
                <span><small id="emailError" style="color: red"></small></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Phone:</label>
            <div class="col-sm-10">
                <input type="text" name="phone" onblur="checkPhone(this.value)" class="form-control" id="email" placeholder="Enter Phone">
                <span><small id="phoneError" style="color: red"></small></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Dob:</label>
            <div class="col-sm-10">
                <input type="text" name="dob" onblur="checkDOB(this.value)" class="form-control" id="email" placeholder="Enter DOB DD/MM/YYYY">
                <span><small id="dobError" style="color: red"></small></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="designation">Gender:</label>
            <div class="col-sm-10">
                <select name="gender" id="designation" class="form-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="age">Age:</label>
            <div class="col-sm-10">
                <input type="text" name="age" class="form-control" id="age" placeholder="Enter Age">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Province:</label>
            <div class="col-sm-10">
                <select name="province" id="province" class="form-control" onclick="selectCity(this.value)">

                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">City:</label>
            <div class="col-sm-10">
                <select name="city" id="city" class="form-control">

                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="notes">Notes:</label>
            <div class="col-sm-offset-2 col-sm-10">
                <textarea name="notes" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
