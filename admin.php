<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fill Guests</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main-script.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 col-sm-12">
                <h2>Fill Guests</h2>
            </div>
            <div class="col-lg-4"></div>
        </div>
        <form action="" method="POST" role="form">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <input type="text" name="name" class="form-control" value="" placeholder="Enter Name" required>
            </div>
            <div class="col-lg-4 col-sm-12">
                <input type="text" name="surname" class="form-control" value="" placeholder="Enter Surname" required>
            </div>
            <div class="col-lg-4 col-sm-12">
                <input type="email" name="email" class="form-control" value="" placeholder="Enter email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 col-sm-12 form-group">
                <label for="number" class="control-label">Choise number of guests</label><br>
                <input type="number" min="0" max="10" class="form-control" name="number" value="" required>
            </div>
            <div class="col-lg-4 col-sm-12"></div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6 col-lg-offset-3">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit">
            </div>
            <div class="col-lg-offset-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-offset-2 col-lg-8 col-sm-12">
                <h3 id="result"></h3>
            </div>
            <div class="col-lg-2"></div>
        </div>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('input[type="submit"]').click(function(){
                var guest = {};
                 guest.name = $('input[name="name"]').val();
                 guest.surname = $('input[name="surname"]').val();
                 guest.email = $('input[name="email"]').val();
                 guest.number = +($('input[name="number"]').val());
                console.log(guest);
                var jsonGuest = guest;
                console.log(jsonGuest);
                $.ajax({
                    type: "POST",
                    url: "json.php",
                    data: jsonGuest,
                    success: function(){
                        $('#result').html('Guest ' + guest.name +' '+ guest.surname + ' successfully had added to list, number of guests ' + guest.number +' !');
                    }
                });
                return false;
                console.log(jsonGuest);
            });
        });
    </script>
</body>
</html>