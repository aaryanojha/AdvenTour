<html>
  <head>
  <link rel="stylesheet" href="admin.css">
  <style>#t2 {
  display: none;
}</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!-- <script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("table").hide();
  });
  $("#hide").click(function(){
    $("t2").hide();
  });
  $("#show").click(function(){
    $("table").show();
  });
});
</script> -->
<script>
    function switchVisible() {
            if (document.getElementById('t1')) {

                if (document.getElementById('t1').style.display == 'none') {
                    document.getElementById('t1').style.display = 'block';
                    document.getElementById('t2').style.display = 'none';
                }
                else {
                    document.getElementById('t1').style.display = 'none';
                    document.getElementById('t2').style.display = 'block';
                }
            }
}
</script>
  </head>
  <body>
        <div class="boxes">
            <span style="margin-top:-2vh"><button id="Button1" onclick="switchVisible();">Destinations/Packages</button>
            </span>
            <!-- <span style="margin-top:-16vh;margin-left:120vh"><button onclick="switchVisible();">Packages</button>
            </span> -->
        </div>
    <nav class="main-menu">
            <ul>
                <li>
                    <a href="admin.html">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                          Home
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="destination.php">
                        <i class="fa fa-globe fa-2x"></i>
                        <span class="nav-text">
                            Destinations
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="adminenquiry.php">
                       <i class="fa fa-comments fa-2x"></i>
                        <span class="nav-text">
                            Enquiries
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="userdetails.php">
                       <i class="fa fa-user fa-2x"></i>
                        <span class="nav-text">
                            User Details
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="adminbooking.php">
                        <i class="fa fa-plane fa-2x"></i>
                        <span class="nav-text">
                            Booking Details
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="../User/Login/login.html">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>    
        <table border="0" width="100%" align="center" class="customers" id="t1">
 <tr align="center" >
   <th>Pune</th>
   <th>Mumbai</th>
   <th>Delhi</th>
 </tr>
 <tr>
    <td align="center">Shaniwar Wada</td>
    <td align="center">Gateway of India</td>
    <td align="center">Chhatarpur Temple</td>
 </tr>
 <td align="center">Shaniwar Wada</td>
    <td align="center">Gateway of India</td>
    <td align="center">Chhatarpur Temple</td>
 </tr>
 <td align="center">Shaniwar Wada</td>
    <td align="center">Gateway of India</td>
    <td align="center">Chhatarpur Temple</td>
 </tr>
 <td align="center">Shaniwar Wada</td>
    <td align="center">Gateway of India</td>
    <td align="center">Chhatarpur Temple</td>
 </tr>
 <td align="center">Shaniwar Wada</td>
    <td align="center">Gateway of India</td>
    <td align="center">Chhatarpur Temple</td>
 </tr>
 <td align="center">Shaniwar Wada</td>
    <td align="center">Gateway of India</td>
    <td align="center">Chhatarpur Temple</td>
 </tr>
 <td align="center">Shaniwar Wada</td>
    <td align="center">Gateway of India</td>
    <td align="center">Chhatarpur Temple</td>
 </tr>
 <td align="center">Shaniwar Wada</td>
    <td align="center">Gateway of India</td>
    <td align="center">Chhatarpur Temple</td>
 </tr>
 <td align="center">Shaniwar Wada</td>
    <td align="center">Gateway of India</td>
    <td align="center">Chhatarpur Temple</td>
 </tr>
 <td align="center">Shaniwar Wada</td>
    <td align="center">Gateway of India</td>
    <td align="center">Chhatarpur Temple</td>
 </tr>
 <td align="center">Shaniwar Wada</td>
    <td align="center">Gateway of India</td>
    <td align="center">Chhatarpur Temple</td>
 </tr>
 <td align="center">Shaniwar Wada</td>
    <td align="center">Gateway of India</td>
    <td align="center">Chhatarpur Temple</td>
 </tr>
</table>
<table border="0" width="80%" align="center" class="customers" id="t2" name="t2">
 <tr align="center" >
   <th>Pune</th>
   <th>Mumbai</th>
   <th>Delhi</th>
 </tr>
 <tr>
 <td>Pune Full Tour</td>
 <td>Mumbai Full Tour</td>
 <td>Delhi Full Tour</td>
 </tr>
</table>
</div>
  </body>
    </html>