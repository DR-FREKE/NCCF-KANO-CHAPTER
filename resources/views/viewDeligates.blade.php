<div class="">
    @if($deligate === null)
    <div>No deleigate</div>
    @else
    <table class='table table-striped table-bordered'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Office</th>
                <th>Zone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deligate as $newDeligate)
            <tr>
                <td>{{ $newDeligate->Name }}</td>
                <td>{{ $newDeligate->Email }}</td>
                <td>{{ $newDeligate->PhoneNumber }}</td>
                <td>{{ $newDeligate->Office }}</td>
                <td>{{ $newDeligate->Zone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>