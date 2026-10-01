<?php

include("db.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conn ->prepare("select * from products where id=?");
    $sql -> bind_param('i',$id);
    $sql->execute();
    $user = $sql -> get_result()->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $pname = $_POST["pname"];
    $pprice = $_POST["pprice"];
    $pcategory= $_POST["pcategory"];
    $pquantity = $_POST["pquantity"];

    $sql = $conn->prepare("update products set pname=?,pprice=?,pcategory=?,pquantity=? where id=? ");
    $sql -> bind_param('sdsii',$pname,$pprice,$pcategory,$pquantity, $id);
   
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
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            
        </header>
        <main>

        <h3 class="text-center my-4 "> Update Products</h3>
        <div
            class="container col-5 border shadow py-4 rounded"
        >
           <form method="POST">
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control"
            name="pname"
            id="formId1"
            placeholder=""
            value="<?= $user['pname'] ?>"
        />
        <label for="formId1">Product Name</label>
    </div>
    
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control"
            name="pprice"
            id="formId1"
            placeholder=""
            value="<?= $user['pprice'] ?>"
        />
        <label for="formId1">Product Price</label>
    </div>
    
<div class="form-floating mb-3">
    <input
        type="text"
        class="form-control"
        name="pcategory"
        id="formId1"
        placeholder=""
        value="<?= $user['pcategory'] ?>"
    />
    <label for="formId1">Product Category</label>
</div>

<div class="form-floating mb-3">
    <input
        type="text"
        class="form-control"
        name="pquantity"
        id="formId1"
        placeholder=""
        value="<?= $user['pquantity'] ?>"
    />
    <label for="formId1">Product Quantity</label>
</div>
<button
    type="submit"
    class="btn btn-primary"
>
    Submit
</button>


           </form>
        </div>

        
       
               
       
        
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

