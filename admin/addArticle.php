<?php
// This file assumes a database connection is established in includes/header.php
// and the $conn variable is available.
include "includes/header.php";

$message = "";

// Function to handle file uploads
function handle_file_upload($file_key, $upload_dir) {
    if (isset($_FILES[$file_key]) && $_FILES[$file_key]['error'] == UPLOAD_ERR_OK) {
        $file_tmp_path = $_FILES[$file_key]['tmp_name'];
        $file_name = uniqid() . '_' . basename($_FILES[$file_key]['name']);
        $dest_path = $upload_dir . $file_name;

        // Ensure the directory exists
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        // Move the file to the destination
        if (move_uploaded_file($file_tmp_path, $dest_path)) {
            return $dest_path; // Return the path to be stored in the database
        }
    }
    return null; // Return null if there's an error or no file was uploaded
}

// Function to delete old file
function delete_old_file($file_path) {
    if ($file_path && file_exists($file_path)) {
        unlink($file_path);
    }
}

// Determine the action
$action = $_GET['action'] ?? 'list';

// Handle POST requests for adding and updating
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize all form data
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $author_name = $_POST['author_name'] ?? '';

    // Handle article image upload
    $article_image_path = handle_file_upload('image', 'uploads/');
    // If a new image was not uploaded, use the existing one
    if ($article_image_path === null) {
        $article_image_path = $_POST['existing_image'] ?? null;
    } else {
        // Delete the old file if a new one was uploaded
        delete_old_file($_POST['existing_image'] ?? null);
    }
    
    // Handle author image upload
    $author_image_path = handle_file_upload('author_image', 'uploads/');
    // If a new author image was not uploaded, use the existing one
    if ($author_image_path === null) {
        $author_image_path = $_POST['existing_author_image'] ?? null;
    } else {
        // Delete the old file if a new one was uploaded
        delete_old_file($_POST['existing_author_image'] ?? null);
    }

    if (isset($_POST['add_article'])) {
        $sql = "INSERT INTO articles (title, content, author_name, image, author_image_url) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $title, $content, $author_name, $article_image_path, $author_image_path);
            
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
        
        $sql = "UPDATE articles SET title = ?, content = ?, author_name = ?, image = ?, author_image_url = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssssi", $title, $content, $author_name, $article_image_path, $author_image_path, $id);
            
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

    // First, retrieve the image paths to delete the files
    $sql_select = "SELECT image, author_image_url FROM articles WHERE id = ?";
    $stmt_select = mysqli_prepare($conn, $sql_select);
    mysqli_stmt_bind_param($stmt_select, "i", $id);
    mysqli_stmt_execute($stmt_select);
    $result_select = mysqli_stmt_get_result($stmt_select);
    $article_to_delete = mysqli_fetch_assoc($result_select);
    mysqli_stmt_close($stmt_select);

    if ($article_to_delete) {
        // Delete the files from the server
        delete_old_file($article_to_delete['image']);
        delete_old_file($article_to_delete['author_image_url']);

        // Now delete the record from the database
        $sql = "DELETE FROM articles WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
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
    } else {
        $message = '<div class="alert alert-danger">Article not found.</div>';
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
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT id, title, author_name, image FROM articles ORDER BY created_at DESC";
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
                                            <?php if (!empty($row['image'])): ?>
                                                <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="Article Image" style="width: 50px; height: auto;">
                                            <?php else: ?>
                                                N/A
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-xs">Edit</a>
                                            <a href="?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this article?');">Delete</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<tr><td colspan='5'>No articles found.</td></tr>";
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
                <form action="<?php echo $form_action_url; ?>" method="post" role="form" enctype="multipart/form-data">
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
                            <label for="image">Article Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <?php if ($article_image): ?>
                                <p class="help-block">Current Image: <a href="<?php echo htmlspecialchars($article_image); ?>" target="_blank">View</a></p>
                                <input type="hidden" name="existing_image" value="<?php echo htmlspecialchars($article_image); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="author_image">Author Image</label>
                            <input type="file" name="author_image" id="author_image" class="form-control">
                            <?php if ($article_author_image_url): ?>
                                <p class="help-block">Current Author Image: <a href="<?php echo htmlspecialchars($article_author_image_url); ?>" target="_blank">View</a></p>
                                <input type="hidden" name="existing_author_image" value="<?php echo htmlspecialchars($article_author_image_url); ?>">
                            <?php endif; ?>
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