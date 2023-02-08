<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
</head>
<body>
  <h1>Calculator</h1>
  <form method="post" action="/calculate">
    @csrf
    <input type="text" name="first" placeholder="First number">
    <select name="operator">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>
    <input type="text" name="second" placeholder="Second number">
    <button type="submit">Calculate</button>
  </form>
  
  <p>Result: {{ $result }}</p>
</body>
</html>
