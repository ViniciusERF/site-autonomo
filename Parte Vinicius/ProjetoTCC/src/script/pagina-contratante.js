document.addEventListener("DOMContentLoaded", function() {
    function filterCards() {
        let input = document.getElementById('search-input').value.toLowerCase();
        let cards = document.querySelectorAll('.box-autonomo-text');
        
        cards.forEach(function(card) {
            let title = card.querySelector('h4').innerText.toLowerCase();
            if (title.includes(input)) {
                card.parentElement.style.display = "";
            } else {
                card.parentElement.style.display = "none";
            }
        });
    }

    document.getElementById('search-input').addEventListener('keyup', filterCards);
});