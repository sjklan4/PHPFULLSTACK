
<header>
    header
    <?php
        if($flg_header === "index")
        {
            echo "index";
        }
        elseif($flg_header === "heder_sub")
        {
            echo "<span>heder_sub만 표시됩니다.</span>";
        }
    ?>

</header>
