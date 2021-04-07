<?php 
    $query = "SELECT * FROM animals";

    if (isset($_POST['submit'])) {
        $searchValue = $_POST['animalName'];
    }   
?>
<div class="container mt-5 mb-5">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-3">
                <label for="selectAnimal" class="form-label">Select Category</label>
                <select class="form-select" id="selectAnimal" aria-label="Select">
                    <option selected>Select</option>
                    <?php foreach ($dbh->query($query) as $zoo) { ?>
                        <option value=<?php echo $zoo['id'] ?>><?php echo $zoo['category'] ?></option>
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
            <tr>
                <th scope="row"></th>
                <td>Test</td>
                <td>Test</td>
                <td>2018-04-03</td>
            </tr>
    </tbody>
    </table>
</div>