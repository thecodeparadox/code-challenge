<!DOCTYPE html>
<html>
<head>
  <title>Puzzle 1 - PHP/HTML</title>
</head>
<body>
  <h3><?php echo $test_name; ?></h3>
  <?php if ($is_data_exists): ?>
  <table border="1" cellpadding="5">
    <thead>
      <tr>
      <?php foreach($headers as $title): ?>
        <th><?php echo $title; ?></th>
      <?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach($body as $row): ?>
      <tr>
        <?php foreach($headers as $h): ?>
        <td><?php echo $row[$h]; ?></td>
        <?php endforeach; ?>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php else: ?>
  <h4>No Records Found.</h4>
  <?php endif; ?>
</body>
</html>