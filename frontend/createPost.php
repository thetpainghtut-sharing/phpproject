<?php 
  session_start();
  if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
  }

  include '../dbconnect.php';

  // select categories
  $stmt = $pdo->query("SELECT * FROM categories ORDER BY id DESC");
  $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // save post
  if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = htmlspecialchars($_POST['title']);
    $category = htmlspecialchars($_POST['category']);
    $content = $_POST['content'];
    $stmt = $pdo->prepare("INSERT INTO posts (title, category_id, content, author_id, status) VALUES (:title, :category, :content, :author_id, :status)");
    $stmt->execute([
      'title' => $title,
      'category' => $category,
      'content' => $content,
      'author_id' => $_SESSION['user']['id'], // auth user's id
      'status' => 'created'
    ]);
    header('Location: profile.php');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Bootstrap core Css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!-- include summernote css/js -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    </head>
    <body>
        <!-- Responsive navbar-->
        <?php include 'navbar.php'; ?>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                  <h2>Create New Post Page</h2>
                  <form action="#" method="post">
                    <div class="form-group mb-3">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                    </div>
                    <div class="form-group mb-3">
                      <label for="category">Category</label>
                      <select class="form-control" id="category" name="category">
                        <?php foreach ($categories as $category): ?>
                          <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group mb-3">
                      <label for="summernote">Content</label>
                      <textarea class="form-control" id="summernote" name="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
                <!-- Side widgets-->
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
        <!-- Footer-->
        <?php include 'footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
          $(document).ready(function() {
            $('#summernote').summernote();
          });
        </script>
    </body>
</html>
