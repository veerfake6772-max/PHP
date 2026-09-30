<?php

include 'db.php';
$result = $conn ->query("select * from emp");
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
            class="container "
        >
        <h3 class="text-center my-4" >Employee Details</h3>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
               
                    <tr>
                        <th scope="col"> ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Job Title</th>
                        <th scope="col">Salary</th>
                    </tr>
              
              
    <?php while ($row = $result->fetch_assoc()) { ?>
        
    
                    <tr class="">
                        <td scope="row"> <?php echo $row['id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['job_title']?></td>
                        <td><?php echo $row['salary']?></td>

                    </tr>
                    <?php
}?>
                
            </table>
        </div>
        
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
