<?php
include "includes/header.php";

$message = "";

// Handle form submission to update the database
if (isset($_POST['update_address'])) {
    $coin_id = $_POST['coin_id'];
    $new_address = mysqli_real_escape_string($conn, $_POST['new_address']);
    
    // Generate QR code URL (using a placeholder service like goqr.me)
    $new_qrcode_url = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . urlencode($new_address);

    $update_sql = "UPDATE coin_wallet SET address = '$new_address', qrcode = '$new_qrcode_url' WHERE id = '$coin_id'";
    $update_query = mysqli_query($conn, $update_sql);

    if ($update_query) {
        $message = '<div class="alert alert-success d-flex align-items-center" role="alert">
                      <div>Wallet address updated successfully!</div>
                  </div>';
    } else {
        $message = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                      <div>Error updating wallet address: ' . mysqli_error($conn) . '</div>
                  </div>';
    }
}

// Fetch all available coins and networks from the database for the dropdowns
$coins_sql = "SELECT DISTINCT coin, network, id, address, qrcode FROM coin_wallet ORDER BY coin, network";
$coins_query = mysqli_query($conn, $coins_sql);

// Initialize variables for the form
$current_address = "No address selected.";
$current_qrcode = "https://via.placeholder.com/150x150.png?text=QR+Code";

// Fetch the address and QR code based on user selection if available
if (isset($_GET['selected_id']) && !empty($_GET['selected_id'])) {
    $selected_id = mysqli_real_escape_string($conn, $_GET['selected_id']);
    $fetch_sql = "SELECT address, qrcode FROM coin_wallet WHERE id = '$selected_id'";
    $fetch_query = mysqli_query($conn, $fetch_sql);
    if ($fetch_query && mysqli_num_rows($fetch_query) > 0) {
        $data = mysqli_fetch_assoc($fetch_query);
        $current_address = $data['address'];
        $current_qrcode = $data['qrcode'];
    }
}

mysqli_close($conn);
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>Dashboard <small>Control panel</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Wallets</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Wallet Addresses</h3>
                    </div>
                    <form action="" method="post" role="form">
                        <?php echo $message; ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="coin_select">Select Coin & Network</label>
                                <select class="form-control" name="coin_id" id="coin_select" onchange="window.location.href = 'edit_wallet.php?selected_id=' + this.value;">
                                    <option value="">-- Select --</option>
                                    <?php
                                    // Reset the pointer and loop through the data for the dropdown
                                    mysqli_data_seek($coins_query, 0);
                                    while ($coin = mysqli_fetch_assoc($coins_query)) {
                                        $selected = (isset($_GET['selected_id']) && $_GET['selected_id'] == $coin['id']) ? 'selected' : '';
                                        echo "<option value='{$coin['id']}' {$selected}>{$coin['coin']} ({$coin['network']})</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            
                            <div class="form-group text-center">
                                <label>Current QR Code</label>
                                <br>
                                <img id="qr_code_display" src="<?php echo htmlspecialchars($current_qrcode); ?>" alt="QR Code" style="width:150px;height:150px;border:1px solid #ccc;">
                            </div>
                            
                            <div class="form-group">
                                <label for="current_address_display">Current Address</label>
                                <input type="text" id="current_address_display" class="form-control" value="<?php echo htmlspecialchars($current_address); ?>" readonly>
                            </div>

                            <hr>
                            <h4 class="text-center">Update Address</h4>
                            <div class="form-group">
                                <label for="new_address">New Wallet Address</label>
                                <input type="text" name="new_address" id="new_address" class="form-control" placeholder="Enter new wallet address" required>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button name="update_address" type="submit" class="btn btn-primary">Update Address</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include "includes/footer.php"; ?>