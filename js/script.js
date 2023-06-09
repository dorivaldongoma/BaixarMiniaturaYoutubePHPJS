// Declaração e inicialização das variáveis
const campoUrl = document.querySelector(".campo input"),
    visualizacaoArea = document.querySelector(".area-de-visualizacao"),
    imgMiniatura = visualizacaoArea.querySelector(".miniatura"),
    entradaOculta = document.querySelector(".entrada-oculta"),
    botao = document.querySelector(".botao-baixar");

// O onkeyupevento ocorre quando o usuário cola o link no campo url
campoUrl.onkeyup = ()=>{
    let imgUrl = campoUrl.value;
    // Da um display: block na área de vizualização da miniatura
    visualizacaoArea.classList.add("activo");
    botao.style.pointerEvents = "auto";
    // Verifica se o link é válido e apresenta a miniatura o atribuindo à tag img.miniatura
    if(imgUrl.indexOf("https://www.youtube.com/watch?v=") !== -1){
        let vidId = imgUrl.split('v=')[1].substring(0, 11);
        imgMiniatura.src = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
    }else if(imgUrl.indexOf("https://youtu.be/") !== -1){
        let vidId = imgUrl.split('be/')[1].substring(0, 11);
        imgMiniatura.src = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
    }else if(imgUrl.match(/\.(jpe?g|png|gif|bmp|webp)$/i)){
        imgMiniatura.src = imgUrl;
    }else{
        // Se não, ele oculta a apresentação
        imgMiniatura.src = "";
        botao.style.pointerEvents = "none";
        visualizacaoArea.classList.remove("activo");
    }
    // Atribui o link ao campo oculto responsável pela busca e cópia da miniatura
    entradaOculta.value = imgMiniatura.src;
}