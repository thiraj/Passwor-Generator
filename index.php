<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3 style="text-align: center;">Fill all field to generate your password</h3>
            <hr>
            <form id="password_generator_frm" name="password_generator_frm">
                <div class="form-group">
                    <label for="email">Master Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="form-group">
                    <label for="confirm">Confirm Master Password:</label>
                    <input type="password" class="form-control" id="confirm" name="confirm">
                </div>

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="domain">Domain Name:</label>
                    <input type="text" class="form-control" id="domain" name="domain">
                </div>

                <button type="submit" class="btn btn-default" id="frm_submit">Submit</button>
            </form>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-10 col-md-offset-1" id="keyDiv" style="display: none;">
            <label>Your Encrypted Password is:</label>
            <div class="well" style="border-left: 4px solid #4CAF50;" id="keyArea"></div>
        </div>

    </div>

</div>




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--JQuery Validator-->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<!--Custom written JS-->
<script src="assets/js/custom.js"></script>

</body>
</html>