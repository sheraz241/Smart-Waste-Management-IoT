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
                <form action="{{ route('update_device',$device_data->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="device_name" class="form-label">Device Name</label>
                            <input type="text" class="form-control" value="{{ $device_data->device_name }}" id="device_name" name="device_name" aria-describedby="emailHelp">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="ip_address" class="form-label" >IP Address</label>
                            <input type="number" class="form-control" value="{{ $device_data->ip_address }}"  min="0" name="ip_address" id="ip_address">
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="device_key" class="form-label">Device Key </label>
                            <input type="text" min="0" class="form-control" value="{{ $device_data->device_key }}" id="device_key" name="device_key" aria-describedby="emailHelp">
                          </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
