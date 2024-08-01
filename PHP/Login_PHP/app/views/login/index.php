<div class="input">
<h1>LOGIN</h1>
    <form  action="<?= BASEURL;?>/login" method="POST">
        <div class="p-md-2">
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <a href="<?= BASEURL;?>/react">
                <button type="submit" name="login" class="btn-input">Login</button>
            </a>
            <div class="bottom">
                <p>Don't have an account yet? 
                    <a href="<?= BASEURL;?>/register">Register here</a>
                </p>
            </div>
        </div>
    </form>
</div>