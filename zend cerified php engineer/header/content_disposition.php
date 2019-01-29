<?php

// We'll be outputting a PDF
header('Content-Type: application/pdf');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="New_Guide.pdf"');

// The PDF source is in original.pdf
readfile('Guide.pdf');




?>