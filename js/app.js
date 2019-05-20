//Wait the load of HTML'n CSS and after load JS
document.addEventListener('DOMContentLoaded', ()=>{

    // Initialisation
      
    // Ciblages
    let article = document.querySelectorAll('article');
      
    // Ajout des evènements 'click' sur les TRs
    for (var ligne of article) {
        article.addEventListener('click', ()=> {
            window.location = 'fiche.php?id='+(this.dataset.id);
        });
      
    }
      
});