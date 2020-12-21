<div id="danhmucsp">
    <div class="center">
        <h4>SẢN PHẨM</h4>
        <?php
        $sql = "select * from danhmuc where dequi=1";
        $result = $o->query($sql);
        $data = $result->fetchAll();
        ?>
        <ul>
            <?php
            foreach ($data as $row) {
            ?>
            <li><a href="index.php?madm=<?php echo $row['madm'] ?>"><?php echo $row["tendm"]; ?></a></li>
            <?php } ?>
        </ul>
    </div><!-- End .center -->
</div> <!-- End .menu-left -->

<div id="phukien">
    <div class="center">
        <h4> PHỤ KIỆN</h4>
        <?php
        $sql = "select * from danhmuc where dequi=2";
        $result = $o->query($sql);
        $data = $result->fetchAll();
        ?>
        <ul>
            <?php
            foreach ($data as $row) {
            ?>
            <li><a href="index.php?madm=<?php echo $row['madm'] ?>"><?php echo $row["tendm"]; ?></a></li>
            <?php } ?>
        </ul>
    </div><!-- End .center -->
</div><!-- End .phukien -->