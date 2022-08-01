
    <?php include_once('includes/header.php'); ?>
    <div class="main selector-for-some-widget">
       <div class="container">
        <h1>SOYEZ LE(S) BIENVENU(S)</h1>
            <?php
                $articles =[
                    [
                        'name'=>'LAIT MIXWELL',
                        'pu'=>150,
                        'quantite'=>36,
                    ],
                    [
                        'name'=>'DURU SAVON',
                        'pu'=>500,
                        'quantite'=>14,
                    ],
                    [
                        'name'=>'PAIN',
                        'pu'=>100,
                        'quantite'=>51,
                    ]
                ];
            
            ?>
            
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">LISTE DE COURSES</h3>
                            </div>
                            <div class="card-body">
                            <table class="table table-bordered table-striped table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>DESIGNATION</th>
                                        <th>PRIX UNITAIRE</th>
                                        <th>QUANTITE</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $somme = 0; ?>
                                    <?php foreach($articles as $item): ?>
                                        <?php 
                                            $total = $item['pu'] * $item['quantite']; 
                                            $somme = $somme + $total;
                                             ?>
                                        <tr>
                                            <td><?= $item['name'] ?></td>
                                            <td><?= $item['pu'] ?></td>
                                            <td><?= $item['quantite'] ?></td>
                                            <td><?= $total ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            </div>
                            <div class="card-footer">
                                TOTAL : <span><b><?= number_format($somme,0,',','.') ?> FCFA</b></span>
                            </div>
                        </div>
                    </div>
                </div>

       </div>
    </div>
    <?php include_once('includes/bottom.php'); ?>
    