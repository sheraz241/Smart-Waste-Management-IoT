<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-2 px-3">
                <a href="{{ route('create_driver') }}"><button type="button" class="btn btn-info"> Add Driver</button></a>
            </div>
        </div>
    </div>
    <div class="table py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <table class="table table-striped text-center">
                    <thead>
                        <tr>
                          <th>No #</th>
                          <th>Driver Name</th>
                          <th>Address</th>
                          <th>ID Number</th>
                          <th>License Number</th>
                          <th>Car Number</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $i = 0;
                    @endphp
                    @forelse ($driver_data as $data)


                    @php  $i++; @endphp
                        <tr>

                          <td>{{ $i }}</td>
                          <td>{{ $data->name }}</td>
                          <td>{{ $data->address }}</td>
                          <td>{{ $data->id_number }}</td>
                          <td>{{ $data->license_number }}</td>
                          <td>{{ $data->car_number }}</td>
                          <td>
                            {{-- <form action= method="POST">

                               @csrf
                                @method('POST') --}}


                                <a href="{{ route('edit_driver',$data->id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit text-white"></i></a>
                                <a href="{{ route('delete_driver',$data->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                            {{-- </form> --}}
                        </td>

                        </tr>
                        @empty

                        @endforelse
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
