<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <!-- css -->
    <?php $this->load->view('partials/css');
    ?>
</head>

<body>
    <?php $this->load->view('partials/navbar');
    ?>

    <!-- konten -->

    <!-- form login -->
    <div class="container">
        <div class="row">
            <form id="form-login" name="form-login" class="col s8 offset-s2 white padding-login" action="login_user" method="post">
                <div class="row">
                    <h5 class="center col s12"><?php echo $modul . " "; ?>Login</h5>
                </div>
                <input type="text" name="modul_name" id="modul_name" value="<?php echo $modul; ?>" hidden>
                <?php 
                $login = $_GET['login'];
                if ($login == 0) : ?>
                    <div class="row">
                        <div class="col s12">
                            <h6 class="red-text small-text">Username atau password salah. Coba ulangi kembali.</h6>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="username" name="username" type="text" class="validate" autocomplete="off">
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate" autocomplete="off">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button type="submit" id="submit-login" class="waves-effect waves-light btn-small">Login</button>
                    </div>

                </div>

            </form>
        </div>
    </div>

    <!-- js -->
    <?php $this->load->view('partials/js');
    ?>
</body>

</html>