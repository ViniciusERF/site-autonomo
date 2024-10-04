document.querySelectorAll('.botaoLogin').forEach(button => {
    button.addEventListener('click', function() {
        fetch('../../../../auth/verifica_login.php', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest' // Indica que é uma requisição AJAX
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.logged_in) {
                window.location.href = '../../../../protected/area_protegida.php';
            } else {
                window.location.href = '../../../../auth/login.php';
            }
        })
        .catch(error => console.error('Erro:', error));
    });
});