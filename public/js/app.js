import './bootstrap';
import swal from 'sweetalert';

document.querySelectorAll('.delete-button').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        swal({
            title: "¿Estás seguro?",
            text: "Una vez eliminado, no podrás recuperar esta noticia!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    event.target.form.submit();
                }
            });
    });
});
