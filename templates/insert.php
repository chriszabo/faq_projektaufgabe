<?php
$output = "";

if (isset($_POST["question"], $_POST["answer"], $_POST["category"])) {

    if (is_numeric($_POST["category"]) && ($_POST["category"] >= 1 && $_POST["category"] <= 3) && strlen($_POST["question"]) > 0 && strlen($_POST["answer"]) > 0) {
        $model = new Model();
        $model->insert_faq_row($_POST["question"], $_POST["answer"], $_POST["category"]);
        $output = "Frage/Antwort angelegt!";
    } else {
        $output = "Invalide Inputs!";
    }
}
?>

<h1>Neue Frage/Antwort</h1>
<div class="align_center">
    <form class="qa_block" method="POST">
        <label for="question">Frage:</label>
        <input type="text" id="question" name="question"><br><br>
        <label for="answer">Antwort:</label>
        <input type="text" id="answer" name="answer"><br><br>

        <label for="category">Kategorie:</label>
        <select id="category" name="category">
            <?php
            foreach ($this->template_vars["categories"] as $row) {
                echo "<option value=" . $row["id"] .">" . $row["category"] . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Submit">
        <p><i><?php echo $output ?></i></p>
    </form>
</div>

<div class="align_center">
    <a href="?view=faq_list">Zurück zum FAQ</a>
</div>