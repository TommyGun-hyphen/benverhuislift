@extends('layouts.admin')

@section('content')

<div class="relative overflow-x-auto mx-auto ">
        <h1 class="text-2xl font-semibold mb-4">Lijst met afspraken</h1>
        <table class="w-full text-sm text-left rtl:text-right border border-slate-300 text-gray-500 rounded-lg">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 rounded-lg">
                <tr class="rounded-lg">
                    <th scope="col" class="px-6 py-3 rounded-lg">
                        full name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        number of hours
                    </th>
                    <th scope="col" class="px-6 py-3">
                        date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-lg">
                        paid?
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)

                <tr class="bg-white border-b rounded-lg">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap rounded-lg">
                        {{ $appointment->first_name }} {{ $appointment->last_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $appointment->street_name }} {{ $appointment->house_number }} {{ $appointment->postal_code }} {{ $appointment->city }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $appointment->number_hours }} hours
                    </td>
                    <td class="px-6 py-4">
                        {{ $appointment->datetime }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $appointment->status }}
                    </td>
                    <td class="px-6 py-4 rounded-lg">
                        {{ ($appointment->is_paid == true)? 'Yes' : 'No' }}
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection