<?php ?>

<!DOCTYPE html>
<html>
<head>
    <title>Imode</title>
    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<h1 style="text-align: center">IMODE - Testna naloga</h1>
    </header>
    
    <div class="container">
        <h3>CD Catalog</h3>
        <table id="result"> <!-- <table id="result" class="table table-light table-striped"> --> <!-- BOOTSTRAP -->
                            <!-- <thead class="thead-dark"> --> <!-- BOOTSTRAP -->
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Year</th>
                <th>Country</th>
                <th>Company</th>
                <th>Price (in $)</th>
            </tr>
                            <!-- </thead> --> <!-- BOOTSTRAP -->  
                <!-- AJAX code coming from cd_catalog.xml -->
        </table>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="ajax.js"></script>

</html>