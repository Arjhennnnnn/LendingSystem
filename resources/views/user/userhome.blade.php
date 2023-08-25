<x-layout>
    <x-navbar/>
    <div class="row">
    <x-sidebar/>
    <div class="col-10 ps-3 pe-5 mt-2">

    @foreach ($users as $user)
        
    <div class="card my-2">
        <div class="card-header">Posted 1 min ago</div>
            <div class="card-body">
                <div class="d-flex flex-row">
                    <img
                    src="{{ asset('storage/images/logo.png') }}"
                    height="27"
                    style="width: 40px;"
                    class="me-2"
                    alt="MDB Logo"
                    loading="lazy"
                    />
                    <h5 class="card-title">{{ $user->user->name }}</h5>
                </div>
            <p class="card-text mt-2">Desription : {{ $user->description }}</p>
        
            <span class="fw-bold">Details : </span> <br>
            <small>Minimum Amount : <span class="text-primary"> ₱ {{ $user->min_amount }}</span></small> <br>
            <small>Maximum Amount : <span class="text-primary"> ₱ {{ $user->max_amount }} </span></small> <br>
            <small>Interest Rate : <span class="text-primary"> 3 % </span></small> <br>
            <small>Repayment Period : <span class="text-primary">1 year or 2 years </span></small> <br>

            <div class="row">
                <div class="col-3 offset-9">
                    <button class="btn btn-primary mt-2 w-100">Borrow</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
    
    </div>
</x-layout>