<!DOCTYPE html>
<html>
<head>
  <title>Puzzle 1 - (PHP/HTML)</title>
</head>
<body>
<div>
  <h2>Puzzle 1 - (PHP/HTML)</h2>
  <a href="/">Back To Home</a>
</div>

<?php

require_once 'Renderer.php';

// TEST 1: Single Row Render
$render_1 = new Renderer;

$render_1->id = 1;
$render_1->name = 'FirstName LastName';
$render_1->sex = 'M';
$render_1->address = 'Khulna';

echo $render_1->displayAsTable('TEST 1: Single Row Render');


// TEST 2: Multiple Rows Render w/ dynamic fields
$render_2 = new Renderer;
$users = [
  [
    'id' => 1,
    'name' => 'Name1',
    'sex' => 'M',
    'is_active' => 'N'
  ],
  [
    'id' => 2,
    'name' => 'Name2',
    'sex' => 'M',
    'address' => 'Khulna',
    'is_active' => 'Y'
  ],
  [
    'id' => 3,
    'name' => 'Name3',
    'sex' => 'F',
    'address' => 'Dhaka',
    'note' => 'Currently In Leave',
    'is_active' => 'Y'
  ]
];

foreach ($users as $user) {
  $render_2->append($user);
}

echo $render_2->displayAsTable('TEST 2: Multiple Rows Render w/ dynamic fields');


// TEST 3: No records
$render_3 = new Renderer;
echo $render_3->displayAsTable('TEST 3: No Data');
?>

</body>
</html>