<?php 
    $query = "SELECT DISTINCT category FROM animals";  
?>
<div class="container mt-5 mb-5">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-3">
                <label for="selectAnimal" class="form-label">Select Category</label>
                <select class="form-select" id="animalCategory" name="animalCategory" aria-label="Select">
                    <option selected>Select</option>
                    <?php foreach ($dbh->query($query) as $zoo) { ?>
                        <option value=<?php echo $zoo['category'] ?>><?php echo $zoo['category'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-3">
                <label for="animalName" class="form-label">Animal Name</label>
                <input class="form-control" id="animalName" type="text" name="animalName" placeholder="Animal">
            </div>
            <div class="col-md-3">
                <div class="mt-4">
                    <input class="btn btn-success" type="submit" name="submit" value="Search" /> 
                </div>
            </div>
        </div>
    </form>
    <div class="row mt-4">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="uplad">Upload</button>
        </form>
    </div>
</div>

<?php 
if (isset($_POST['submit'])) {
    if (!empty($_POST['animalName'])) {
        $query = $dbh->prepare('SELECT * FROM animals WHERE name LIKE ?');
        $query->execute(array('%' . $_POST['animalName'] . '%'));
        $animals = $query->fetchAll();
    } else {
        $query = $dbh->prepare('SELECT * FROM animals WHERE category LIKE ?');
        $query->execute(array('%' . $_POST['animalCategory'] . '%'));
        $animals = $query->fetchAll();
    }
} 
?>

<div class="container mt-5">
    <?php if (sizeof($animals) > 0) { ?>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Birthday</th>
            </tr>
        </thead>
            <tbody>
                <?php foreach ($animals as $a) { ?>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo $a['name'] ?></td>
                    <td><?php echo $a['category'] ?></td>
                    <td><?php echo $a['birthday'] ?></td>
                </tr>
                <?php } ?>
        </tbody>
        </table>
    <?php } else echo "No results"; ?>
</div>