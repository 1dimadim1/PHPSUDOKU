window.onload = function () {

    var LastClick;

    Array.from(document.getElementsByTagName('td')).map(item => {
        item.onclick = function () {
            if ('rgb(255, 253, 208)' != this.style.backgroundColor) {
                LastClick = this;
                document.querySelector(".table2").style.visibility = "visible";
            }

        };
    });

    Array.from(document.getElementsByTagName('th')).map(item => {
        item.onclick = function () {
            LastClick.innerText = this.innerText;
            document.querySelector(".table2").style.visibility = "hidden";
            if (LastClick.innerText == 0) {
                LastClick.style.backgroundColor = 'rgb(255, 248, 220)';
            }
            else{
                LastClick.style.backgroundColor = 'rgb(242, 223, 147)';
            }
        };
    });

    var array = [];
    $('.button2').on('click', function () {
        $('tr', 'table.table1').each(function () {
            var str = "";
            $(this).find('td').each(function () {
                str = str + ($(this).html());
            });
            array.push(str);
        });
        console.log(array);
        $.ajax({
            type: "POST",
            url: "Check.php",
            data: {"array": array},
            success: function (data) {
                alert(data);
            }
        });
        array = []
    });
}

