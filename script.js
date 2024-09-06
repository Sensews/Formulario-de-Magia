document.addEventListener("DOMContentLoaded", () => {
    const selectCirculo = document.getElementById("circulo");
    const selectDivisao = document.getElementById("divisao");
    const selectAlcance = document.getElementById("alcance");
    const selectExecucao = document.getElementById("execucao");
    const selectDuracao = document.getElementById("duracao");
    const infoCirculo = document.getElementById("info-circulo");
    const infoDivisao = document.getElementById("info-divisao");
    const infoAlcance = document.getElementById("info-alcance");
    const infoExecucao = document.getElementById("info-execucao");
    const infoDuracao = document.getElementById("info-duracao");

    const infoCirculos = {
        "1°": "Tem um custo de 2 PE e o dano recomendado é de 2d6, porém caso a magia tenha efeitos adicionais é recomendado dar entre 2d4 - 1d6 de dano",
        "2°": "Tem um custo de 4 PE e o dano recomendado é de 2d8, porém caso a magia tenha efeitos adicionais é recomendado dar entre 2d6 - 2d4 de dano",
        "3°": "Tem um custo de 6 PE e o dano recomendado é de 4d8, porém caso a magia tenha efeitos adicionais é recomendado dar entre 2d8 - 2d6 de dano",
        "4°": "Tem um custo de 10 PE e o dano recomendado é de 5d10, porém caso a magia tenha efeitos adicionais é recomendado dar entre 4d8 - 2d8 de dano",
        "5°": "Tem um custo de 16 PE e o dano recomendado é de 8d8, porém caso a magia tenha efeitos adicionais é recomendado dar entre 5d10 - 4d8 de dano",
        "6°": "Tem um custo de 26 PE e o dano recomendado é de 10d8, porém caso a magia tenha efeitos adicionais é recomendado dar entre 8d8 - 5d10 de dano",
    };

    const infoDivisoes = {
        "Breu": "Magias de Breu é ligada aos ciclos, desde a vida e a morte, passado presente ou futuro, etc... O dano mais comum desse tipo é dano de Maldição.",
        "Arcano": "Magias Arcanas estão ligadas aos astros, os sonhos e a coletividade, etc... O dano mais comum desse tipo é dano Arcano.",
        "Criação": "Magias de Criação estão ligadas aos materiais do mundo, a criatividade e a vida moldavel em suas mãos, etc... O dano mais comum desse tipo é dano de Criação, Danos Físicos e dano Ígneo.",
        "Sanctum": "Magias de Sanctum estão ligadas aos Deuses, aos pactos e a velha e boa fé, etc... O dano mais comum desse tipo é dano Santo e Ígneo.",
        "Naturae": "Magias de Naturae estão ligadas aos elementos primarios e a propria natureza desde o Fogo, Água, Ar e Terra, etc... O dano mais comum desse tipo é dano de Naturae, Igíneo, Ácido e Danos Físicos.",
        "Evolução": "Magias de Evolução estão ligadas ao aprimoramento, tanto físico, mental e material, etc... O dano mais comum desse tipo é dano de Evolução e Danos Físicos."
    };

    const infoAlcances = {
        "Pessoal": "A magia afeta apenas o próprio conjurador.",
        "Toque": "O conjurador precisa tocar fisicamente o alvo.",
        "Curto": "Atinge alvos até 9 metros (6 quadrados em um mapa).",
        "Médio": "Atinge alvos até 18 metros (12 quadrados em um mapa).",
        "Longo": "Atinge alvos até 36 metros (24 quadrados em um mapa).",
        "Extremo": "Atinge alvos até 90 metros (60 quadrados em um mapa).",
        "Ilimitado": "Atinge qualquer alvo, independentemente da distância."
    };

    const infoExecucoes = {
        "Ação Livre": "A magia requer uma ação livre para ser conjurada, A mesma magia pode ser usada apenas uma vez como ação livre por turno.",
        "Ação Bônus": "A magia requer uma ação bônus para ser conjurada.",
        "Ação de Reação": "A magia requer uma ação de reação para ser conjurada. Normalmente magias com essa execução são utilizadas quando você sofre um ataque.",
        "Ação de Movimento": "A magia requer uma ação de movimento para ser conjurada. Ao usar uma magia com ação de movimento você não pode mais se deslocar com sua ação de movimento.",
        "Ação Padrão": "A magia requer uma ação padrão para ser conjurada.",
        "Ação Completa": "A magia requer tanto uma ação padrão, de movimento e bônus para ser conjurada."
    };

    const infoDuracoes = {
        "Instantânea": "O efeito aparece e se dissipa logo após.",
        "Cena": "Dura uma cena inteira.",
        "Sustentada": "Requer concentração contínua do conjurador, durando uma quantidade x de turnos, horas ou dias.",
        "Sustendada durante a Cena": "Requer concentração contínua do conjurador, duranto a cena toda.",
        "Definida": "Tem uma duração específica estabelecida.",
        "Descarregar": "Dura até ser ativada ou descarregada.",
        "Especial": "A magia dura até uma condição específica acontecer."
    };

    function updateInfo(selectElement, infoDiv, infoObject) {
        const value = selectElement.value;
        infoDiv.innerHTML = infoObject[value] || "Selecione uma opção para ver mais informações.";
    }

    selectCirculo.addEventListener("change", () => {
        updateInfo(selectCirculo, infoCirculo, infoCirculos);
    });

    selectDivisao.addEventListener("change", () => {
        updateInfo(selectDivisao, infoDivisao, infoDivisoes);
    });

    selectAlcance.addEventListener("change", () => {
        updateInfo(selectAlcance, infoAlcance, infoAlcances);
    });

    selectExecucao.addEventListener("change", () => {
        updateInfo(selectExecucao, infoExecucao, infoExecucoes);
    });

    selectDuracao.addEventListener("change", () => {
        updateInfo(selectDuracao, infoDuracao, infoDuracoes);
    });
});