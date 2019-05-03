window.onload = function() {
    var LastClick;
    Array.from(document.getElementsByTagName('td')).map(item => {
        item.onclick = function() {
            LastClick=this;
            document.querySelector(".table2").style.visibility = "visible";
        };
    });
    Array.from(document.getElementsByTagName('th')).map(item => {
        item.onclick = function() {
            LastClick.innerText=this.innerText;
            document.querySelector(".table2").style.visibility = "hidden";
        };
    });
}
