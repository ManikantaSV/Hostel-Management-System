<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Lato', sans-serif
        }

        h1 {
            margin-bottom: 40px
        }

        label {
            color: #333
        }

        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px
        }

        .help-block.with-errors {
            color: #ff5050;
            margin-top: 5px
        }

        .card {
            margin-left: 10px;
            margin-right: 10px
        }
    </style>
    <title>Application</title>
</head>

<body>
    <div class="container">
   
    </div>
    <?php
    include 'gaurdian1.php';
    ?>
    <div class="container">
        
        <div class="container"> <div class=" text-center mt-5 ">
                <h1>GAURDIANS DETAILS</h1>
            </div>
            <div class="row ">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <form action="gaurdian.php" method="POST">
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"> <label for="form_name">Father</label>
                                                    <input id="form_name" type="text" name="father" class="form-control"
                                                        placeholder="Father name" pattern="[a-zA-Z]+"/> </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label for="form_lastname">Mother</label>
                                                    <input id="form_lastname" type="text" name="mother"
                                                        class="form-control" placeholder="Mother name" pattern="[a-zA-Z]+"
                                                        /> </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label for="form_lastname">Gaurdian name</label>
                                                    <input id="form_lastname" type="text" name="gaurdian"
                                                        class="form-control" placeholder="Gaurdian name"
                                                        pattern="[a-zA-Z]+"/> </div>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_email">Phone no.</label></label> <input
                                                        id="form_email" type="number" name="phone" class="form-control"
                                                        placeholder="Phone no." pattern="[0-9]+"/> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_need">Alt. phone no.
                                                        </label>
                                                        <input
                                                        id="form_email" type="number" name="altphno" class="form-control"
                                                        placeholder="Alt. phone no." pattern="[0-9]+"/>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12 my-3">
                                                <div class="form-group"> <label for="form_message">Email</label>
                                                <input
                                                        id="form_email" type="text" name="email" class="form-control"
                                                        placeholder="Email" > 
                                            </div>
                                            </div>
                                            <div class="col-md-12 my-3">
                                                <div class="form-group"> <label for="form_message">Address</label>
                                                    <textarea id="form_message" name="address" class="form-control"
                                                        placeholder="Permanent address" rows="4"
                                                        ></textarea> </div>
                                            </div>
                                            <div class="col-md-12 my-3"> <button type="submit"
                                                    class="btn btn-success btn-send pt-2 btn-block "
                                                    value="Next Step" name="submit">Submit</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- /.8 -->
                </div> <!-- /.row-->
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>