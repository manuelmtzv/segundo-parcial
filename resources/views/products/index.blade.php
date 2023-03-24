<x-layouts.app>
  <div>
    <h1>Products</h1>

    <table>
      <thead>
        <tr>
          @foreach ($product_keys as $key)
            <th colspan="2">{{ $key }}</th>
          @endforeach
        </tr>
      </thead>

      <tbody>
        @foreach ($products as $product)
          <tr>
            @foreach ($product_keys as $key)
              <td>{{ $product->$key }}</td>
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</x-layouts.app>
