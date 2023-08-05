<form action="/address" method="POST">
    @csrf
    @method('PATCH')
<input type="text" name="line_1" id="line_1" value="{{ $address->line_1 }}">
<button type="submit">Update Address</button>
</form>
