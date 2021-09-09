<a href="{{ route('products.create') }}">Create Data</a>
<table>
    <tr>
        <th>Nama</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
    @foreach ($item as $itm)
        <tr>
            <td>{{ $itm->name }}</td>
            <td>{{ $itm->description }}</td>
            <td>{{ $itm->price }}</td>
            <td>
                <a href="products/{{ $itm->id }}/edit">Edit</a><br>
                <form action="{{ route('products.destroy',$itm->id) }}" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" value="delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>