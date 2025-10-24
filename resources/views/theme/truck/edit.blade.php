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
                <form action="{{ route('update_truck',$truck_data->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="truck_number" class="form-label">Truck Number</label>
                            <input type="number" min="0" class="form-control" value="{{ $truck_data->truck_number }}" id="truck_number" name="truck_number" aria-describedby="emailHelp">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="truck_license" class="form-label">Truck License</label>
                            <input type="text" class="form-control" value="{{ $truck_data->truck_license }}" name="truck_license" id="truck_license">
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="truck_location" class="form-label">Truck location</label>
                            <input type="number" class="form-control" value="{{ $truck_data->truck_location }}" id="truck_location" name="truck_location" aria-describedby="emailHelp">
                          </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
