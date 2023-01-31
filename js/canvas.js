/* affichafge de l'image*/ */
function showImage(idCanvas, idImage) {
    // récup. de l'élément <img> servant pour l'affichage
    const oImg = document.getElementById(idImage);
    // récup. de l'élément <canvas>
    const canvas = document.getElementById(idCanvas);
    // récup. des données de l'image du <canvas>
    const dataImage = canvas.toDataURL("image/png");
    // affectation des données à l'attribut src de l'élément <img>
    oImg.src = dataImage;
}

/*Impression de l'image */ */
function printImage(idCanvas) {
    // récup. de l'élément <canvas>
    const canvas = document.getElementById(idCanvas);
    // récup. des données de l'image du <canvas>
    const dataImage = canvas.toDataURL("image/png");
    // ouverture d'une nouvelle fenêtre
    const fen = window.open();
    // ouverture du document pour écriture
    fen.document.open();
    // insére un élément "<img> avec l'attribut src contenant les données de l'image
    fen.document.write("<img src='" + dataImage + "'>");
    // fermeture du document
    fen.document.close();
    // lance l'impression dès que chargé
    fen.onload = setTimeout(function() {
        fen.print();
        fen.close();
    }, 100);
}

/*Enregistrement de l'image*/ */
function saveImage(idCanvas, nomFichier) {
    // nom du fichier pour l'enregistrement
    const nomFile = nomFichier || "image.png";
    // récup. de l'élément <canvas>
    const canvas = document.getElementById(idCanvas);
    let dataImage;
    // pour IE et Edge c'est simple !!!
    // https://technet.microsoft.com/en-us/windows/hh771732(v=vs.60)
    if (canvas.msToBlob) {
      // crée un objet blob contenant le dessin du canvas
      dataImage = canvas.msToBlob();
      // affiche l'invite d'enregistrement
      window.navigator.msSaveBlob(dataImage, nomFile);
    }
    else {
      // création d'un lien HTML5 download
      const lien = document.createElement("A");
      // récup. des data de l'image
      dataImage = canvas.toDataURL("image/png");
      // affectation d'un nom à l'image
      lien.download = nomFile;
      // modifie le type de données
      dataImage = dataImage.replace("image/png", "image/octet-stream");
      // affectation de l'adresse
      lien.href = dataImage;
      // ajout de l'élément
      document.body.appendChild(lien);
      // simulation du click
      lien.click();
      // suppression de l'élément devenu inutile
      document.body.removeChild(lien);
    }
}