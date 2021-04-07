<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-3">
            <label for="selectAnimal" class="form-label">Select Animal</label>
            <select class="form-select" id="selectAnimal" aria-label="Select">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-md-3">
                <label for="animalName" class="form-label">Animal Name</label>
                <input class="form-control" id="animalName" type="name" placeholder="Animal">
        </div>
        <div class="col-md-3">
            <div class="mt-4">
                <button type="button" class="btn btn-success">Search</button>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <form action="upload.php" method="POST" enctype="multipart/form/data">
        <input type="file" name="file">
        <button type="submit" name="upload">Upload</button>
        </form>
    </div>
</div>

<?php 
    $query = "SELECT name FROM animals";
?>
<div class="container mt-5">
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
        <?php
            foreach ($dbh->query($query) as $zoo) {
                echo $zoo['name'] . "<br/>";
            }
        ?>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
    </tbody>
    </table>
</div>
