
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
                    ],
                    [
                        'name'=>'BRIQUET',
                        'pu'=>130,
                        'quantite'=>76,
                        'seuil'=>10,
                    ]
                ];
            
            ?>

            <?php
                $articles[] = [
                    'name'=>'BISCUIT NICE',
                    'pu'=>100,
                    'quantite'=>67,
                    'seuil'=>35,
                ]; 
            ?>

            <?php
              var_dump($_GET['designation'])
            
            ?>
            
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">TABLE DE COURSES</h3>
                            </div>
                            <div class="card-body">
                            <table class="table table-bordered table-striped table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>DESIGNATION</th>
                                        <th>P.U</th>
                                        <th>QTE</th>
                                        <th>TOTAL</th>
                                        <th>SEUIL</th>
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
                                            <?php if(isset($item['seuil'])): ?>
                                                <td><?= $item['seuil'] ?></td>
                                            <?php else: ?>
                                                <td>0</td>    
                                            <?php endif ?>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            </div>
                            <div class="card-footer">
                                TOTAL : <span><b><?= number_format($somme,0,',','.') ?> FCFA</b></span>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-header">
                                <h4 class="card-title">NOUVEL ARTICLE</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="index.php">
                                    <div class="form-group">
                                        <label for="">DESIGNATION</label>
                                        <input name="designation" class="form-control" type="text" placeholder="Saisir le nom de l'article">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="">PRIX UNITAIRE</label>
                                        <input name="prix" class="form-control" type="number" require placeholder="Saisir le prix">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="">QUANTITE</label>
                                        <input name="qte" class="form-control" type="number" require placeholder="Saisir la quantite">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="">SEUIL MINIMAL</label>
                                        <input name="min" class="form-control" type="number" require placeholder="Saisir le seuil minimal">
                                    </div>
                                    <div class="form-group mt-3">
                                        <button class="btn btn-danger btn-block">Ajouter</button>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                    <h3 class="">LISTE DE COURSES</h3>
                            
                            <div class="">
                                <?php foreach($articles as $elt): ?>
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <?php foreach($elt as $k=>$v): ?>
                                                    <li class="list-group-item"><?= $k ?> : <?= $v ?> </li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                        <div class="card-footer">

                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                    </div>
                </div>

       </div>
    </div>
    <?php include_once('includes/bottom.php'); ?>
    