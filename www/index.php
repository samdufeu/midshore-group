<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coming Soon</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    a {
      text-decoration: none;
    }

    .container {
      text-align: center;
      margin-top: 20px;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .column {
      padding: 30px 20px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .column::before {
      content: '';
      position: absolute;
      bottom: 0px;
      right: 0;
      height: 10px;
      width: 100%;
      background: linear-gradient(to left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
    }

    .column img {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 0 auto;
    }

    .overlay-text {
      font-size: 14px;
      color: #fff;
      background-color: #1d96ad;
      padding: 5px 10px;
      border-radius: 5px;
    }

    .card {
      border: none;
    }

    .card-footer {
      background-color: inherit;
      border: none;
      padding: 0;
    }

    .card-footer .overlay-text {
      display: block;
      margin-top: 10px;
    }

    .disabled img {
      filter: grayscale(100%) brightness(50%);
      opacity: 0.4;
    }

    @media (max-width: 767px) {
      .column img {
        max-width: 375px;
      }

      .column {
        margin-bottom: 10px;
      }

      .container {
        height: auto;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card column">
          <a href="https://www.midshoreconsulting.com/" target="_blank">
            <img src="https://www.midshoreconsulting.com/wp-content/uploads/2020/12/midshore_consulting_logo_377x115.png" alt="Visit Midshore Consulting Limited" class="card-img-top">
            <div class="card-footer">
              <div class="overlay-text">Visit Midshore Consulting Limited</div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card column">
          <a href="https://www.midshoreonlinetraining.com/" target="_blank">
            <img src="https://www.midshoreconsulting.com/wp-content/uploads/2023/09/midshore_online_training.png" alt="Visit Midshore Online Training" class="card-img-top">
            <div class="card-footer">
              <div class="overlay-text">Visit Midshore Online Training</div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card column disabled">
          <a href="#" target="_blank" class="disabled">
            <img src="https://www.midshoreconsulting.com/wp-content/uploads/2023/09/midshore-commpliance-services.png" alt="Midshore Compliance Services" class="card-img-top">
            <div class="card-footer">
              <div class="overlay-text">Coming Soon</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>