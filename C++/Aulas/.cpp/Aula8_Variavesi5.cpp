#include <iostream>

using namespace std;

int main() {

    int num = 10;

    std::cout << num << std::endl;

    //num = num * -1
    //-num: nao salva na memoria
    num=-num;

    std::cout << num << std::endl;


    return 0;
}