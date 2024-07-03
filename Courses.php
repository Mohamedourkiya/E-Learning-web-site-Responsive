<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BTS DSI Courses</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?>

  <div class="container my-5">
    <h2>Featured Courses</h2>
    <div class="row mb-3">
      <div class="col-md-6 offset-md-3">
        <div class="form-group">
          <label for="courseYear">Choose Year:</label>
          <select class="form-control" id="courseYear">
            <option value="">Select a year</option>
            <option value="1">1ère année</option>
            <option value="2">2ème année</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row" id="courseList">
      <!-- Course cards will be dynamically generated here -->
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      // Add event listener to the course year dropdown
      $('#courseYear').on('change', function() {
        var selectedYear = $(this).val();
        displayCourses(selectedYear);
      });

      // Function to display courses based on the selected year
      function displayCourses(year) {
        // Clear the existing course list
        $('#courseList').empty();

        // Fetch and display the courses based on the selected year
        if (year === '1') {
          // Display 1st year courses
          displayCourseCards([
            { title: 'Algotithmique', description: 'This lessons is by professor Abdessamad Abdelwafi,Teacher of the higher Technical Certificate in secondary  qualification,ibn Al-Haytam Ouarzazate.',pdf:'https://drive.google.com/drive/folders/17LiUIlPbbuvPJGQWJ8hlXq5MTrere5_-' },
            { title: 'Conception des systèmes d\'informations', description: 'This lessons is by professor Abdelmajid El Alami .',pdf:'https://drive.google.com/open?id=1sUYmFcDnWFJUVq8XXm8vvL5jsVtp0Fji&usp=drive_copy' },
            { title: 'Langage C', description: 'This lessons is by professor Abdessamad Abdelwafi,Teacher of the higher Technical Certificate in secondary  qualification,ibn Al-Haytam Ouarzazate.',pdf:'https://drive.google.com/open?id=1jbq-4DsDr0SIn6OM_citv0ipVDhumOYb&usp=drive_copy' },
            { title: 'Assembleur', description: 'This lessons is by professor Abdessamad Abdelwafi,Teacher of the higher Technical Certificate in secondary  qualification,ibn Al-Haytam Ouarzazate.',pdf:'https://drive.google.com/open?id=1EP7u73As-FahIwQ9ldlmmjZbLhjZnrnt&usp=drive_copy' },
            { title: 'Structure et Technologie des composants d’ordinateurs', description: 'This lessons is by professor Abdessamad Abdelwafi,Teacher of the higher Technical Certificate in secondary  qualification,ibn Al-Haytam Ouarzazate.',pdf:'https://drive.google.com/open?id=1Oji_LmwYULpZtps4DfnUDtKgdkW8IRWI&usp=drive_copy' },


          ]);
        } else if (year === '2') {
          // Display 2nd year courses
          displayCourseCards([
            { title: 'Gestion de proje', description: 'This lessons is by professor Abdelkarim Harida .',pdf:'https://drive.google.com/open?id=1yIdvGb8zk2If_d3rA0Q90a6cmH8OGc7g&usp=drive_copy' },
            { title: 'Assurance qualité, test et maintenance', description: 'This lessons is by Creative Commons',pdf:'https://drive.google.com/open?id=1GcHCIivbrWztPtgMZ7fKFnwu3HO_e0CW&usp=drive_copy' },
            { title: 'Développement applications informatiques', description: '' }
          ]);
        } else {
          // Display a message when no year is selected
          $('#courseList').html('<p class="text-center">Please select a year to view the courses.</p>');
        }
      }

      // Function to display the course cards
      function displayCourseCards(courses) {
        courses.forEach(function(course) {
          var courseCard = `
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">${course.title}</h5>
                  <p class="card-text">${course.description}</p>
                  <a href="${course.pdf}" class="btn btn-primary">Download</a>
                </div>
              </div>
            </div>
          `;
          $('#courseList').append(courseCard);
        });
      }
    });
  </script>
</body>
</html>