<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="error.css" />

    <title>Error!</title>
</head>

<body>
    <div class="masthead">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">ERROR!</h4>
                </div>
                <div class="card-body">
                    <p>Wrong Username/Password</p>
                    <button type="button" class="btn btn-block btn-primary" onclick="location.href = 'login.php' ">
                        Return to Log In!
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>