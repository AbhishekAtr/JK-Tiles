<?php
include './admin/partials/db_connect.php';
$tab_query = "SELECT * FROM categories ORDER BY cat_id ASC";
$tab_result = mysqli_query($conn, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
while ($row = mysqli_fetch_array($tab_result)) {
    if ($i == 0) {
        $tab_menu .= '
  <button class="tablinks active" onmouseover="openCity(event, ' . $row["cat_id"] . ')"><a data-toggle="tab" href="#' . $row["cat_id"] . '">' . $row["cat_title"] . '</a></button>';
        $tab_content .= '
   <div id="' . $row["cat_id"] . '" class="tab-content in active"><div class="row card-content">';
    } else {
        $tab_menu .= '
        <button class="tablinks" onmouseover="openCity(event, ' . $row["cat_id"] . ')"><a data-toggle="tab" href="#' . $row["cat_id"] . '">' . $row["cat_title"] . '</a></button>';
        $tab_content .= '<div id="' . $row["cat_id"] . '" class="tab-content"> <div class="row card-content">';
    }
    $product_query = "SELECT * FROM `products` WHERE `p_id` = '" . $row["cat_id"] . "'";
    $product_result = mysqli_query($conn, $product_query);
    while ($sub_row = mysqli_fetch_array($product_result)) {
        $tab_content .= '
        <div class="col-md-6 col-lg-6 col-sm-6">
        <div class="card menu-card">
        <img src="' . $url . $sub_row["product_img"] . '" class="card-img-top" />
        </div>
        <div class="card-content content text-center">
            <a href="products.php?id=' . $sub_row["product_id"] . '">
                <p>' . $sub_row["product_title"] . '</p>
                <p>' . $sub_row["product_title"] . '</p>
            </a>
            <button class="btn accent-solid-btn btn-dark"><a href="img/jk.pdf" target="_blank">Download Brochure <span class="fa fa-download"></span></a> </button>
        </div>
    </div>
    
  ';
    }
    $tab_content .= '</div><div class="clearfix"></div>';
    $i++;
}
?>