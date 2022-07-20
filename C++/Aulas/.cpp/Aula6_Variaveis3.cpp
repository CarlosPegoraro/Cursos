#include <iostream>
using namespace std;

#define inverter numero * (-1)

float n1, n2; //Variaveis globais

int main() {

    //Operadores Matematicos: + - * / % ()

    float n3, n4, numero; //Variaveis locais
    float rest, rest2;

    n1 = 1;
    n2 = 2;
    n3 = 5;
    n4 = 2;

    rest = n1/n2;

    cout << "Normal: " << rest << endl << endl;

    rest2 = n1/n2;
    numero = rest2;

    cout << "Invertida: " << inverter << endl << endl;

    return 0;
}
