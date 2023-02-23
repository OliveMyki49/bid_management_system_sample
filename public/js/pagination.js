$(document).ready(function() {
  // Get the table and the number of rows
  var table = document.getElementById("myTable");
  var numRows = table.rows.length;

  // If there are more than 5 rows, create pagination
  if (numRows > 5) {
    // Calculate the number of pages needed
    var numPages = Math.ceil(numRows / 5);

    // Create the pagination links
    var pagination = '<ul class="pagination">';
    for (var i = 1; i <= numPages; i++) {
      pagination += '<li class="page-item"><a class="page-link" href="#">' + i + '</a></li>';
    }
    pagination += '</ul>';

    // Add the pagination links to the page
    $('#pagination').html(pagination);

    // Show the first 5 rows by default
    table.rows[5].style.display = 'none';

    // Add click event handlers to the pagination links
    $('.page-link').click(function() {
      // Get the page number from the link
      var pageNum = parseInt($(this).html());

      // Calculate the start and end rows for the current page
      var startRow = (pageNum - 1) * 5;
      var endRow = startRow + 5;

      // Show or hide the appropriate rows
      for (var i = 0; i < numRows; i++) {
        if (i >= startRow && i < endRow) {
          table.rows[i].style.display = '';
        } else {
          table.rows[i].style.display = 'none';
        }
      }

      // Set the active class on the current page link
      $('.page-item').removeClass('active');
      $(this).parent().addClass('active');

      // Store the active page in sessionStorage
      sessionStorage.setItem('activePage', pageNum);

      // Prevent the default link behavior
      return false;
    });

    // Set the active class on the stored page link
    var activePage = sessionStorage.getItem('activePage');
    if (activePage) {
      $('.page-link').each(function() {
        if ($(this).html() == activePage) {
          $(this).parent().addClass('active');
        }
      });
    } else {
      $('.page-item:first-child').addClass('active');
    }
  }
});