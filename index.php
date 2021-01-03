<?php
include ("incl/header.incl.php");
?>
<div class="container" >
  <div class="row">
    <div class="col">
        <a href='farmers/index.php'>
            <img style="height:200px;width:200px;border:1px solid #e3e3e3;border-radius:50px;" src="img/new_farmer.jpg"><br/>
            <strong> Farmers</strong>
        </a>
    </div>
    <div class="col">
        <a href='employees/index.php'>
            <img style="height:200px;width:200px;border:1px solid #e3e3e3;border-radius:50px;" src="img/new_employees.jpg"><br/>
            <strong> Employees</strong>
        </a>
    </div>
    <div class="col">
        <a href='delivery/index.php'>
            <img style="height:200px;width:200px;border:1px solid #e3e3e3;border-radius:50px;" src="img/new_delivery.jpg"><br/>
            <strong> Deliveries</strong>
        </a>
    </div>
    
    <div class="w-100"></div>

    <div style="width:100%;height:60px"> 
    </div>

    <div class="col">
        <a href='reports/index.php'>
            <img style="height:200px;width:200px;border:1px solid #e3e3e3;border-radius:50px;" src="img/new_reports.png"><br/>
            <strong> Reports</strong>
        </a>
    </div>
    <div class="col">
        <a href='payment/index.php'>
            <img style="height:200px;width:200px;border:1px solid #e3e3e3;border-radius:50px;" src="img/payment.png"><br/>
            <strong> Payments</strong>
        </a>
    </div>
    <div class="col">
        <a href='settings/index.php'>
            <img style="height:200px;width:200px;border:1px solid #e3e3e3;border-radius:50px;" src="img/new_setting.png"><br/>
            <strong> Pricings</strong>
        </a>
    </div>
  </div>
</div>


<?php
$footer = 'incl/footer.incl.php';
include ("$footer");
?>