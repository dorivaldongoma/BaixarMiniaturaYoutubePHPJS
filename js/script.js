const campoUrl = document.querySelector(".campo input"),
    visualizacaoArea = document.querySelector(".area-de-visualizacao"),
    imgMiniatura = visualizacaoArea.querySelector(".miniatura"),
    entradaOculta = document.querySelector(".entrada-oculta"),
    botao = document.querySelector(".botao-baixar");

campoUrl.onkeyup = ()=>{
    let imgUrl = campoUrl.value;
    visualizacaoArea.classList.add("active");
    botao.style.pointerEvents = "auto";
    if(imgUrl.indexOf("https://www.youtube.com/watch?v=") !== -1){
        let vidId = imgUrl.split('v=')[1].substring(0, 11);
        imgMiniatura.src = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
    }else if(imgUrl.indexOf("https://youtu.be/") !== -1){
        let vidId = imgUrl.split('be/')[1].substring(0, 11);
        imgMiniatura.src = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
    }else if(imgUrl.match(/\.(jpe?g|png|gif|bmp|webp)$/i)){
        imgMiniatura.src = imgUrl;
    }else{
        imgMiniatura.src = "";
        botao.style.pointerEvents = "none";
        visualizacaoArea.classList.remove("active");
    }
    entradaOculta.value = imgMiniatura.src;
}