<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-2 px-3">
                <a href="{{ route('create_truck') }}"><button type="button" class="btn btn-info"> Add Truck</button></a>
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
                          <th>Truck Number</th>
                          <th>Truck License</th>
                          <th>Truck location </th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $i = 0;
                    @endphp
                    @forelse ($truck_data as $data)


                    @php  $i++; @endphp
                        <tr>

                          <td>{{ $i }}</td>
                          <td>{{ $data->truck_number }}</td>
                          <td>{{ $data->truck_license }}</td>
                          <td>{{ $data->truck_location }}</td>
                          <td>fdsfasaa</td>
                          <td>
                                <a href="{{ route('edit_truck',$data->id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit text-white"></i></a>
                                <a href="{{ route('delete_truck',$data->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>

                        </tr>
                        @empty

                        @endforelse
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
