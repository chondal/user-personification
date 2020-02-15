<form action="{{ route('impersonations.store') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $user }}">
    <input type="hidden" name="inpersonation_id" value="{{ Auth::user()->id }}">
    <button type="submit" class="btn btn-info"> {{ config('user-personification.text') }}</button>
</form>