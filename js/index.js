particlesJS.load('particles-js', 'data/particlesjs-config.json', function (){
    console.log('particles.js loaded - callback');
});

function setCardTitle(id){
    const iframe = document.getElementById(toString(id));
    const card = iframe.parentElement;
    const p = card.getElementById('p-' + id);
    alert("p-" + id);
    p.innerText = iframe.contentWindow.document.title;
}