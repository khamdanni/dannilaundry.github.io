const toggle = document.querySelector('.toggle input');
const menu = document.querySelector('nav ul');

toggle.addEventListener('click', function() {
    menu.classList.toggle('slide');
});



const content = document.querySelector('.kotak');
const date = document.getElementById('hasil');
const jumlah = document.getElementById('jumlah');

function tombol() {
    content.style.backgroundColor = "red";

}



function waktu() {
    date.innerHTML = Date();
}

function jumlahkan() {
    var a1 = document.getElementById("angka1").value;
    var a2 = document.getElementById("angka2").value;
    jumlah.innerHTML = (parseInt(a1) + parseInt(a2));
    // alert(parseInt(a1) + parseInt(a2));
}