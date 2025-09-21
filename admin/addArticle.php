<?php
include "includes/header.php";

$message = "";

// Determine the action
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

// Handle POST requests for adding and updating
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_article'])) {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);

        $sql = "INSERT INTO articles (title, content) VALUES ('$title', '$content')";
        if (mysqli_query($conn, $sql)) {
            $message = '<div class="alert alert-success">Article added successfully!</div>';
        } else {
            $message = '<div class="alert alert-danger">Error: ' . mysqli_error($conn) . '</div>';
        }
    } elseif (isset($_POST['update_article'])) {
        $id = mysqli_real_escape_string($conn, $_POST['article_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);

        $sql = "UPDATE articles SET title = '$title', content = '$content' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            $message = '<div class="alert alert-success">Article updated successfully!</div>';
        } else {
            $message = '<div class="alert alert-danger">Error: ' . mysqli_error($conn) . '</div>';
        }
    }
} elseif ($action === 'delete' && isset($_GET['id'])) {
    // Handle GET request for deleting
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "DELETE FROM articles WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        $message = '<div class="alert alert-success">Article deleted successfully!</div>';
    } else {
        $message = '<div class="alert alert-danger">Error: ' . mysqli_error($conn) . '</div>';
    }
    // Redirect back to list view to clear the URL parameters
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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT id, title FROM articles ORDER BY created_at DESC";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                $count = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $count++; ?></td>
                                        <td><?php echo htmlspecialchars($row['title']); ?></td>
                                        <td>
                                            <a href="?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-xs">Edit</a>
                                            <a href="?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this article?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else {
                                echo "<tr><td colspan='3'>No articles found.</td></tr>";
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
            $form_action_url = '?action=add';
            $form_heading = 'Add New Article';
            $submit_name = 'add_article';
            $submit_text = 'Add Article';

            if ($action === 'edit' && isset($_GET['id'])) {
                $article_id = mysqli_real_escape_string($conn, $_GET['id']);
                $sql = "SELECT * FROM articles WHERE id = '$article_id'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $article = mysqli_fetch_assoc($result);
                    $article_title = htmlspecialchars($article['title']);
                    $article_content = htmlspecialchars($article['content']);
                    $form_action_url = '?action=edit&id=' . $article_id;
                    $form_heading = 'Edit Article';
                    $submit_name = 'update_article';
                    $submit_text = 'Update Article';
                }
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
    </section></div><?php
mysqli_close($conn);
include "includes/footer.php";
?>