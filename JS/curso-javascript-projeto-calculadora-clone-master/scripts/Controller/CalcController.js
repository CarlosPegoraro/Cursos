class CalcController {

    constructor() {
        this._operation = [];
        this.locale = "pt-BR";
        this._displayCalcEl = document.querySelector("#display");
        //funcao querySelector = pega seleciona um item por meio de uma classe ou id css
        this._dateEl = document.querySelector("#data");
        this._timeEl = document.querySelector("#hora");
        this._currentDate;
        this.initialize();
    }
    //--------------------------------------------------------------------------
    initialize() {
        this.setDisplayDateTime()
        setInterval(() => {
            //funcao setInterval = define um intervalo
            this.setDisplayDateTime();
        }, 1000);
        this.initButtonsEvents();
    }
    //--------------------------------------------------------------------------
    //Funcoes Primordiais
    addEventListenerAll(element, events, fnc) {
        events.split(' ').forEach(event => {
            //funcao split = separa os itens de uma string em um array
            element.addEventListener(event, fnc, false);
        });
    }
    //--------------------------------------------------------------------------
    //Funcoes dos Botoes
    //ac
    clearAll() {
        this._operation = [];
    }
    //--------------------------------------------------------------------------
    //ce
    clearEntry() {
        this._operation.pop();
        //funcao pop = apaga o ultimo elemento de um array
    }
    //--------------------------------------------------------------------------
    //testa se o ultimo valor eh um operador
    isOperator(value) {
        return (['+', '-', '/', '*', '%'].indexOf(value) > -1);
            //funcao indexOf = procura se o valor indicado existe dentro do array que chamou a funcao
                //ele retorna o index onde esta aquela informacao
    }
    //--------------------------------------------------------------------------
    //envia o resultado da operacao para o ultimo item do array
    pushOperation(value) {
        this._operation.push(value);
        if(this._operation.length > 3) {
            this.calc();
        }
    }
    //--------------------------------------------------------------------------
    //Calcula o valor entre os 3 primeiros itens do array, 1 numero/1 operador/1 numero
    calc() {
        let last = this._operation.pop();
        //Funcao pop = retira  o ultimo item de um array
        let result = eval(this._operation.join(""));
        this._operation = [result, last];
        this.setLastNumberToDisplay();
    }
    //--------------------------------------------------------------------------
    //muda o valor do ultimo index do array por um valor
    setLastOperation(value) {
        this._operation[this._operation.length - 1] = value;
    }
    //--------------------------------------------------------------------------
    getLastOperation() {
        return this._operation[this._operation.length - 1];
    }
    //--------------------------------------------------------------------------
    //Mostra os numeros no display
    setLastNumberToDisplay() {
        let lastNumber;
        for(let i = this._operation.length - 1;i >=0;i--) {
            if(!this.isOperator(this._operation[i])) {
                lastNumber = this._operation[i];
                break;
            }
        }
        this.displayCalcEl = lastNumber;
    }
    //--------------------------------------------------------------------------
    addOperation(value) {
        //Novo valor no array
        if(isNaN(this.getLastOperation())) {
            //Ultimo valor salvo no array
            //string
            if(this.isOperator(value)) {
                //troca o operador
                this.setLastOperation(value);
            } else if(isNaN(value)){
                //funcao isNaN = is not a number
                //Outro valor
                console.log('outra coisa', value);
            } else {
                this.pushOperation(value)
                //funcao push = empurrar/coloca o novo valor na ultima posicao
                this.setLastNumberToDisplay();
            }
        } else {
            //number
            if (this.isOperator(value)) {
                this.pushOperation(value);
            } else {
                let newValue = this.getLastOperation().toString() + value.toString()
                //funcao toString = transforma um valor numerico em um valor string
                this.setLastOperation(parseInt(newValue));
                //Atualizar o display
                this.setLastNumberToDisplay();
            }
        }
    }

    //--------------------------------------------------------------------------
    setError() {
        this.displayCalcEl = "Error";
    }
    //--------------------------------------------------------------------------
    //Executa cada uns dos botoes
    execBtn(value) {
        switch (value) {

            case 'ac':
                this.clearAll();
                break;

            case 'ce':
                this.clearEntry();
                break;

            case 'soma':
                this.addOperation('+');
                break;

            case 'subtracao':
                this.addOperation('-');
                break;

            case 'divisao':
                this.addOperation('/');
                break;

            case 'multiplicacao':
                this.addOperation('*');
                break;

            case 'porcento':
                this.addOperation('%');
                break;

            case 'igual':
                break;

            case '0':
            case '1':
            case '2':
            case '3':
            case '4':
            case '5':
            case '6':
            case '7':
            case '8':
            case '9':
                this.addOperation(parseInt(value));
                break;

            case 'ponto':
                this.addOperation('.');
                break;

            default:
                this.setError();
                break;
        }
    }
    //--------------------------------------------------------------------------
    //Faz com que os botoes sejam clicaveis
    initButtonsEvents() {
        let buttons = document.querySelectorAll("#buttons > g, #parts > g");
        //querySelectorAll = define varios itens por meio de id ou class
        buttons.forEach((btn, index) => {
            this.addEventListenerAll(btn, 'click drag', e => {

                let textBtn = btn.className.baseVal.replace("btn-", "")
                this.execBtn(textBtn);
            });


            this.addEventListenerAll(btn, 'mouseover mouseup mousedown', e => {
                btn.style.cursor = "pointer";
            });


        });
    }

    //--------------------------------------------------------------------------
    //Mostra a data e hora no display
    setDisplayDateTime() {
        this.displayDate = this.currentDate.toLocaleDateString(this.locale, {
            //pega os dados de um dia baseado em sua localizacao
            day: "2-digit",
            month: "long",
            year: "numeric"});
            //especifica os valores retornados
        this.displayTime = this.currentDate.toLocaleTimeString("pt-BR");
        //pe os dados de um horario
    }
    //--------------------------------------------------------------------------
    //display do numero
    //--------------------------------------------------------------------------
    set displayCalcEl(value) {
        this._displayCalcEl.innerHTML = value;
    }
    //--------------------------------------------------------------------------
    set displayDate(value) {
        this._dateEl.innerHTML = value;
    }
    //--------------------------------------------------------------------------
    set displayTime(value) {
        return this._timeEl.innerHTML = value;
    }
    //informacoes do dia
    get currentDate() {
        return new Date();
    }
}