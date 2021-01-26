const idQr = document.querySelectorAll('.icon-qr');


console.log(idQr);
idQr.forEach(qr =>{
    qr.addEventListener('click', () =>{
        generateQr(qr);
    })
})

function generateQr(qr){
    const data = `id=${qr.id}`;
    fetch('../../controller/admin/create/createQR.php',{
        method:'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: data
    })
    .then( res => res.text() )
    .then( res => {
        console.log(res);
    })
    .catch(error => console.log(error))
}
