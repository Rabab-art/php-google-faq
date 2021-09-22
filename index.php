<?php 

$articles = [
    
    [
        
        [
        'title' =>'Come state implementando la recente decisione della Corte di giustizia dell\Unione europea (CGUE) relativa al diritto all\oblio?',
        'text' => 'La recente decisione della Corte di giustizia dell\Unione europea ha profonde conseguenze per i motori di ricerca in Europa. 
        La Corte ha stabilito che alcuni utenti hanno
         il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome.'
    ],

    

]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($articles as $paragraph => $article) { ?>
<article>
    <h1><?= $paragraph ?> </h1>
<?php foreach ($article as $article_paragraph){?>
    <h1>
        <?= $article_paragraph['title']?>
    </h1>
    <p>  <?= $article_paragraph['text']?> </p>

<?php}?>
</article>


<?php} ?>


</body>
</html>