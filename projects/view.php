<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .pdf-container {
      width: 100%;
      height: 800px;
      overflow-y: scroll;
      position: relative;
    }

    .pdf-document {
      width: 100%;
      height: auto;
      display: block;
    }

    .blurred-pdf {
      filter: blur(8px);
    }
  </style>
  <title>View Page</title>
</head>

<body>
  <?php $dir = "../uploads"; ?>
  <div class="container">
    <div class="pdf-container">
      <embed class="pdf-document" src="<?php echo $dir . "/836-ADEBESIN TOBI TOSIN.pdf" ?>" type="application/pdf">
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var pdfContainer = document.querySelector(".pdf-container");
      var pdfDocument = document.querySelector(".pdf-document");

      pdfContainer.addEventListener("scroll", function() {
        var scrollPercentage = (pdfContainer.scrollTop + pdfContainer.clientHeight) / pdfContainer.scrollHeight;

        if (scrollPercentage >= 0.4) {
          pdfDocument.classList.add("blurred-pdf");
        } else {
          pdfDocument.classList.remove("blurred-pdf");
        }
      });
    });
  </script>
</body>

</html>
