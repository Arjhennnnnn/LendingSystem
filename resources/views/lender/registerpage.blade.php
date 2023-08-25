<x-layout>
    <div class="row mt-5">
        <div class="col-4 offset-4">
            <div class="card">
                <form method="post" action="/lender/store" class="card-body">
                    @csrf
                    <h5 class="card-title text-center">Create Lander Account</h5>
                    <x-alert/>
                    <p class="text-start ms-3 fw-bold">Already have an account ? <small>Login <a href="/login" class="text-primary">here</a></small></p>

                    <x-form.input name="name"/>
                    <x-form.input name="email" type="email"/>
                    <x-form.input name="address"/>
                    <x-form.input name="phone"/>
                    <x-form.input name="password" type="password"/>
                    <x-form.input name="password_confirmation" type="password"/>

                    <button type="submit" class="btn btn-primary mt-3 w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
