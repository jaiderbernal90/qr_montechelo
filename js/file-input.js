const file = document.querySelector('.file');


file.addEventListener('change', () => {
    getName(file.files[0].name);
})

function getName(path){
  document.querySelector('#fileName').textContent = path;
}