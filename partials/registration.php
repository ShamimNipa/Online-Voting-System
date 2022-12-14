<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System-Registration page</title>
    <!--Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <h1 class="text-center text-info p-3">Online Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username"
                        placeholder="Enter Your Username" required="required">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile"
                        placeholder="Enter Your Mobile Number" required="required" maxlength="11" minlength="11">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password"
                        placeholder="Enter Your Password" required="required">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="cpassword"
                        placeholder="Confirm Password" required="required">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control w-50 m-auto" name="photo">
                </div>
                <div class="mb-3 ">
                    <select name="std" class="form-select  w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Register</button>
                <p>Already have an Account?
                    <a href="../" class="text-white">Login Here</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>