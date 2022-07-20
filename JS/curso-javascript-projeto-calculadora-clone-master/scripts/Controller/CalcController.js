class CalcController {


    constructor() {

        this._displayCalcEl = document.querySelector("#display");
        this._dateEl = document.querySelector("#data");
        this._timeEl = document.querySelector("#hora");
        this.initialize();

    }

    initialize () {

        displayCalcEl.innerHTML = "4585";
        dateEl.innerHTML = "21/12/2022";
        timeEl.innerHTML = "12:35:56";

    }

    get displayCalcEL () {
        return this._displayCalcEl.innerHTML;
    }

    set displayCalcEl(value) {
        this._displayCalcEl.innerHTML = value;
    }

    get dateEl() {
        return this._dateEl.innerHTML;
    }

    set dateEl(value) {
        this._dateEl.innerHTML = value;
    }

    get timeEl() {
        return this._timeEl.innerHTML;
    }

    set timeEl(value) {
        this._timeEl.innerHTML = value;
    }
}