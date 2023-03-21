<?php
$title = 'Une fortune au hasard';
ob_start();
?>
<div class="citation">
<pre>----------------------------------------</pre>
    <blockquote>
        <?= $citation['citation']; ?>
        <div class="auteur">
            <cite><?= $citation['auteur']; ?></cite>
        </div>
        <pre>
---------------------------------
     \
      \
        ,__, |    | 
        (oo)\|    |___
        (__)\|    |   )\_
             |    |_w |  \
             |    |  ||   *

        </pre>
    </blockquote>
</div>

<?php
 $content = ob_get_clean();
 require __DIR__ . '/template.php'; 