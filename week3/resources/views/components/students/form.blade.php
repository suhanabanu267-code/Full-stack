
@props(['student'])

<div>
    <label for="name">Name</label>
    <input
        type="text"
        name="name"
        id="name"
        value="{{ old('name', $student->name) }}"
        required
    >
    @error('name')
        <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="email">Email</label>
    <input
        type="email"
        name="email"
        id="email"
        value="{{ old('email', $student->email) }}"
        required
    >
    @error('email')
        <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="phone">Phone</label>
    <input
        type="text"
        name="phone"
        id="phone"
        value="{{ old('phone', $student->phone) }}"
        required
    >
    @error('phone')
        <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="address">Address</label>
    <textarea
        name="address"
        id="address"
        required
    >{{ old('address', $student->address) }}</textarea>
    @error('address')
        <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="date_of_birth">Date of Birth</label>
    <input
        type="date"
        name="date_of_birth"
        id="date_of_birth"
        value="{{ old('date_of_birth', $student->date_of_birth?->format('Y-m-d')) }}"
        required
    >
    @error('date_of_birth')
        <p>{{ $message }}</p>
    @enderror
</div>
