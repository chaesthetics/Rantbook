const imgDiv1 = document.querySelector('.coverpdiv');
const img1 = document.querySelector('#photo1');
const file1 = document.querySelector('#file1');
const uploadBtn1 = document.querySelector('#uploadBtn1');


imgDiv1.addEventListener('mouseenter', function(){
    uploadBtn1.style.display = "block";
});

imgDiv1.addEventListener('mouseleave', function(){
    uploadBtn1.style.display ="none";
});


file1.addEventListener('change', function(){
    const choosedFile1 = this.files[0];
    if (choosedFile1){
        const reader1 = new FileReader(); 
        reader1.addEventListener('load', function(){
            img1.setAttribute('src',reader1.result);
        });
        reader1.readAsDataURL(choosedFile1);
    }
});