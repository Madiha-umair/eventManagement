<?php

include('includes/database.php');
include('includes/config.php');
include('includes/functions.php');

secure();

include('includes/header.php');

?>

<ul id="dashboard">
  <li>
    <a href="event.php">
      Manage Event Details
    </a>
  </li>
  <li>
    <a href="categories.php">
      Manage Categories
    </a>
  </li>
  <li>
    <a href="users.php">
      Manage Users
    </a>
  </li>
  <li>
    <a href="logout.php">
      Logout
    </a>
  </li>
</ul>

<?php

include('includes/footer.php');

?>