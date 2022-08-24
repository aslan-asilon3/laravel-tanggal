<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> --}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
        <title>Get Data Between Two Dates in Laravel 8</title>
    </head>
    <body>
        <div class="container my-4">
            <div class="row">
                <h2 class="fs-3 text-center my-3">Get Data Between Two Dates in Laravel 8</h2>
                <div class="my-2">
                    <form action="/" method="GET" id="search-form">
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" name="start_date" id="start_date">
                            <input type="date" class="form-control" name="end_date">
                            <button class="btn btn-primary" type="submit">GET</button>

                        </div>
                    </form>
                    <form action="">
                        {{-- <a type="button" id="reset" class="btn bg-secondary  btn-reset"><i class="fas fa-undo-alt"></i> Reset</a> --}}
                        <button type="submit" class="btn bg-secondary  btn-reset">Reset</button>
                    </form>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $data)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


        <script>
        // function validateForm() {
        // var x = document.forms["serach-form"]["start_date"].value== null;
        // if (x == "" || x == null) {
        //     alert("Name must be filled out");
        //     return false;
        // }
        // }

        // $('#reset').click(function(e) {
        //     $("#start_date").reset();
        // });
        </script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>
