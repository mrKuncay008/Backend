<div class="input">
        <h1>REGISTER</h1>
        <form action="<?= BASEURL;?>/login" method="POST">
            <div class="box-input">
                <i class="fas fa-user"></i>
                <input type="text" name="fullname" placeholder="Full Name">
            </div>
            <div class="box-input">
                <i class="fas fa-address-book"></i>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit" name="register" class="btn-input">Register</button>
            </a>
            <div class="bottom">
                <p>Sudah punya akun?
                    <a href="<?= BASEURL;?>/login">Login disini</a>
                </p>
            </div>
        </form>
    </div>