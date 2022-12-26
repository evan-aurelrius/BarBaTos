@extends("templates.navbar")

@section('main')
    <main class="container d-flex flex-column align-items-center justify-content-center">
        <div class="w-50 bg-tiga rounded boxShadow">
            <div class="fs-2 text-center text-satu">
                Login
            </div>
            <form class="m-3" action="/login/auth" method="POST">
                @csrf
                <div class="d-flex flex-column rounded my-2">
                    <label for="email">Email</label>
                    <input class="border-3 border-bottom px-2 py-1 rounded" type="email" name="email" id="email" value={{Cookie::get('email') != null ? Cookie::get('email') : ""  }}>
                </div>
                <div class="d-flex flex-column rounded my-2">
                    <label for="password">Password</label>
                    <div class="d-flex align-items-center rounded bg-satu">
                        <input class="w-100 border-3 border-bottom px-2 py-1 rounded " type="password" name="password" id="password" value={{Cookie::get('password') != null ? Cookie::get('password') : "" }}>
                        <ion-icon onclick="passwordPrivacyHandler()" id="icon" class="fs-4 text-tiga rounded py-1 px-2" name="eye-off"></ion-icon>
                    </div>
                </div>
                <div class="d-flex align-items-center my-2">
                    <input class="me-1" type="checkbox" name="rememberMe" id="rememberMe">
                    <label for="rememberMe">Remember Me</label>
                </div>
                <div class="d-flex justify-content-end mt-3 mb-5">
                    <button type="submit" class="w-50 shadow px-4 py-2 rounded text-light bg-satu">
                        Login
                    </button>
                </div>
                <a href="/register">
                    Don't have an account? Click here to register
                </a>
            </form>
        </div>
    </main>
@endsection

@section('myScript')
    <script type="text/javascript">
        let icon = document.querySelector(" #icon ");
        let input = document.querySelector(" #password ");
        let show = false;

        function hidePassword() {
            icon.setAttribute('name', 'eye-off')
            input.setAttribute('type','password')
            show = false;
        }

        function showPassword() {
            icon.setAttribute('name', 'eye')
            input.setAttribute('type','text')
            show = true;
        }

        function passwordPrivacyHandler() {
            if(show){
                hidePassword()
            }else{
                showPassword()
            }
        }
    </script>
@endsection
