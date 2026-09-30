<?php


include("db.php");
if($_SERVER["REQUEST_METHOD"]==="POST"){
$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$username=$_POST["username"];
$email = $_POST["email"];
$phone= $_POST["phone"];
$city=$_POST["city"];
$gender=$_POST["gender"];
$pass= password_hash($_POST["password"],PASSWORD_BCRYPT) ;

$sql = $conn->prepare("insert into users(first_name,last_name,username, email, phone, city, gender, password) values(?,?,?,?,?,?,?,?)");
$sql->bind_param('ssssssss',$fname,$lname,$username,$email,$phone,$city,$gender,$pass);
if ($sql->execute()) {
    header("location:login.php");
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
           <h2 class="text-center mt-4" >Register With Us.</h2>
        </header>
        <main>

        <div
            class="container col=5"
        >
        <form method="POST">
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="first_name"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">First Name</label>
            </div>
             <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="last_name"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Last Name</label>
            </div>
              <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="username"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Username</label>
            </div>

           <div class="form-floating mb-3">
            <input
                type="email"
                class="form-control"
                name="email"
                id="formId1"
                placeholder=""
            />
            <label for="formId1">Email</label>
           </div>
           
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="phone"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Phone</label>
            </div>
             <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="city"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">City</label>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Gender</label>
                <select
                    class="form-select form-select-lg"
                    name="gender"
                    id=""
                >
                    <option selected>Select one</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
           <div class="form-floating mb-3">
            <input
                type="password"
                class="form-control"
                name="password"
                id="formId1"
                placeholder=""
            />
            <label for="formId1">Password</label>
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
