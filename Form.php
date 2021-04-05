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
            <label for="fileUpload" class="form-label">Upload File</label>
            <input class="form-control" id="fileUpload" type="file">
        </div>
        <div class="col-md-3">
            <div class="mt-4">
                <button type="button" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</div>

<?php 
    $query = "SELECT * FROM animals";
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
        <?php foreach ($dbh->query($query) as $zoo) { ?>
            <tr>
                <th scope="row"></th>
                <td><?php echo $zoo['name'] ?></td>
                <td><?php echo $zoo['category'] ?></td>
                <td><?php echo $zoo['birthday'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
</div>
