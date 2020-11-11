
    <table>
      <tbody>
        <tr>
          <td>Order #</td>
          <td>{{ $tree->order }}</td>
        </tr>

        <tr>
          <td>Puller Reg #</td>
          <td>{{ $tree->puller }}</td>
        </tr>

        <tr>
          <td>Trailer Reg #</td>
          <td>{{ $tree->trailer }}</td>
        </tr>

        <tr>
          <td>Second Trailer Reg #</td>
          <td>{{ $tree->second_trailer }}</td>
        </tr>

        <tr>
          <td>Supplier</td>
          <td>{{ $tree->supplier }}</td>
        </tr>

        <tr>
          <td>Reference</td>
          <td>{{ $tree->reference }}</td>
        </tr>

        <tr>
          <td>Phone</td>
          <td>{{ $tree->phone }}</td>
        </tr>

        <tr>
          <td>Location</td>
          <td>{{ $tree->location }}</td>
        </tr>
        <tr>
          <td>Pallet #</td>
          @foreach (json_decode($tree['pallet']) as $pallet)
            <td>{{ $pallet }}</td>
          @endforeach
        </tr>
      </tbody>
</table>
<table>
        <thead>
          <th>Label</th>
          <th>Type</th>
          <th>Size</th>
          <th>Amount</th>
        </thead>

        <tbody>
          <tr>
            <td></td>
          </tr>
            @foreach (json_decode($tree->type) as $typ)
              @if ($loop->iteration % 4 == 0)
                <tr>
              @endif
              <td>{{ $typ }}</td>
              @if ($loop->iteration % 4 == 0)
                </tr>
              @endif
            @endforeach
        </tbody>
</table>



{{-- <tr>
  <td>Size</td>
  @foreach (json_decode($tree['size']) as $size)
    <td>{{ $size }}</td>
  @endforeach
</tr>
<tr>
  <td>Amount</td>
  @foreach (json_decode($tree['amount']) as $amount)
    <td>{{ $amount }}</td>
  @endforeach
</tr>
<tr>
  <td>Label</td>
  @foreach (json_decode($tree['label']) as $label)
    <td>{{ $label }}</td>
  @endforeach
</tr> --}}
