<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-2 px-3">
                <button type="button" class="btn btn-info">Add Driver</button>
            </div>
        </div>
    </div> --}}
    <div class="table py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-3 p-6">
                <form action="{{ route('store_driver') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Driver Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address">
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="id_number" class="form-label">ID Number </label>
                            <input type="number" class="form-control" id="id_number" name="id_number" aria-describedby="emailHelp">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="license_number" class="form-label">License Number</label>
                            <input type="number" class="form-control" id="license_number" name="license_number" >
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="car_number" class="form-label">Car Number </label>
                            <input type="number" class="form-control" id="car_number" name="car_number" aria-describedby="emailHelp">
                          </div>
                    </div>

                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
