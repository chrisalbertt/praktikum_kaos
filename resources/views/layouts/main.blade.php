<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <title>praktikum @yield('tit  le')</title>
    <!-- css untuk bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #007bff;
        color: white;
        text-align: center;
    }
    </style>
</head>

<body>
<div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bg-secondary py-2">
                <div class="dropdown float-right">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-square"></i> User
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">{{Auth::user()->name}}</a>
                        <a class="dropdown-item" href="/user">Change Password</a>
                        <a class="dropdown-item" href="logout">Logout</a>
                    </div>
                </div>
            </div>  
        </div>
        <div class="row vh-100">
            <div class="col-md-2">

                <div class="row mt-4">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link {{($key == "home") ? "active":""}}" id="v-pills-home-tab"
                                href="/home">Home</a>
                            <a class="nav-link {{($key == "kaos") ? "active":""}}" id="v-pills-kaos-tab"
                                href="/kaos">Kaos</a>
                            <a class="nav-link {{($key == "about") ? "active":""}}" id="v-pills-about-tab"
                                href="/about">About</a>
                            <a class="nav-link {{($key == "faq") ? "active":""}}" id="v-pills-faq-tab"
                                href="faq">FAQ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card mt-4">
                    <div class="card-header"></div>
                    <div class="card-body"></div>

                    @yield('artikel')
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bg-secondary py-4">template by Christopher Albert</div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
    new DataTable('#example');
    </script>
</body>

</html>