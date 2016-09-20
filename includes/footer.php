<?php
$startYear = 1997;
$thisYear = date('Y');
if ($thisYear > $startYear) {
    $thisYear = date('Y');
    $copyright = "$startYear&ndash;$thisYear";
} else {
    $copyright = $startYear;
}
?>

<div class="clear"></div>

<div class="container">
            <footer class="navbar-fixed-bottom">
                <div id="footerContent">
                    <div id="leftFooter">
                        <h4>Webmaster</h4>
                        <h5><a href="mailto:donihardy@gmail.com">Contact</a></h5>
                        <h6>© <?php echo $copyright; ?></h6>
                    </div>
                    <div id="rightFooter"><b>This URL is for sale.</b><br />
                      Contact: <a href="mailto:donihardy@gmail.com">donihardy at gmail.com</a></div>
                   </div>
            </footer>
        </div>


            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/bootstrap-submenu.min.js" defer></script>
            <script src="js/navbar.js"></script>
            <script src="js/script.js"></script>
</body>
</html>
