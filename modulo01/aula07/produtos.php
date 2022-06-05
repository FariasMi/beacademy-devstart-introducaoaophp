<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Produtos</title>
</head>
<body>
    

<?php

    $produto1= [
        'nome' =>'Saitama Figure Action',
        'preco'=>number_format(499.90,2,",","."),
        'descricao'=>'PRÉ VENDA Action Figure Saitama: One-Punch Man (Hero Costume Version) Boneco Colecionável - Good Smile Company',
        'imagem' => "<img width='150px' src=images/saitama.jpg>",
    ];
    $produto2 = [
        'nome'=>'Gojo Satoru Figure Action',
        'preco'=>number_format(2041.55,2,",","."),
        'descricao'=>'Furyu Jujutsu Kaisen: Satoru Gojo Mappa Showcase Boneco de PVC em escala 1:7, multicolorido',
        'imagem' => "<img width='150px' src=images/gojo-satoru.jpg>",
        ];

    $produto3= [
        'nome'=>'Nanami Figure Action',
        'preco'=>number_format(647.29,2,",","."),
        'descricao'=>'Jujutsu Kaisen: Kento Nanami ARTFX J Statue',
        'imagem' => "<img width='150px' src=images/nanami.jpg>",
      
    ];

    $produto4 = [
        'nome'=>'Nobara Figure Action',
        'preco'=>number_format(498.55,2,",","."),
        'descricao'=>'Kotobukiya Jujutsu Kaisen: Estátua Nobara Kugisaki ArtFX J, multicolorida, 19 cm',
        'imagem' => "<img width='150px' src=images/nobara.jpg>",

    ];

    $produto5 = [
        'nome'=>'Goku Figure Action',
        'preco'=>number_format(600.99,2,",","."),
        'descricao'=>'Goku do Filho Onda de Kamehameha Z Dragon Ball da Banpresto',
        'imagem' => "<img width='150px' src=images/goku.jpg>",
    ];
   
    $produtos = [
        $produto1,
        $produto2,
        $produto3,
        $produto4,
        $produto5,
    ];

      ?>
     <div class="container">
        <h1 class="mt-5">Produtos</h1>
        <table class="table table-hover table-striped mt-5">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Preço   </th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    
                </tr>
            </thead>

            
            <tbody>
                <?php
                    foreach ($produtos as $produto){
                        echo '<tr>';
                            echo '<td>'. $produto['nome'] . '</td>';
                            echo '<td> R$'. $produto['preco'].'  </td>';
                            echo '<td>'. $produto['descricao'].'</td>';
                            echo '<td>'.$produto['imagem'].'</td>';
                        echo '</tr>';
                    }
                ?>

            </tbody>    
        </table>
    </div>

</body>
</html>