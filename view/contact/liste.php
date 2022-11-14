<div class="">
    <span class="h2">Liste des contacts</span>
    <span class="offset-7">
        <a href="index.php?view=ajout" class="btn btn-primary">Nouveau</a>
    </span>
</div>
<div class="">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($contacts as $c) { ?>
            <tr>
                <td><?= $c['id']?></td>
                <td><?=$c['prenom']?></td>
                <td><?=$c['nom']?></td>
                <td><?=$c['tel']?></td>
                <td>
                    <a href="index.php?view=modification&id=<?= $c['id']?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="index.php?action=supprimer&id=<?= $c['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php } ?> 
        </tbody>
    </table>
</div>