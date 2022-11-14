<div class="row col-md-12">
    <div class="card col-10 offset-1">
        <div class="card-header">
            <span class="h2 ">Nouveau Contact</span>
            <span class="offset-5">
                <a href="index.php" class="btn btn-success">Liste des Contacts</a></span>
        </div>
        <div class="card-body">
            <form action="index.php?action=add" method="POST">
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="number" name="tel" class="form-control">
                </div>
                <div class="">
                    <input type="submit" class="btn btn-primary" value="Engresister" name="add">
                </div>
            </form>
        </div>
    </div>
</div>