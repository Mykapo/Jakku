<div class="popup">
    <section class="popup-content">
        <h1>Ajouter un devis</h1>
        <form action="" method="post">
            <div>
                <label for="client" class="input-label">Client</label>
                <input class="input-form" id="client" type="text" name="client" placeholder="Saisir">
            </div>
            <div>
                <label class="input-label">Type de tarif</label>
                <div class="checkbox">
                    <input class="input-form" type="radio" name="journalier" class="input-checkbox">
                    <label for="journalier">Journalier</label>
                    <input class="input-form" type="radio" name="journalier" class="input-checkbox">
                    <label for="journalier">Forfaitaire</label>
                </div>
            </div>
            <div>
                <label for="intitulé" class="input-label">Intitulé</label>
                <input class="input-form" id="intitulé" type="text" name="intitulé" placeholder="Saisir">
            </div>
            <div>
                <label for="description" class="input-label">Description</label>
                <input class="input-form" id="description" type="text" name="description" placeholder="Saisir">
            </div>
            <div class="prix">
                <div>
                    <label for="tarif-journalier" class="input-label">Tarif journalier</label>
                    <input class="input-form" id="tarif-journalier" type="text" name="description" placeholder="Saisir">
                </div>
                <p>X</p>
                <div>
                    <label for="jour" class="input-label">Nombre de jour</label>
                    <input class="input-form" id="jour" type="text" name="description" placeholder="Saisir">
                </div>
            </div>
            <div class="button-plus">
                <button class="button complete">+</button>
                <p>Ajouter un intitulé</p>
            </div>
            <button id="add-finish-devis" type="submit" class="button add" disabled>Ajouter</button>
        </form>
    </section>
</div>
