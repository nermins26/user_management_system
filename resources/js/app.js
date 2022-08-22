require('./bootstrap');

// window.submitForm = (formId,action) => {
    
//     switch(action) {
//         case "logout":
//             document.querySelector(`#${formId}`).submit();
//         case "delete":
//             alert('Radi')
//     }
    

// }

window.submitForm = formId => {
    document.querySelector(`#${formId}`).submit();
}

window.showModal = id => {
    $("#confirmModal").modal();
    let confirmBtn = document.querySelector('#confirmBtn')
    confirmBtn.addEventListener('click', () => {
        console.log(id)
        document.querySelector(`#deleteForm${id}`).submit();
    })

}


