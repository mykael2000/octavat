<?php
// This file assumes a database connection is established in includes/header.php
// and the $conn variable is available.
include "includes/header.php";

$message = "";

// Determine the action
$action = $_GET['action'] ?? 'list';

// Handle POST requests for adding and updating
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize all form data
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $author_name = $_POST['author_name'] ?? '';
    $image = $_POST['image'] ?? null; // Use null for optional fields
    $author_image_url = $_POST['author_image_url'] ?? null;

    if (isset($_POST['add_article'])) {
        // SQL query with placeholders (?) for prepared statement
        $sql = "INSERT INTO articles (title, content, author_name, image, author_image_url) VALUES (?, ?, ?, ?, ?)";
        
        // Prepare the statement
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            // Bind parameters to the statement
            // 'sssss' indicates all parameters are strings
            mysqli_stmt_bind_param($stmt, "sssss", $title, $content, $author_name, $image, $author_image_url);
            
            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                $message = '<div class="alert alert-success">Article added successfully!</div>';
            } else {
                $message = '<div class="alert alert-danger">Error: ' . mysqli_error($conn) . '</div>';
            }
            
            mysqli_stmt_close($stmt);
        } else {
            $message = '<div class="alert alert-danger">Error preparing statement: ' . mysqli_error($conn) . '</div>';
        }

    } elseif (isset($_POST['update_article'])) {
        $id = $_POST['article_id'] ?? 0;
        
        // SQL query with placeholders (?) for prepared statement
        $sql = "UPDATE articles SET title = ?, content = ?, author_name = ?, image = ?, author_image_url = ? WHERE id = ?";
        
        // Prepare the statement
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            // Bind parameters
            // 'sssssi' indicates five strings and one integer
            mysqli_stmt_bind_param($stmt, "sssssi", $title, $content, $author_name, $image, $author_image_url, $id);
            
            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                $message = '<div class="alert alert-success">Article updated successfully!</div>';
            } else {
                $message = '<div class="alert alert-danger">Error: ' . mysqli_error($conn) . '</div>';
            }
            
            mysqli_stmt_close($stmt);
        } else {
            $message = '<div class="alert alert-danger">Error preparing statement: ' . mysqli_error($conn) . '</div>';
        }
    }

} elseif ($action === 'delete' && isset($_GET['id'])) {
    // Handle GET request for deleting
    $id = $_GET['id'];
    
    // SQL query with a placeholder
    $sql = "DELETE FROM articles WHERE id = ?";
    
    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        // Bind the ID parameter
        mysqli_stmt_bind_param($stmt, "i", $id);
        
        if (mysqli_stmt_execute($stmt)) {
            $message = '<div class="alert alert-success">Article deleted successfully!</div>';
        } else {
            $message = '<div class="alert alert-danger">Error: ' . mysqli_error($conn) . '</div>';
        }
        
        mysqli_stmt_close($stmt);
    } else {
        $message = '<div class="alert alert-danger">Error preparing statement: ' . mysqli_error($conn) . '</div>';
    }
    
    // Redirect back to the list view to prevent resubmission
    header("Location: addArticle.php");
    exit();
}
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>Article Management <small>Control panel</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Articles</li>
        </ol>
    </section>

    <section class="content">
        <?php echo $message; ?>

        <?php if ($action === 'list' || $message) { ?>
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">All Articles</h3>
                    <div class="box-tools pull-right">
                        <a href="?action=add" class="btn btn-success btn-sm">Add New Article</a>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT id, title, author_name FROM articles ORDER BY created_at DESC";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                $count = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $count++; ?></td>
                                        <td><?php echo htmlspecialchars($row['title']); ?></td>
                                        <td><?php echo htmlspecialchars($row['author_name']); ?></td>
                                        <td>
                                            <a href="?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-xs">Edit</a>
                                            <!-- Note: `confirm()` is not visible in the immersive environment. Consider using a custom modal for confirmation. -->
                                            <a href="?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this article?');">Delete</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<tr><td colspan='4'>No articles found.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        <?php } elseif ($action === 'add' || $action === 'edit') { ?>
            <?php
            $article_id = '';
            $article_title = '';
            $article_content = '';
            $article_author_name = '';
            $article_image = '';
            $article_author_image_url = '';
            $form_action_url = '?action=add';
            $form_heading = 'Add New Article';
            $submit_name = 'add_article';
            $submit_text = 'Add Article';

            if ($action === 'edit' && isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM articles WHERE id = ?";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "i", $id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) > 0) {
                    $article = mysqli_fetch_assoc($result);
                    $article_id = htmlspecialchars($article['id']);
                    $article_title = htmlspecialchars($article['title']);
                    $article_content = htmlspecialchars($article['content']);
                    $article_author_name = htmlspecialchars($article['author_name']);
                    $article_image = htmlspecialchars($article['image']);
                    $article_author_image_url = htmlspecialchars($article['author_image_url']);
                    $form_action_url = '?action=edit&id=' . $article_id;
                    $form_heading = 'Edit Article';
                    $submit_name = 'update_article';
                    $submit_text = 'Update Article';
                }
                mysqli_stmt_close($stmt);
            }
            ?>
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><?php echo $form_heading; ?></h3>
                </div>
                <form action="<?php echo $form_action_url; ?>" method="post" role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Article Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="<?php echo $article_title; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="author_name">Author Name</label>
                            <input type="text" name="author_name" id="author_name" class="form-control" value="<?php echo $article_author_name; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Article Image URL</label>
                            <input type="text" name="image" id="image" class="form-control" value="<?php echo $article_image; ?>">
                        </div>
                        <div class="form-group">
                            <label for="author_image_url">Author Image URL</label>
                            <input type="text" name="author_image_url" id="author_image_url" class="form-control" value="<?php echo $article_author_image_url; ?>">
                        </div>
                        <div class="form-group">
                            <label for="content">Article Content</label>
                            <textarea name="content" id="content" class="form-control" rows="10" required><?php echo $article_content; ?></textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="article_id" value="<?php echo $article_id; ?>">
                        <button name="<?php echo $submit_name; ?>" type="submit" class="btn btn-primary"><?php echo $submit_text; ?></button>
                        <a href="addArticle.php" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>
        <?php } ?>
    </section>
</div>
<?php
mysqli_close($conn);
include "includes/footer.php";
?>
