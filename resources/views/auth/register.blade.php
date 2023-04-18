













<style>
   
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Rubik', sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        height: 100vh;
    }

    .left-section {
        overflow: hidden;
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        justify-content: center;
        -webkit-animation-name: left-section;
        animation-name: left-section;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation-delay: 1s;
        animation-delay: 1s;
    }

    .right-section {
        flex: 1;
        background: linear-gradient(to right, #f50629 0%, #fd9d08 100%);
        transition: 1s;
        background-image: url(https://imgs.search.brave.com/3W4-sFdYytD523qSBC72BZF848LKQsVN6HcvlJq9Hys/rs:fit:1200:955:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL3Ns/aWRlcl9pbWcvc2sx/MF8xLmpwZw);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .header>h1 {
        margin: 0;
        color: #f50629;
    }

    .header>h4 {
        margin-top: 10px;
        font-weight: normal;
        font-size: 15px;
        color: rgba(0, 0, 0, 0.4);
    }

    .form {
        max-width: 80%;
        display: flex;
        flex-direction: column;
    }

    .form>p {
        text-align: right;
    }

    .form>p>a {
        color: #000;
        font-size: 14px;
    }

    .form-field {
        height: 46px;
        padding: 0 16px;
        border: 2px solid #ddd;
        border-radius: 38px;
        font-family: 'Rubik', sans-serif;
        outline: 0;
        transition: .2s;
        margin-top: 20px;
    }

    .form-field:focus {
        border-color: #0f7ef1;
    }

    .form>button:hover{
        cursor: pointer;
        border-color: aqua
    }

    .form>button {
        
        padding: 12px 10px;
        border: 0;
        background: linear-gradient(to right, #f50629 0%, #fd9d08 100%);
        border-radius: 38px;
        margin-top: 10px;
        color: #fff;
        letter-spacing: 1px;
        font-family: 'Rubik', sans-serif;
    }

    .animation {
        -webkit-animation-name: move;
        animation-name: move;
        -webkit-animation-duration: .4s;
        animation-duration: .4s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
    }

    .a1 {
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
    }

    .a2 {
        -webkit-animation-delay: 2.1s;
        animation-delay: 2.1s;
    }

    .a3 {
        -webkit-animation-delay: 2.2s;
        animation-delay: 2.2s;
    }

    .a4 {
        -webkit-animation-delay: 2.3s;
        animation-delay: 2.3s;
    }

    .a5 {
        -webkit-animation-delay: 2.4s;
        animation-delay: 2.4s;
    }

    .a6 {
        -webkit-animation-delay: 2.5s;
        animation-delay: 2.5s;
    }

    @keyframes move {
        0% {
            opacity: 0;
            visibility: hidden;
            -webkit-transform: translateY(-40px);
            transform: translateY(-40px);
        }

        100% {
            opacity: 1;
            visibility: visible;
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @keyframes left-section {
        0% {
            opacity: 0;
            width: 0;
        }

        100% {
            opacity: 1;
            padding: 20px 40px;
            width: 440px;
        }
    }
</style>



<div class="container">
    <div class="left-section">
        <div class="header">
            <h1 class="animation a1">Welcome !</h1>
            <h4 class="animation a2">Register to create account.</h4>
        </div>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form">



                
                    <input placeholder="Full Name" id="name" type="text" class="form-field animation a4" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
    
                
    
    
    
                
                    <input placeholder="Email" id="email" type="email" class="form-field animation a4" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                


                
                    <input placeholder="Password" id="password" type="password" class="form-field animation a4" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               


                
                    <input placeholder="Confirm password" id="password-confirm" type="password" class="form-field animation a4" class="form-control" name="password_confirmation" required autocomplete="new-password">
                

    
    
                
                <br>
                <button type="submit" class="animation a6">Register</button>
            </div>


            
        </form>
    </div>
    <div class="right-section"></div>
</div>
