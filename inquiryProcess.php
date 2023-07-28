<?php
require_once 'classes/connection.php';

// display inquiry list
$queryget1 = "SELECT inquiry_id FROM inquiry where status = 1";
$results1 = Database::search($queryget1);
$countr = 0;
while ($row = $results1->fetch_assoc()) {
  $listItems[$countr] = $row['inquiry_id'];
  $countr++;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if (isset($_POST["action"])) {
    if ($_POST["action"] === "get_list_items") {
      // Return the list items
      foreach ($listItems as $item) {
        echo '<a href="#" class="list-group-item list-group-item-action">' . $item . '</a>';
      }
    } elseif ($_POST["action"] === "update_text_field") {
      // Process the inquiry text and send to text field
      $selectedItem2 = htmlspecialchars($_POST["selectedItem2"]);
      $querysearch = "SELECT * FROM inquiry WHERE inquiry_id = '$selectedItem2'";
      $resulttxt = Database::search($querysearch);
      if ($resulttxt) {
        $txtarray = $resulttxt->fetch_assoc();
        echo "<h6>Full name: ".$txtarray['full_name']."<br/>Email: ".$txtarray['email']."</h6><br/><textarea class='form-control' id='selected-item' readonly>Message:    ".$txtarray['inquiry_txt']."</textarea>";
      } else {
        echo "<p class='lead'>Unable to display</p>";
      }
    }
  }

  if (isset($_POST["selectedInquiry"])) {
    $inquiry = htmlspecialchars($_POST["selectedInquiry"]);
    $querydel = "UPDATE inquiry SET status= 0 WHERE inquiry_id = '$inquiry'";
    if (Database::iud($querydel)) {
      header("Location: inquiryDash.php");
    }
  }
}