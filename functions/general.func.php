<?php

include  "./includes/config.php";
function fetchTeamMembers() {
  global $dbConnect;
  $sql = "SELECT * FROM team";
  $result = $dbConnect->query($sql);
  $result = $result->fetch_all(MYSQLI_ASSOC);
  return $result;
}
