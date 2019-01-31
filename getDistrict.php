<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["state_id"])) {
    $query = "SELECT * FROM district WHERE stid = '" . $_POST["state_id"] . "' order by name asc";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>Select District</option>
<?php
    foreach ($results as $dist) {
        ?>
<option value="<?php echo $dist["id"]; ?>"><?php echo $dist["name"]; ?></option>
<?php
    }
}
?>