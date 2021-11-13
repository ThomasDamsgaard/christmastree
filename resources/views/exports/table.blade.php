
    <table>
      <tbody>
        <tr>
          <td>Order #</td>
          <td>{{ $delivery_note->order }}</td>
        </tr>

        <tr>
          <td>Puller Reg #</td>
          <td>{{ $delivery_note->puller }}</td>
        </tr>

        <tr>
          <td>Trailer Reg #</td>
          <td>{{ $delivery_note->trailer }}</td>
        </tr>

        <tr>
          <td>Second Trailer Reg #</td>
          <td>{{ $delivery_note->second_trailer }}</td>
        </tr>

        <tr>
          <td>Reference</td>
          <td>{{ $delivery_note->reference }}</td>
        </tr>
        <tr>
          <td>Pallet #</td>
          @foreach (json_decode($delivery_note->line_items as $item))
            <td>{{ $item }}</td>
          @endforeach
        </tr>
      </tbody>
</table>
