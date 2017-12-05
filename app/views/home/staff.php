
<div class="container" id="createClient" onload="populateProvince()">
    <form class="form-horizontal" action="" method="post" name="staffForm">
        <div class="form-group">
            <label class="control-label col-sm-2" for="Client">Clients Name:</label>
            <div class="col-sm-10">
                <input type="text" name="client" onblur="checkName(this.value)" class="form-control" id="client" placeholder="Client's Name">
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
            <label class="control-label col-sm-2" for="email">Notes:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="notes"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
                <button type="button" onclick="editClients()" class="btn btn-default">Edit Clients</button>
            </div>
        </div>
    </form>
</div>
