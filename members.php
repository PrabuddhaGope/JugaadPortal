<?php
// Start the session
session_start();
$SIZE = $_SESSION['SIZE'];

?>
<html>
<head>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php include("head.php");?>
<body id="main">
    <?php include("header.php");?>


            <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center js__parallax-window" style="background: black 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-100--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">MEMBER DETAILS</h1>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

<div class="container" style="background:#eee;">

    <form class="form-horizontal" method ="post" action="<?php echo($SIZE)?>/submit.php">
        <div class="container" style="margin-top:50px">
            <div class="row">
                <div class="  col-lg-4 "></div>
                <div class="col-lg-4 ">
                    <input class="form-control s-form-v2__input g-radius--50" type="text" name="teamname" placeholder="TEAM NAME" required>
                </div>
                <div class="  col-lg-4 "></div>
            </div>
        </div>
        <div class="row">
        <?php
        for($i=0; $i<$SIZE; $i++):
        ?>
        <div class="col-lg-4">
            <h2 style="text-align: center">MEMBER <?php echo($i+1) ?></h2>
            <br>
            <div class="form-group">
                <input class="form-control s-form-v2__input g-radius--50" type="text" name="name[]" placeholder="NAME" required>

            </div>
            <br>
            <div class="form-group">
                <select class="form-control s-form-v2__input g-radius--50" name="college[]" required>
                    <option value="">COLLEGE</option>
                    <option value="SHREE RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT">SHREE RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT</option>
                    <option value="INDIAN INSTITUTE OF INFORMATION TECHNOLOGY">INDIAN INSTITUTE OF INFORMATION TECHNOLOGY</option>
                    <option value="YESHWANTRAO CHAVAN COLLEGE OF ENGINEERING">YESHWANTRAO CHAVAN COLLEGE OF ENGINEERING</option>
                    <option value="LAXMINARAYAN INSTITUTE OF TECHNOLOGY">LAXMINARAYAN INSTITUTE OF TECHNOLOGY</option>
                    <option value="G. H. RAISONI COLLEGE OF ENGINEERING">G. H. RAISONI COLLEGE OF ENGINEERING</option>
                    <option value="VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY">VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY</option>
                    <option value="OTHER">OTHER</option>
                </select>

            </div>
            <br>
            <div class="form-group">
                <input class="form-control s-form-v2__input g-radius--50" type="text" name="contact[]" pattern="[789][0-9]{9}" placeholder="CONTACT" autocomplete="off" required>
            </div>
            <br>
            <div class="form-group">
                <input class="form-control s-form-v2__input g-radius--50" type="email" name="email[]" placeholder="EMAIL" autocomplete="off" required>
            </div>
        </div>
        <?php endfor; ?>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <input type="submit" name="submit" value="REGISTER" class="btn btn-info" style="text-align: center">
            </div>
        </div>
    </form>

</div>
<?php include("footer.php");?>
<?php include("scripts.php");?>
</body>
</html>