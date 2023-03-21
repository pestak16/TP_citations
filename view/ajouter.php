<?php
$title = 'Une fortune au hasard';
ob_start();
?>
<form action="index.php?p=ajouter" method="post">
    <div class="field">
        <label for="citation">Citation</label><br>
        <input type="text" name="citation" id="citation" size="140">
    </div>
    <div class="field">
        <label for="auteur">auteur</label><br>
        <input type="text" name="auteur" id="auteur" size="60">
    </div>
    <div class="submit">
        <input type="submit" value="Ajouter">
    </div>
</form>

<?php
 $content = ob_get_clean();
 require __DIR__ . '/template.php'; 