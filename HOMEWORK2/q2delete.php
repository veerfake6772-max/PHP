<?php 

include 'db.php';
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $id = $_POST["id"];
   

    $sql = $conn ->prepare("delete from emp where id=? ");
    $sql -> bind_param('i',$id);
    $sql->execute();
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
            <!-- place navbar here -->
        </header>
        <main>

        <div
            class="container col=5"
        >

             <h3 class="text-center my-4">Enter Your Details to Update </h3>
            <form method="POST">

            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="id"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">ID</label>
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
