#include <iostream>
using namespace std;

int main() {

    int n1, n2;

    n1 = 0;
    n2 = 10;

    std::cout << n1 << std::endl; //Imprime o valor 0

    //Forma longa: n1 = n1+1;
    //Forma curta: n1 += 1;
    //Forma reduzida: n1++;
    n1++;
    std::cout << n1 << std::endl; //Imprime o valor 1

    return 0;
}
