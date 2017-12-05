<div class="container">
    <h2>Your Clients</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>

<?php

if($_SESSION['user'] === "admin"){
    $sql = "select client_id,client_name from clients";
    $result = mysqli_query($con,$sql);
    $i = 1;
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>$i</td><td>".$row['client_name']."</td><td><a href='editClients.php?id=".$row['client_id']."'>Edit</a></td></tr>";
        $i++;
    }
}else{

}

?>
            </tbody>
        </table>
    </div>
</div>

