<?php

    if(isset($_GET['d']) && isset($_GET['q']) && isset($_GET['u'])) {
        $delete = htmlentities($_GET['d']); //30 days
        $quaran = htmlentities($_GET['q']); //21 days
        $underu = htmlentities($_GET['u']); //60 days
        $default = false;
    } else {
        $delete = "90";
        $quaran = "60";
        $underu = "30";
        $default = true;
    }

?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Quarantine Calculation</title>
    <meta name="description" content="Quarantine Calculation">
    <meta name="author" content="Laim McKenzie">

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

</head>

<body style="zoom: 200%;">
    <main role="main" class="container">
        <?php if($default == true) { ?>
        <div class="row mt-5">
            <div class="col">
                <div class="alert alert-danger" role="alert">
                    No timeframe has been supplied, default dates are being used. (Quar: <?php print($quaran);?>, Del: <?php print($delete);?>, Underu: <?php print($underu);?>)
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="row mt-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Delete Date</h5>
                        <p class="card-text">Device's from this date and before should be deleted.</p>
                        <p class="card-text"><?php print(date('d-m-Y', strtotime("-" . $delete . " days")));?></p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Quarantine Date</h5>
                        <p class="card-text">Device's from this date and before should be in Quarantine.</p>
                        <p class="card-text"><?php print(date('d-m-Y', strtotime("-" . $quaran . " days")));?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Underutilized Date</h5>
                        <p class="card-text">Software underutilized date (software last used on this date should be removed)</p>
                        <p class="card-text"><?php print(date('d-m-Y', strtotime("-" . $underu . " days")));?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
