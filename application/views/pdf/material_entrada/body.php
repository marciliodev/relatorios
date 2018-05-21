<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?=('assets/css/bootstrap-4.1.1.min.css') ?>">
    <link rel="stylesheet" href="<?=('assets/css/estilo.css') ?>">
    <script src="<?=('assets/js/jquery-3.3.1.slim.min.js') ?>"></script>
    <script src="<?=('assets/js/popper.min.js') ?>"></script>
    <script src="<?=('assets/js/bootstrap-4.1.1.min.js') ?>"></script>
    <script src="<?=('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?=('assets/js/jquery.min.js') ?>"></script>
    <script src="<?=('assets/js/funcoes.js') ?>"></script>
</head>
<body>
<table border='1' width='1000' align='center'>
    <tr class='header'>
        <th id='th_cod_RE' class='center'>ITENS</th>
        <th id='th_desc_RSV' class='center'>DESCRIÇÃO</th>
        <th class='center'>QTD.</th>
        <th class='center'>UND.</th>
        <th class='center'>VALOR DE CUSTO R$</th>
        <th class='center'>VALOR TOTAL R$</th>
        <th class='center'>LOTE</th>
        <th class='center'>VALIDADE</th>
    </tr>

    <?php
    //var_dump($dados);
    //echo $dados[0]->disc_produto;
    //exit();
    $count = 1;
    for($i=0; $i < count($dados); $i++){
       // for ($c=0; $c < count($dados[$i]); $c++){
            ?>
            <tr id="tbcor1">
                <td class="center"><?=$count++?></td>
                <td class='left'><?php echo $dados[$i]->disc_produto; ?></td>
                <td class='left'><?php echo $dados[$i]->qt_total; ?></td>
                <td class='left'><?php echo $dados[$i]->qt_atual; ?></td>
                <td class='left'>R$ <?php echo $dados[$i]->vl_unitario; ?></td>
                <td class='left'>R$ <?php echo $dados[$i]->vl_total; ?></td>
                <td class='center'><?php echo $dados[$i]->lote;?></td>
                <td class='center'><?php echo $dados[$i]->validade;?></td>
            </tr>
            <?php
    }
    ?>
    <?php 
    /*
    foreach ($dados as $produto): ?>
        <td class="center"><?=$count++?></td>
        <td class='left'><?=$produto->disc_produto?></td>
        <td class='center'><?=$produto->qt_total?></td>
        <td class='center'><?=$produto->qt_atual?></td>
        <td class='center'>R$ <?=$produto->vl_unitario?></td>
        <td class='center'>R$ <?=$produto->vl_total?></td>
        </tr>
    <?php endforeach; ?>
     */
     ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class='center'><b>TOTAL R$ </b>
            <?php
            //echo $dados[0]->vl_unitario;
            $valores = 0.00;
            for ($i=0; $i < count($dados); $i++) {
                for ($j = 0; $j < count($dados[$i]); $j++) {
                    $valores += $dados[$i]->vl_unitario;
                }
            }
            echo $valores;
            ?>
        </td>
        <td class='center'><b>TOTAL R$ </b>
            <?php
            //echo $dados[0]->vl_total;
            $valores = 0.00;
            for ($i=0; $i < count($dados); $i++) {
                for ($j = 0; $j < count($dados[$i]); $j++) {
                    $valores += $dados[$i]->vl_total;
                }
            }
            echo $valores;
            ?>
            <td></td>
            <td></td>
        </td>
    </tr>
</table>
</body>
</html>