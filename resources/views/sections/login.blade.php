<section id="login" class="login-section">
    <div class="container">
        <h2>Login</h2>
        <form class="login-form" action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required autocomplete="off">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required autocomplete="off">
            </div>

            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember" id="remember"> Remember Me
                </label>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</section>