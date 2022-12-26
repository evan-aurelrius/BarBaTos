@extends("templates.navbar")

@section('main')
    <main class="container d-flex flex-column align-items-center justify-content-center mb-5">
        <div class="w-50 bg-tiga rounded boxShadow">
            <div class="fs-2 text-center">
                Register
            </div>
            <div class="m-3">
                <form  action="/register/createAccount" method="POST">
                    @csrf
                    <div class="d-flex flex-column rounded my-2">
                        <label for="name">Name</label>
                        <input class="border-3 border-bottom px-2 py-1 rounded" type="text" name="name" value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="d-flex flex-column rounded my-2">
                        <label for="email">Email</label>
                        <input class="border-3 border-bottom px-2 py-1 rounded" type="email" name="email" value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="d-flex flex-column rounded my-2">
                        <label for="password">Password</label>
                        <div class="d-flex align-items-center rounded bg-satu">
                            <input class="password w-100 border-3 border-bottom px-2 py-1 rounded" type="password" name="password">
                            <ion-icon onclick="passwordPrivacyHandler()" class="icon fs-4 text-tiga rounded py-1 px-2" name="eye-off"></ion-icon>
                        </div>
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="d-flex flex-column rounded my-2">
                        <label for="c-password">Confirm Password</label>
                        <div class="d-flex align-items-center rounded bg-satu">
                            <input class="password w-100 border-3 border-bottom px-2 py-1 rounded" type="password" name="confirm-password">
                            <ion-icon onclick="passwordPrivacyHandler()" class="icon fs-4 text-tiga rounded py-1 px-2" name="eye-off"></ion-icon>
                        </div>
                    </div>
                    @error('confirm-password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="my-2">
                        Gender
                        <div>
                            <input {{ old('gender') == 'female' ? 'checked' : '' }} type="radio" value="female" name="gender" id="female">
                            <label for="female">Female</label>
                        </div>
                        <div>
                            <input {{ old('gender') == 'male' ? 'checked' : '' }} type="radio" value="male" name="gender" id="male">
                            <label for="male">Male</label>
                        </div>
                    </div>
                    @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="d-flex flex-column rounded my-2">
                        <label for="dateOfBirth">Date Of Birth</label>
                        <input class="border-3 border-bottom px-2 py-1 rounded" type="date" name="dateOfBirth" value="{{ old('dateOfBirth') }}">
                    </div>
                    @error('dateOfBirth')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="d-flex flex-column rounded my-2">
                        <label for="country">Country</label>
                        <select class="border-3 border-bottom px-2 py-1 rounded" name="country">
                            @foreach ($listCountry as $country)
                                <option {{ old('country') == $country ? 'selected' : '' }} value={{ $country }}>{{$country}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('country')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="d-flex justify-content-end mb-5 mt-3">
                        <button type="submit" class="w-50 shadow px-4 py-2 rounded text-light bg-satu">
                            Register
                        </button>
                    </div>
                </form>
                <a href="/login">
                    Have an account? Click here to login
                </a>
            </div>
        </div>
    </main>
@endsection

@section('myScript')
    <script type="text/javascript">
        let icon = document.querySelectorAll(" .icon ");
        let input = document.querySelectorAll(" .password ")
        let show = false;

        function hidePassword() {
            icon.forEach(e => {
                e.setAttribute('name','eye-off')
            });
            input.forEach(e => {
                e.setAttribute('type','password')
            })
            show = false;
        }

        function showPassword() {
            icon.forEach(e => {
                e.setAttribute('name','eye')
            });
            input.forEach(e => {
                e.setAttribute('type','text')
            })
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
