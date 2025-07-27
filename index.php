
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login – Omvix ERP</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg-light: #FFF8F0;
      --accent-orange: #FF6F40;
      --accent-red: #E25822;
      --accent-yellow: #FFD447;
      --btn-bg: #FFB347;
      --btn-text: #3B1F0F;
      --text-main: #1A1A1A;
      --text-muted: #5A4033;
      --card-bg: rgba(255,255,255,0.04);
      --shadow-tint: rgba(255, 111, 64, 0.2);
      --font-family: 'Inter', sans-serif;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      background-color: var(--bg-light);
      font-family: var(--font-family);
      color: var(--text-main);
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 24px;
    }

    .login-box {
      background: var(--card-bg);
      padding: 48px 32px;
      border-radius: 16px;
      box-shadow: 0 4px 24px var(--shadow-tint);
      max-width: 420px;
      width: 100%;
    }

    .login-box h2 {
      color: var(--accent-orange);
      font-size: 32px;
      font-weight: 700;
      margin-bottom: 24px;
      text-align: center;
    }

    .form-group {
      margin-bottom: 24px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: var(--text-muted);
      font-weight: 500;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      border: 1px solid var(--accent-orange);
      border-radius: 8px;
      background: transparent;
      color: var(--text-muted);
      font-size: 16px;
    }

    .btn {
      background-color: var(--btn-bg);
      color: var(--btn-text);
      padding: 14px 28px;
      border: none;
      border-radius: 12px;
      font-weight: 600;
      font-size: 16px;
      width: 100%;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 8px;
    }

    .btn:hover {
      filter: brightness(1.05);
      transform: scale(1.02);
    }

    .error-message {
      color: var(--accent-red);
      text-align: center;
      margin-bottom: 16px;
      font-size: 14px;
    }
    
    .logo-wrapper {
  text-align: center;
  margin-bottom: 12px;
}

.logo-wrapper img {
  width: 100px;
  height: auto;
}

    @media (max-width: 480px) {
      .login-box {
        padding: 32px 24px;
      }
    }
  </style>
</head>
<body>
  <div class="login-box">
      <div class="logo-wrapper">
  <center><img src="assets/omvix_logo.png" alt="Omvix ERP" /></center>
</div>
<h2>ERP Login</h2>
        <form action="login.php" method="POST">
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" placeholder="you@example.com" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="••••••••" required>
      </div>
      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</body>
</html>
