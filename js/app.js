const GIGANTOMETRO = (() => {

    const contaSocios = async () => {
        const api = await fetch('https://api.sociogigante.com/v2/public/counter')
            .then((response) => {
                return response.json();
            })
            .then((result) => {
                const total = result.res;
                document.querySelector('.total').textContent = total.format();
            })
            .catch((error) => console.log(error));
    };

    const init = () => {

        // Carrega primeira contagem
        contaSocios();
        
        // Atualiza a cada 10 segundos
        setInterval(() => {
            let segundos = parseInt(document.querySelector('.segundos').textContent);
            if (segundos > 0) {
                document.querySelector('.segundos').textContent -= 1;
            } else {
                contaSocios();
                document.querySelector('.segundos').textContent = 10;
            }
            
        }, 1000);
    };

    Number.prototype.format = function() {
        return this.toString().split( /(?=(?:\d{3})+(?:\.|$))/g ).join( "." );
    }

    return {
        init
    };

})();

GIGANTOMETRO.init();