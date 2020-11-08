
    <table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($trees as $tree)
        <tr>
            <td>{{ $tree['order'] }}</td>
            <td>{{ $tree['puller'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
