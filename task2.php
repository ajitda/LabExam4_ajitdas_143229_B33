<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/bootstrap/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Inline form</h2>
    <p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p>
    <form action="file.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fileName">File Name:</label>
            <input type="text" class="form-control" name="fileName" id="fileName" placeholder="Enter your file name here">
        </div>
        <div class="form-group">
            <label for="Date">Date :</label>
            <input type="date" class="form-control" name="date" id="date" placeholder="Select a date">
        </div>
        <div class="file">
            <label> Select an image</label>
            <input type="file" name="fileUpload">
        </div>
        <div class="sumbit_btn">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>
</div>

</body>
</html>

