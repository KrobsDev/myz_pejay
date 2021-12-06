<?php
include_once (dirname(__FILE__)) . '/../settings/core.php';
include_once (dirname(__FILE__)) . '/../controllers/product_controller.php';

// select all brands controller
$all_brands = select_all_brands_controller();

// get selected brand to edit
if (isset($_GET['editBrandID'])) {
    $selected_brand = select_one_brand_controller($_GET['editBrandID']);
}

// page if admin logs in
if (isset($_SESSION['user_role']) == '1') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/admin.css">
        <title>Admin | Brands</title>
    </head>

    <body>
        <!-- user profile -->
        <div class="us_container">
            <div class="sidebar">
                <div class="content">

                    <div class="logo">
                        <img src="../assets/logo.png" alt="">
                    </div>

                    <!-- menu -->
                    <p class="sm">Menu</p>

                    <div class="menuItems">
                        <a href="./admin-main.php" class="menuItem">
                            <div class="icon">
                                <img src="../assets/icons/bx_bxs-dashboard-white.svg" alt="">
                            </div>
                            <p class="m_name">Dashboard</p>
                        </a>
                        <a href="./admin-orders.php" class="menuItem">
                            <div class="icon">
                                <img src="../assets/icons/mdi_package-white.svg" alt="">
                            </div>
                            <p class="m_name">Orders</p>
                        </a>

                        <button class="accordion"> <img src="../assets/icons/dashicons_products.svg" alt=""> Products</button>
                        <div class="panel">
                            <a href="./admin-productView.php" class="menuItem">
                                <div class="icon">
                                    <img src="../assets/icons/eye.svg" alt="">
                                </div>
                                <p class="m_name">View Product</p>
                            </a>
                            <a href="./admin-addproducts.php" class="menuItem">
                                <div class="icon">
                                    <img src="../assets/icons/akar-icons_plus-white.svg" alt="">
                                </div>
                                <p class="m_name">AddProduct</p>
                            </a>
                            <a href="./admin-variations.php" class="menuItem">
                                <div class="icon">
                                    <img src="../assets/icons/gis_difference.svg" alt="">
                                </div>
                                <p class="m_name">Variations</p>
                            </a>
                            <a href="./admin-brands.php" class="menuItem active">
                                <div class="icon">
                                    <img src="../assets/icons/ic_baseline-review-white.svg" alt="">
                                </div>
                                <p class="m_name">Brands</p>
                            </a>
                            <a href="./admin-categories.php" class="menuItem">
                                <div class="icon">
                                    <img src="../assets/icons/bx_bxs-category-alt.svg" alt="">
                                </div>
                                <p class="m_name">Categories</p>
                            </a>
                        </div>

                        <a href="./admin-customers.php" class="menuItem">
                            <div class="icon">
                                <img src="../assets/icons/bi_people-fill.svg" alt="">
                            </div>
                            <p class="m_name">Customers</p>
                        </a>
                        <a href="./admin-payments.php" class="menuItem">
                            <div class="icon">
                                <img src="../assets/icons/fluent_payment-24-filled-white.svg" alt="">
                            </div>
                            <p class="m_name">Payments</p>
                        </a>
                        <a href="./admin-ac-settings.php" class="menuItem">
                            <div class="icon">
                                <img src="../assets/icons/clarity_settings-solid-white.svg" alt="">
                            </div>
                            <p class="m_name">Settings</p>
                        </a>
                        <a href="../login/logout.php" class="menuItem">
                            <div class="icon">
                                <img src="../assets/icons/ri_logout-circle-fill.svg" alt="">
                            </div>
                            <p class="m_name">Logout</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="side-content">
                <div class="content">
                    <div class="heading">
                        <?php
                        if (isset($_GET['editBrandID'])) {
                        ?>
                            <p>Edit Brand</p>
                        <?php
                        } else {
                        ?>
                            <p>Brands</p>
                        <?php
                        }
                        ?>


                    </div>

                    <!-- add-brand form -->
                    <div class="addProduct">
                        <form action="../actions/processProducts.php" method="POST">
                            <div class="flex">
                                <div class="form-control">
                                    <label for="">Brand Name</label>
                                    <input type="text" name="brand" id="brand" value="<?php echo $selected_brand['brand_name']; ?>">
                                    <input type="hidden" name="brand_id" value="<?php echo $selected_brand['brand_id']; ?>">
                                    <small></small>
                                    <button type="submit" name="<?php if (isset($_GET['editBrandID'])) {
                                                                    echo 'updateBrand';
                                                                } else {
                                                                    echo 'addBrand';
                                                                } ?>" id="add" class="brand"><?php
                                                                                                if (isset($_GET['editBrandID'])) {
                                                                                                    echo "Update Brand";
                                                                                                } else {
                                                                                                    echo "Add Brand";
                                                                                                } ?>
                                    </button>
                                    <?php
                                    if (isset($_GET['editBrandID'])) {
                                    ?>
                                        <button type="submit" name="cancel" id="cancel" class="brand cancel">Cancel</button>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="table">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            <?php
                            foreach ($all_brands as $brand) {
                            ?>
                                <tr>
                                    <td> <?php echo $brand['brand_id'] ?></td>
                                    <td><?php echo $brand['brand_name'] ?></td>
                                    <td class="actions">
                                        <a href="<?php echo "../admin/admin-brands.php?editBrandID=" . $brand['brand_id']; ?>"><img src="../assets/icons/ci_edit.svg" alt=""></a>
                                        <a href="<?php echo "../actions/processProducts.php?deleteBrandID=" . $brand['brand_id']; ?>"><img src="../assets/icons/fluent_delete-20-filled-black.svg" alt=""></a>
                                    </td>
                                </tr>
                            <?php

                            }
                            ?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="../js/accordion.js"></script>
        <script src="../js/brand_cat.js"></script>

    </body>

    </html>
<?php
} else {
    echo "<script type='text/javascript'> alert('Admin not logged in');
        document.location.href = '../index.php';
        </script>";
}
