<html>
    <title>Create Produk</title>
    <body>
        <h2>Create Produk</h2>
        <hr>
        <form action="{{ URL('produk') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <table>
                <tr>
                    <th>Produk</th>
                    <td>
                        <input type="text" name="product" required>
                    </td>
                </tr>

                <tr>
                    <th>Price</th>
                    <td>
                        <input type="number" name="price" required>
                    </td>
                </tr>

                <tr>
                    <th>Stock</th>
                    <td>
                        <input type="text" name="stock" required>
                    </td>
                </tr>
                 </table>
                 <button type="submit">Save</button>
            </form>
        </body>
    </html>