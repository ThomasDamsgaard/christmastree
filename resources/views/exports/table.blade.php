
    <table>
      <tbody>
        <tr>
          <th>Order #</th>
          <th>Puller Reg #</th>
          <th>Trailer Reg #</th>
          <th>Second Trailer Reg #</th>
          <th>Reference</th>
        </tr>
        <tr>
          <td>{{ $deliveryNote->order }}</td>
          <td>{{ $deliveryNote->puller }}</td>
          <td>{{ $deliveryNote->trailer }}</td>
          <td>{{ $deliveryNote->second_trailer }}</td>
          <td>{{ $deliveryNote->reference }}</td>
        </tr>

        <tr></tr>
        <tr></tr>

        <tr>
          <td>Slot</td>
          <td>Pallet</td>
          <td>Type</td>
          <td>Label</td>
          <td>Size</td>
          <td>Amount</td>
        </tr>

        @foreach ($deliveryNote->line_items as $key => $value)
          <tr>
            <td>{{ $value['slot']}}</td>
            <td>{{ $value['pallet']}}</td>
            <td>{{ $value['type']}}</td>
            <td>{{ $value['label']}}</td>
            <td>{{ $value['size']}}</td>
            <td>{{ $value['amount']}}</td>
          </tr>
        @endforeach
      </tbody>
</table>
