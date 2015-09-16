<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 gtvtbdtbtbrb* To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>