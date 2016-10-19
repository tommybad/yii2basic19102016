<h1><?php print_r($a); ?></h1>

<?php

print_r($report1);
echo '<hr>';

foreach ($report1 as $key => $value) {
    echo $key.' : '.$value['fname'].'  '.$value['lname'].'  '.$value['email'].'<hr>';
}




?>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
<?php
    
foreach ($report1 as $key => $value) {
    echo '<tr>';
    echo '<th scope="row">'.($key+1).'</th>';
    echo '<td>'.$value['fname'].'</td>';
    echo '<td>'.$value['lname'].'</td>';
    echo '<td>'.$value['email'].'</td>';
    echo '</tr>'; 
}

?>
      
  </tbody>
</table>
