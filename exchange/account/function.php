<?php
// Always start the session and output buffering at the very top of the script.
session_start();
ob_start();

// --- Main Authentication and Data Fetching Logic ---

// Check if the user is logged in. The empty() function is robust enough to handle both
// the case where the variable is not set and where it's empty.
if (empty($_SESSION["user_id"])) {
    header("location: ../../login.php");
    exit();
}

$user_id = $_SESSION["user_id"];

// Ensure the database connection is valid.
if (!$conn) {
    die("Database connection failed.");
}

// Use a prepared statement to securely fetch the user's data.
// This prevents SQL injection attacks.
$stmt_user = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt_user->bind_param("i", $user_id); // "i" for integer type
$stmt_user->execute();
$result_user = $stmt_user->get_result();
$user = $result_user->fetch_assoc();

// Check if a user was actually found with that ID.
if (empty($user)) {
    // If not, redirect them to the login page as their session is invalid.
    session_destroy(); // Destroy the session for security.
    header("location: ../../login.php");
    exit();
}

$user_email = $user["user_email"];

// --- Database Queries (Now more secure) ---

// Fetch articles securely.
$sql_articles = "SELECT * FROM articles ORDER BY created_at DESC";
$result_articles = mysqli_query($conn, $sql_articles);
if (!$result_articles) {
    // Handle error gracefully.
    error_log("Error fetching articles: " . mysqli_error($conn));
    // You could display a user-friendly error message here.
}

// Fetch history securely using a prepared statement.
$stmt_history = $conn->prepare("SELECT * FROM history WHERE client_id = ?");
$stmt_history->bind_param("i", $user_id);
$stmt_history->execute();
$result_history = $stmt_history->get_result();
if (!$result_history) {
    error_log("Error fetching history: " . mysqli_error($conn));
}

// Fetch withdrawals securely using a prepared statement.
$stmt_withdrawals = $conn->prepare("SELECT * FROM withdrawals WHERE client_id = ?");
$stmt_withdrawals->bind_param("i", $user_id);
$stmt_withdrawals->execute();
$result_withdrawals = $stmt_withdrawals->get_result();
if (!$result_withdrawals) {
    error_log("Error fetching withdrawals: " . mysqli_error($conn));
}

// --- API Functions ---

function get_btc_current_price_usd() {
    /**
     * Fetches the current price of 1 Bitcoin in USD from the CoinGecko API.
     *
     * @return float|null The current price of 1 BTC in USD, or null if the fetch fails.
     */
    $currency_code_lower = "usd";
    $api_url = "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=" . $currency_code_lower;

    $response = @file_get_contents($api_url);

    if ($response === false) {
        error_log("Error in get_btc_current_price_usd: Could not fetch Bitcoin price.");
        return null;
    }

    $data = json_decode($response, true);

    if (isset($data['bitcoin']) && isset($data['bitcoin'][$currency_code_lower])) {
        return (float)$data['bitcoin'][$currency_code_lower];
    } else {
        error_log("Error in get_btc_current_price_usd: Unexpected API response format.");
        return null;
    }
}

function get_trending_coins() {
    $url = "https://api.coingecko.com/api/v3/search/trending";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
        $data = json_decode($response, true);
        return $data['coins'] ?? [];
    }
    return [];
}

function get_top_gainers_losers($period = '24h') {
    $url = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false&price_change_percentage=1h%2C24h%2C7d";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);
    if (!$data) {
        return ['gainers' => [], 'losers' => []];
    }

    usort($data, function($a, $b) use ($period) {
        return $b["price_change_percentage_{$period}"] <=> $a["price_change_percentage_{$period}"];
    });

    $gainers = array_slice($data, 0, 10);
    $losers = array_slice($data, -10);

    return ['gainers' => $gainers, 'losers' => $losers];
}

function get_new_listings() {
    return [
        ['symbol' => 'pepe', 'name' => 'Pepe', 'id' => 'pepe'],
        ['symbol' => 'w', 'name' => 'Wormhole', 'id' => 'wormhole'],
        ['symbol' => 'ena', 'name' => 'Ethena', 'id' => 'ethena'],
        ['symbol' => 'jup', 'name' => 'Jupiter', 'id' => 'jupiter'],
    ];
}
?>
