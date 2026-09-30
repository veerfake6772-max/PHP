<?php
include("db.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pid = $_POST["pid"];
 

    $sql = $conn->prepare("delete from products where product_id =?");
    $sql->bind_param('i', $pid);


    if ($sql->execute()) {
        header("location:home.php");
    }

}



?>

<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#"><?php echo "Hello " . $_SESSION['username'] ?></a>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" href="insert.php">Add Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="update.php">Update Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="delete.php">Delete Product</a>
                            </li>

                        </ul>
                        <form class="d-flex my-2 my-lg-0">

                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <h3 class="text-center text-primary my-4">ADD PRODUCTS</h3>

        <div class="container col=5">
            <form method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="pid" id="formId1" placeholder="" />
                    <label for="formId1">Product ID</label>
                </div>





                <button type="submit" class="btn btn-primary">
                    Submit
                </button>




            </form>

        </div>




    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>