<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="styles/styleDash.css" />
  <title>Admin Dashboard</title>
</head>

<body>
  <div class="d-flex" id="wrapper">
    <!-- sidebar -->
    <?php
    include('includes/sideBar.php');
    ?>
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
          <i class="fa-solid fa-arrow-right-arrow-left primary-txt fs-3 me-3" id="menu-toggle"></i>
          <h2 class="fs-2 m-0 navbar-txt">Inquiries</h2>
        </div>
      </nav>

      <!-- your code here -->
      <div class="row m-5 p-4">
        <div class="row text-center fs-3">Select inquiry to view</div>
        <div class="col-sm-4 p-2 primary-bg list-field">
          <div class="list-group overflow-auto" id="list-group">
            <!-- List items will be dynamically populated using AJAX -->
          </div>
        </div>
        <div class="col-sm-8 ">
          <div class="form-group secondary-bg p-2">
            <label for="selected-item">Inquiry Id: <span id="selected-item2"></span></label>
            <span id="selected-content">
              <textarea class="form-control" id="selected-item" readonly></textarea>
            </span>
            <button class="btn btn-primary mt-4 bg-danger" id="submit-button">Delete</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- to here -->
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="scripts/scriptDash.js"></script>


  <script>
    $(document).ready(function () {
      // Load list items from database on page load
      $.ajax({
        url: "inquiryProcess.php",
        method: "POST",
        data: { action: "get_list_items" },
        success: function (data) {  
          $('#list-group').html(data);
        }
      });
      // Update text field and selected item label when a list item is clicked
      $(document).on('click', '.list-group-item', function () {
        var selectedItem = $(this).text().trim();
        $('#selected-item2').text(selectedItem);
        // Send selected item to inquiryProcess.php to retrieve text
        $.ajax({
          url: "inquiryProcess.php",
          method: "POST",
          data: { action: "update_text_field", selectedItem2: selectedItem },
          success: function (data) {
            $('#selected-content').html(data);
          }
        });
      });
    });

    $(document).on('click', '#submit-button', function () {
      var selectedItem2 = $('#selected-item2').text().trim();
      // Send the selected item value to inquiryProcess.php to delete
      var form = $('<form action="inquiryProcess.php" method="post"></form>');
      form.append('<input type="hidden" name="selectedInquiry" value="' + selectedItem2 + '">');
      $('body').append(form);
      form.submit();
    });
  </script>


</body>

</html>