console.log('page ready!');

const deleteButtons = document.getElementsByClassName("employees-delete-button");

Array.from(deleteButtons).forEach(element => {
    element.addEventListener('click', () =>{
        let person = JSON.parse(element.dataset.person);

        if(window.confirm('¿De verdad quieres eliminar a '+person.name+'?')) {
            console.log('borrar');
        } else {
            console.log('no borrar');
        }
    });
});