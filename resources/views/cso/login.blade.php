<!-- resources/views/cso/login.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
</style>

    

    <form method="POST" action="{{ route('cso.login') }}">
        @csrf

    <div class="wrapper">
        <div class="logo">
            <img src="https://th.bing.com/th?id=OIP.7WGqgarVarG6FmgiGCqysAHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" alt="">
        </div>
        <div class="text-center mt-4 name">
            Login
        </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div>
    </form>