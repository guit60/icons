let $dialog;
let item_id;
window.onload = function() {

    let items = document.querySelectorAll('div.grid-item');
    let elem = document.querySelector('dialog .content');
    let html = "Voici une fenêtre d'information !<br /><p>Elle peut contenir tout type de balises HTML.</p><div>Remplir ce champ pour modifier le message de fermeture";
    
    //console.log(items);

    for (let item of items) {
        item.addEventListener("click", () => {
            console.log(item.id);
            item_id = item.id;
            getAjax('https://www.guillaumeroberge.com/icons/ajax/get_icon.ajax.php?id=' + item_id);
            //
            $dialog.show();
        });
    };

    $dialog = document.getElementById('mydialog');

    if (!('show' in $dialog)) { document.getElementById('promptCompat').className = 'no_dialog'; }
    $dialog.addEventListener('close', function() { console.log('Fermeture. ', this.returnValue); });

    function getAjax(url) {
        var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        xhr.open('GET', url);
        xhr.send();
        xhr.onload = function(e) {
            // Check if the request was a success
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                // Get and convert the responseText into JSON
                var response = JSON.parse(xhr.responseText);
                console.log(response);
                //
                //elem.innerHTML = item_id + " " + response.name;
                elem.innerHTML = '<canvas id="canvas" class="visuel"><img src="img/svg/' + response.file_name + '.svg"/></canvas><div class="texte"><h2 class="nom">' + response.name + '</h2></div>';
                const btnDownload = document.getElementById("btnSVG-download");
                btnDownload.onclick = function() {
                    saveImage("canvas");
                };
            }
        }
    }
};
                