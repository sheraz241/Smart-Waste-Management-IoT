<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-2 px-3">
                <a href="{{ route('create_device') }}"><button type="button" class="btn btn-info"> Add Device</button></a>
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
                          <th>Device Name</th>
                          <th>IP Address</th>
                          <th>Device Key</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $i = 0;
                    @endphp
                    @forelse ($device_data as $data)


                    @php  $i++; @endphp
                        <tr>

                          <td>{{ $i }}</td>
                          <td>{{ $data->device_name }}</td>
                          <td>{{ $data->ip_address }}</td>
                          <td>{{ $data->device_key }}</td>
                          <td>
                            {{-- <form action= method="POST">

                               @csrf
                                @method('POST') --}}


                                <a href="{{ route('edit_device',$data->id) }}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('delete_device',$data->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
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
