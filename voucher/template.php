																																										<?php
if(substr($validity,-1) == "d"){
  $validity = "".substr($validity,0,-1)." HARI";
}else if(substr($validity,-1) == "h"){
  $validity = "".substr($validity,0,-1)." JAM";
}
if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){
  $timelimit = "Durasi:".((substr($timelimit,0,-1)*7) +  substr($timelimit, 2,1))." HARI";
}else if(substr($timelimit,-1) == "d"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)." HARI";
}else if(substr($timelimit,-1) == "h"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)." JAM";
}else if(substr($timelimit,-1) == "w"){
  $timelimit = "Durasi:".(substr($timelimit,0,-1)*7)." HARI";
}

if($getsprice == "3000"){ $color = "#110713";} // hitam
elseif($getsprice == "5000"){ $color = "#081f78";} //kuning
elseif($getsprice == "8000"){ $color = "#b312a2";} // pink
elseif($getsprice == "10000"){ $color = "#008000";} // ijo
elseif($getsprice == "21000"){ $color = "#781010";} // merah
elseif($getsprice == "70000"){ $color = "#FF00FF";} // ungu
?>

<style>
	.qrcode{
		height:80px;
		width:80px;
	}
</style>

<table class="voucher" style="background:#FFF;margin: 0px;border: 3px solid <?php echo $color ?>; border-radius: 2px;">
  <tbody>
<!-- /  -->
    <tr>
      <td>
    <table style=" text-align: center; width: 230px; font-size: 12px;">
  <tbody>
<!-- Username Password QR    -->
    <tr>
      <td>
        <table style="width:100%;">
<!-- Username = Password    -->
<?php if ($usermode == "vc") { ?>
        <tr>
          <td font-size: 12px;>Kode Voucher</td>
        </tr>
        <tr>
          <td style="width:100%; border: 1px solid black; font-weight:bold; font-size:16px;"><?= $username; ?></td>
        </tr>
<!-- /  -->
<!-- Username & Password  -->
<?php 
} elseif ($usermode == "up") { ?>
<!-- Check QR  -->
<?php if ($qr == "yes") { ?>
        <tr>
          <td>Username</td>
        </tr>
        <tr>
          <td style="border: 2px solid <?php echo $color ?>; font-weight:bold;"><?= $username; ?></td>
        </tr>
        <tr>
          <td>Password</td>
        </tr>
        <tr>
          <td style="border: 2px solid <?php echo $color ?>; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
} else { ?>
        <tr>
          <td style="width: 50%">Username</td>
          <td >Password</td>
        </tr>
        <tr style="font-size: 14px;">
          <td style="border: 2px solid <?php echo $color ?>; font-weight:bold;"><?= $username; ?></td>
          <td style="border: 2px solid <?php echo $color ?>; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
}
} ?>
<!-- /  -->
        </table>
      </td>
<!-- QR Code    -->
<?php if ($qr == "yes") { ?>
      <td>
	<?= $qrcode ?>
      </td>
<?php 
} ?>
<!-- /  -->
    <tr>
      <!-- Price  -->
      <td colspan="2" style="border-top: 2px solid <?php echo $color ?>; font-size:12px">Masa aktif: <b><?= $validity; ?></b> <?= $timelimit; ?> <?= $datalimit; ?></br>Harga: <b><?= $price; ?></b></td>
<!-- /  -->
    </tr>
    <tr>
      <!-- Note  -->
      <td colspan="2" style="font-weight:bold; font-size:12px">Login: http://<?= $dnsname; ?></td>
<!-- /  -->
    </tr>
<!-- /  -->
<tr>
<td style="background:<?php echo $color ?>;color:#666;padding:0px;" valign="top" colspan="2">
<div style="text-align:left;color:#fff;font-size:9px;font-weight:bold;margin:0px;padding:2.5px;">
<center>CS: <b>0895 4012 23315</b></center>
</div>
</td>
</tr>
  </tbody>
    </table>
      </td>
    </tr>
  </tbody>
</table>	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        