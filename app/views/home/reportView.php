<div class="form-group">
    <label class="control-label col-sm-2" for="Select">Select:</label>
    <div class="col-sm-10">
        <select name="reportSelect" id="reportSelect" class="form-control" onclick="<?php if($_SESSION['user'] == "admin"){echo 'adminReport(this.value)';}else{echo 'createReport(this.value)';}?>">
            <option value="A">All from Ontario</option>
            <option value="B">Younger than 20</option>
            <option value="C">Older than 20</option>
        </select>
    </div>
</div>
<div class="container">
    <h2>Report</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Province</th>
                <th>City</th>
                <th>DOB</th>
                <th>Age</th>
                <th>Phone</th>

            </tr>
            </thead>
            <tbody id="tableBody">
            </tbody>
        </table>
    </div>
</div>
