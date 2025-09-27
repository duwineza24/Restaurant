

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Comment Form</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body Styling */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      line-height: 1.5;
    }

    /* Page Header */
    .page-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 600px;
      width: 100%;
      margin: 0 auto 30px auto;
      padding: 0 10px;
    }

    .page-header h1 {
      font-size: 26px;
      color: #333;
      font-weight: 700;
    }

    .page-header a.back-link {
      text-decoration: none;
      color: #007BFF;
      font-weight: 600;
      font-size: 16px;
      padding: 6px 12px;
      border: 1px solid #007BFF;
      border-radius: 4px;
      transition: all 0.3s ease;
      user-select: none;
    }

    .page-header a.back-link:hover,
    .page-header a.back-link:focus {
      background-color: #007BFF;
      color: #fff;
      outline: none;
    }

    /* Form Container */
    form {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 25px 20px;
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
    }

    /* Form Header */
    form header {
      text-align: center;
      margin-bottom: 25px;
    }

    form header h2 {
      font-size: 24px;
      color: #333;
      margin-bottom: 8px;
      font-weight: 700;
    }

    form header p {
      font-size: 15px;
      color: #666;
      line-height: 1.4;
    }

    /* Input and Textarea Styling */
    input[type="text"],
    textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      color: #333;
      background-color: #fafafa;
      transition: border-color 0.3s ease;
      font-family: inherit;
      resize: vertical;
      min-height: 100px;
    }

    input[type="text"]:focus,
    textarea:focus {
      border-color: #007BFF;
      outline: none;
      background-color: #fff;
    }

    /* Submit Button Styling */
    button[type="submit"] {
      width: 100%;
      padding: 14px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s ease;
      user-select: none;
    }

    button[type="submit"]:hover,
    button[type="submit"]:focus {
      background-color: #0056b3;
      outline: none;
    }

    /* Responsive Design */
    @media (max-width: 600px) {
      .page-header {
        padding: 0 5px;
      }

      .page-header h1 {
        font-size: 20px;
      }

      .page-header a.back-link {
        font-size: 14px;
        padding: 5px 10px;
      }

      form {
        padding: 20px 15px;
      }

      form header h2 {
        font-size: 20px;
      }

      form header p {
        font-size: 13px;
      }

      input[type="text"],
      textarea {
        font-size: 14px;
      }

      button[type="submit"] {
        font-size: 14px;
        padding: 12px;
      }
    }
  </style>
</head>

<body>
  <header class="page-header">
    <h1>Leave a Comment</h1>
    <a href="user.php" class="back-link" aria-label="Back to Dashboard">&larr; Back to Dashboard</a>
  </header>

  <main>
    <form action="db.php" method="POST" novalidate>
      <header>
        <h2>Share Your Thoughts</h2>
        <p>We value your feedback! Please leave a comment below to share your experience or suggestions.</p>
      </header>
      <input type="hidden" name="food_id" value="<?= $id; ?>" />
      <textarea name="comment" placeholder="Leave a comment..." required></textarea>
      <button type="submit" name="subcom">Submit Comment</button>
    </form>
  </main>
</body>
</html>
