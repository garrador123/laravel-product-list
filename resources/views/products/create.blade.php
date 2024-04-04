<form method="POST" action="{{ route('product.store') }}">
    @csrf
    <div>
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>