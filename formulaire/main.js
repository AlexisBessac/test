const dateDebut = document.querySelector('#date_debut');
const dateFin = document.querySelector('#date_fin');
dateDebut.addEventListener('change', () => {
    if(dateFin.valueAsNumber < dateDebut.valueAsNumber)
        // On vide le champ date_fin
        dateFin.value = null;
    if(dateDebut.value)
        // On défini la date minimum de date_fin à celle de date_debut
        dateFin.min = dateDebut.value; 
    else 
        // On retire cette limite minimum
        dateFin.min = null; 
});