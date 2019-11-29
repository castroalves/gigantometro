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
        contaSocios();
    };

    Number.prototype.format = function() {
        return this.toString().split( /(?=(?:\d{3})+(?:\.|$))/g ).join( "." );
    }

    return {
        init
    };

})();

GIGANTOMETRO.init();