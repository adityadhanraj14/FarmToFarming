<!DOCTYPE html>
<html>
<head>
  <title>Contact Information Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px #999;
    }

    h2 {
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin: 10px 0;
      font-weight: bold;
    }

    input[type="text"], input[type="tel"], select {
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>client Information</h2>
  <form action="{{route('form.submit')}}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="adress" required>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="state">State:</label>
    <select id="state" name="state" required>
      <option value="Select">Select</option>
      <option value="Bihar">Bihar</option>
      <option value="Bengalure">Bengalure</option>
      <option value="Gujrat">Gujrat</option>
      <option value="Goa">Goa</option>
      <!-- Add more options for other states -->
    </select>

    <label for="pincode">Pincode:</label>
    <input type="text" id="pincode" name="pincode" required>

    <button type="submit">Submit</button>
  </form>
</div>

</body>
</html>
