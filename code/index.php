<?php $host = $_SERVER['HTTP_HOST']; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Code Challenge - Sr Software Engineer (PHP)</title>
  <style type="text/css">
    .dash {
      display: flex;
      flex-direction: row;
      justify-content: center;
      padding: 10px;
    }
    .q {
      width: 33%;
      min-height: 250px;
      height: auto;
      margin: 0 1rem;
      padding: 1rem;
      background-color: #fff;
      color: #585658;
      box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.25);
      position: relative;
    }
    .q .des {
      height: auto;
      min-height: 80%
    }
    .q h4 {
      color: #F16522;
      margin-top: 0;
    }
    .q a {
      background-color: #1F988B;
      color: #fff;
      padding: 10px;
      text-decoration: none;
      outline: none;
      border: 1px solid #1F988B;
      border-radius: 3px;
      display: block;
      text-align: center;
      margin-top: 10px;
      text-transform: uppercase;
    }
    .q a:hover {
      background-color: #029bbd;
      border-color: #029bbd;
    }
    .info {
      margin-top: 20px;
      margin-right: 30px;
      text-align: right;
    }
    .info span {
      display: block;
      margin: 3px 0;
    }
  </style>
</head>
<body>
  <h3>Code Challenge - Sr Software Engineer (PHP)</h3>
  <div class="dash">
    <div class="q">
      <div class="des">
        <h4>Puzzle 1 - (PHP/HTML)</h4>
        <p>
          Write a PHP class that inherits from PHP's ArrayObject class. Give your new class a public function called <code>displayAsTable()</code> that outputs all the set keys and values as an HTML table. Instantiate an instance of this class, set some keys for the object, and call the object's <code>displayAsTable()</code> function to display your data as an HTML table.
        </p>
        <blockquote><strong>NOTE:</strong> Use functionality inherited from ArrayObject. </blockquote>
      </div>
      <a href="puzzle-1">Check Solution</a>
    </div>

    <div class="q">
      <div class="des">
        <h4>Puzzle 2 - (JS/HTML/CSS)</h4>
        <p>
         Using HTML and CSS make a plain white web page that has a 100x100 pixel blue square on it. Position the square along the left side of the page, 50 pixels from the top. Using javascript animate this square so that it moves 10 pixels right and 10 pixels down per second. When the box hits or goes over an edge of the window, change the direction for the related axis.
        </p>
        <blockquote><strong>NOTE:</strong> Please use OOP JS or ES6. Please do not use any javascript framework (e.g. jquery)</blockquote>
      </div>
      <a href="puzzle-2">Check Solution</a>
    </div>

    <div class="q">
      <div class="des">
        <h4>Puzzle 3 - MySQL</h4>
        <p>
          Given the two tables below, write a SQL query that uses a join statement to list all users from the user table, their average correct answers, as well as the time of their most recently taken test. All user entries should appear, even if they have not taken a test.
        </p>
      </div>
      <a href="puzzle-3">Check Solution</a>
    </div>
  </div>
  <div class="info">
    <address>
      <span>Abdullah Yousuf</span>
      <span>Skype: thecodeparadox</span>
      <span>Cell: +880 17 81 500 500</span>
    </address>
  </div>
</body>
</html>