<h1>FAQ</h1>

<?php

foreach($this->template_vars["faq_rows"] as $row) {

    echo "<div class='qa_block' ><h2>" . $row["question"] . "</h2>";
    echo "<p>" . $row["answer"] . "</p>";
    echo "<h3>" . $row["category"] . "</h3></div>";
}
?>

<br><br>
<div class="align_center">
    <a href='?view=insert'>Neue Frage/Antwort</a>
</div>