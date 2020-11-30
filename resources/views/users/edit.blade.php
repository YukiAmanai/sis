<form method="POST"action="htpp://localhost:8000/me">
@csrf
  <input type="text" value="{{ $user->name }}" />
  <button type="submit">変更</button>
</form>