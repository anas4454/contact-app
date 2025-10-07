<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Contact</title>
    <style>
      body {
        background-color: #1a2037;
        font-family: Arial, sans-serif;
        color: #fff;
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

      .btn {
        background-color: #e74c3c;
        color: #fff;
        border: none;
        padding: 0.8rem 1.5rem;
        border-radius: 1.5rem;
        cursor: pointer;
        transition: 0.3s;
        text-decoration: none;
      }
      .contact-form {
        display: flex;
        justify-content: start;
        align-items: center;
        flex-direction: column;
      }
      .contact-form input {
        padding: 1rem 2rem 1rem 0.5rem;
        border-radius: 0.4rem;
        border: none;
        margin: 0.5rem;
      }
      .contact-form textarea {
        padding: 1rem 2rem 1rem 0.5rem;
        border-radius: 0.4rem;
        border: none;
        margin: 0.5rem;
      }
      .form-buttons {
        padding-top: 0.4rem;
      }

      .btn:hover {
        background-color: #c0392b;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <h1>Add New Contact</h1>
    </div>

    <div class="container">
      <form action="backend/form-controller.php" class="contact-form" method="POST">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter name" required />

        <label>Email</label>
        <input type="email" name="email" placeholder="Enter email" required />

        <label>Phone</label>
        <input type="text" name="phone" placeholder="+92..." required />

        <label>Address</label>
        <textarea name="address" placeholder="Enter full address" required></textarea>

        <div class="form-buttons">
          <button type="submit" class="btn">Save Contact</button>
          <a href="index.html" class="btn">Back</a>
        </div>
      </form>
    </div>
  </body>
</html>
