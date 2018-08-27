
<!--   Core JS Files   -->
<script src="plantilla/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="plantilla/assets/js/bootstrap.min.js" type="text/javascript"></script>



<?php if (isset($_SESSION['SYNC_ADMIN'])): ?>   
    <!--  Charts Plugin -->
    <script src="plantilla/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="plantilla/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="plantilla/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="plantilla/assets/js/demo.js"></script>
    
    

<?php else: ?>     

    <!--===============================================================================================-->
    <script src="plantilla/assets/bootstrap/js/popper.js"></script>
    <!--===============================================================================================-->
    <script src="plantilla/assets/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="plantilla/assets/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="plantilla/assets/js/main.js"></script>
<?php endif; ?>
    <script src="libs/js/login.js"></script>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

