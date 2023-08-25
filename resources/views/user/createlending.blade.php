<x-layout>
    <x-navbar/>
    <div class="row">
    <x-sidebar/>


    <div class="col-10 ps-3 pe-5 mt-2">
    <div class="card row mt-3">
        <div class="col-10 offset-1 my-3">
            <div class="card-header fw-bold h3">Create Lending</div>
                <form action="/store/loan" method="post">
                    @csrf
                    <x-form.input name="description"/>
                    <x-form.input name="min_amount"/>
                    <x-form.input name="max_amount"/>
                    <button type="submit" class="btn btn-primary mt-3 w-100">Create Lending</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

