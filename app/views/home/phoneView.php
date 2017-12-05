<div class="container">
    <h2>Phone Directory</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Designation</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "select * from users";
                    $result = mysqli_query($con,$sql);
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr><td>".$i."</td><td>".$row['user_name']."</td><td>".$row['phone']."</td><td>".$row['type']."</td></tr>";
                        $i++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
