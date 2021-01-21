document.addEventListener('DOMContentLoaded', scan);

function scan(){
    var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false});
    const result = document.querySelector('#result');
    scanner.addListener('scan',function(content){
        console.log(content);
        result.innerHTML = content;
        // window.location.href=content;
    });
        Instascan.Camera.getCameras().then(function (cameras){
            if(cameras.length>0){
                scanner.start(cameras[0]);
                document.querySelectorAll('[name="options"]').forEach(option =>{
                    option.addEventListener('change',() => {
                        if(this.value==1){
                            if(cameras[0]!=""){
                                scanner.start(cameras[0]);
                            }else{
                                alert('No Front camera found!');
                            }
                        }else if(this.value==2){
                            if(cameras[1]!=""){
                                scanner.start(cameras[1]);
                            }else{
                                alert('No Back camera found!');
                            }
                        }
                    });
                });
            }else{
                console.error('No cameras found.');
                alert('No cameras found.');
            }
        }).catch(function(e){
            console.error(e);
            // alert(e);
        });
}


