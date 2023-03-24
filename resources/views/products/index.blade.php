<x-layouts.app>
  <div>
    <h1>Products</h1>

    <table>
      <tbody>
        <tr>
          @foreach ($product_keys as $key)
            <th colspan="2">{{ $key }}</th>
          @endforeach
        </tr>

        <div class="values">
          @foreach ($products as $product)
            <tr>
              @foreach ($product_keys as $key)
                <td>{{ $product->$key }}</td>
              @endforeach
            </tr>
          @endforeach
        </div>
      </tbody>
    </table>

  </div>
</x-layouts.app>
