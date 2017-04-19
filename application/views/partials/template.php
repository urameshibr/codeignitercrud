<!doctype html>
<html lang="en">
<?php include('head.php') ?>
<body>
<?php include('nav.php')?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include(APPPATH . "views/{$view}") ?>
        </div>
    </div>
</div>
</body>
</html>