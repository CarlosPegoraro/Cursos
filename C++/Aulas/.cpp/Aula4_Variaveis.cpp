#include <iostream>

using namespace std;

int main() {
    
    //TIPO NOME;
    //TIPO NOME = VALOR;

    int vidas = 0; //Recebe numeros interios + ou -
    char letras = 'B'; //Recebe 1 letra, 'B'
    //char letras[20]; //recebe 20 letras
    double decimal = 5.2; //Recebe numeros decimais(mais casas), 2.55555555
    float decimal2 = 5.2; //Menos preciso que o double(menos casas), 2.5
    bool vivo = true; //Recebe um valor condicional, true(1) ou false(0)
    string nome = "Bruno"; //Recebe um texto, "Bruno"
    
    cout << "Digite o numero de vidas: ";
    cin >> vidas;
    std::cout << "Digite uma letra: " << std::endl;
    cin >> letras;
    std::cout << "Dinheiro: " << std::endl;
    cin >> decimal;
    std::cout << "Nome: " << std::endl;
    cin >> nome;
    std::cout << std::endl << "Vidas: " << vidas << std::endl;
    std::cout << "Letra: " << letras << std::endl;
    std::cout << "Dinheiro: " << decimal << std::endl;
    std::cout << "Vivo?: " << vivo << std::endl;
    std::cout << "Nome: " << nome << std::endl;

    return 0;
}