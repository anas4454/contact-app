<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Contact</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      body {
        background-color: #1a2037;
        font-family: Arial, sans-serif;
        color: #fff;
        margin: 0;
        padding: 0;
      }

      .header {
        margin: 2rem auto;
        border-radius: 3rem;
        width: 80%;
        height: 70px;
        background-color: #3a97d4;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0px 5px 10px rgb(96, 96, 148);
        color: #fff;
      }

      .container {
        width: 80%;
        margin: auto;
        background-color: #2b3350;
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 5px 10px rgba(119, 111, 154, 0.5);
      }

      .contact-form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }

      .contact-form label {
        font-weight: bold;
        margin-bottom: 0.3rem;
      }

      .contact-form input {
        padding: 0.8rem;
        border-radius: 0.5rem;
        border: none;
        outline: none;
        font-size: 1rem;
        background-color: #40486b;
        color: #fff;
      }
      .contact-form textarea {
        padding: 0.8rem;
        border-radius: 0.5rem;
        border: none;
        outline: none;
        font-size: 1rem;
        background-color: #40486b;
        color: #fff;
      }

      .contact-form textarea {
        resize: none;
        height: 100px;
      }

      .form-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 1.5rem;
      }

      .btn {
        background-color: #e74c3c;
        color: #fff;
        border: none;
        padding: 0.8rem 1.5rem;
        border-radius: 1.5rem;
        cursor: pointer;
        transition: 0.3s;
        text-decoration: none;
        font-weight: bold;
      }

      .btn:hover {
        background-color: #c0392b;
      }

      .container {
        width: 90%;
      }

      .form-buttons {
        flex-direction: column;
        gap: 1rem;
      }

      .btn {
        width: 100%;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <h1>Edit Contact</h1>
    </div>

    <div class="container">
      <form class="contact-form">
        <label for="name">Name:</label>
        <input type="text" id="name" value="Ali" required />

        <label for="email">Email:</label>
        <input type="email" id="email" value="xyz@gmail.com" required />

        <label for="phone">Phone:</label>
        <input type="text" id="phone" value="+9234536452" required />

        <label for="address">Address:</label>
        <textarea id="address" required>
Farooq Colony, Chishtian, Street No. 09, District Bahawalnagar</textarea
        >

        <div class="form-buttons">
          <button type="submit" class="btn">Update Contact</button>
          <a href="index.html" class="btn">Cancel</a>
        </div>
      </form>
    </div>
  </body>
</html>
