 <?php

  $loi = 0;
  foreach ($_SESSION['cart'] as $stt => $soluong) {

    $sql = "select soluong,tensp,daban from sanpham where idsp=$stt";
    $rows = $o->query($sql)->fetchAll();
    $row = $rows[0];
    $sl = $_SESSION['cart'][$stt];
    if ($row['soluong'] == 0 or ($row['soluong'] - $row['daban']) < $sl) {
      echo '<meta http-equiv="refresh" content="2;index.php?content=cart">';
      echo "Sản phẩm <font color='red'><b>" . $row['tensp'] . "</b></font> đã hết hoặc không đủ hàng trong kho<br><br>";
      $loi += 1;
    }
  }
  if ($loi == 0)
    echo '<meta http-equiv="refresh" content="0;index.php?content=cart&action=thanhtoan">';

  ?>