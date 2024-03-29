<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="Fontawesome/css/bootstrap.min.css">
    <link rel="stylesheet" href="Fontawesome/css/all.min.css">
    <link rel="stylesheet" href="Fontawesome/css/profile.css">
</head>

<body>
    <div class="bg-light">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                    <h2 class="text-center pt-3"> Create Your Profile</h2>
                    <p class="text-center text-muted lead">Personalize your Account</p>

                    <!-- form start -->
                    <form action="Profile-update.php" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="First Name" id="FirstName"
                                name="fname">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text "><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Last Name" id="LastName" name="lname">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text "><i class="fa-solid fa-address-card"></i></span>
                            <input type="text" class="form-control" placeholder="National ID/Passport" id="SSID"
                                name="SSID">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text "><i class="fa-solid fa-pen-to-square"></i></span>
                            <input type="text" class="form-control" placeholder="TIN number" id="TIN" name="TIN">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text "><i class="fa-solid fa-phone-volume"></i></span>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone">
                        </div>

                        <div class="d-grid">

                            <button type="submit" name="submit" class="btn btn-success">Save</button>


                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>