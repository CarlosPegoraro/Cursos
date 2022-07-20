#include <iostream>
using namespace std;

int main()
{
   int w;
   int x;
   int y;
   int z;
   
   cout << "Descubra a senha(dica: pizzaria), digite um valor para cada campo!" << endl;
   cout << "Escolha um valor(1 a 10): ";
   cin >> w;
   cout << "Escolha um valor(1 a 10): ";
   cin >> x;
   cout << "Escolha um valor(1 a 10): ";
   cin >> y;
   cout << "Escolha um valor(1 a 10): ";
   cin >> x;
   while (w != 1)
   {
      cout << "parece que voce errou o primeiro numero, tente novamente: " << endl;
      cout << "Escolha um valor(1 a 10): ";
	  cin >> w;
	  cout << "Voce: escolheu o numero " << w << endl;
      // not a numeric character, probably
      // clear the failure and pull off the non-numeric character
      if (cin.fail())
      {
         cin.clear();
         char c;
         cin >> c;
      }
   }
    while (x != 0 )
	{
		if (w == 1)
		{
			cout << "Acertou 1, continue com o proximo" << endl << endl;
		}
	  if (x != 0)
	  {
	  	cout << "parece que voce errou o segundo numero, tente novamente: " << endl;
	   } 
      cout << "Escolha um valor(1 a 10): ";
	  cin >> x;
	  cout << "Voce: escolheu o numero " << x << endl;
      // not a numeric character, probably
      // clear the failure and pull off the non-numeric character
      if (cin.fail())
      {
         cin.clear();
         char c;
         cin >> c;
      }
	}
	while (y != 8 )
	{
		if (w == 1)
		{
			cout << "Acertou 2, continue com o proximo" << endl << endl;
		}
   	  if (y != 8)
	  {
	  	cout << "parece que voce errou o terceiro numero, tente novamente: " << endl;
	   } 
      cout << "Escolha um valor(1 a 10): ";
	  cin >> y;
	  cout << "Voce: escolheu o numero " << y << endl;
      // not a numeric character, probably
      // clear the failure and pull off the non-numeric character
      if (cin.fail())
      {
         cin.clear();
         char c;
         cin >> c;
      }
	}
	while (z != 5 )
	{
		if (w == 1)
		{
			cout << "Acertou 3, continue com o proximo" << endl << endl;
		}
   	  if (z != 5)
	  {
	  	cout << "parece que voce errou o quarto numero, tente novamente: " << endl;
	   } 
      cout << "Escolha um valor(1 a 10): ";
	  cin >> z;
	  cout << "Voce: escolheu o numero " << z << endl;
      // not a numeric character, probably
      // clear the failure and pull off the non-numeric character
      if (cin.fail())
      {
         cin.clear();
         char c;
         cin >> c;
      }
      if (z == 5)
      {
      	cout << "Voce acertou a senha, senha: 1085!" << endl;
	  }
	}
	
	int num1 = 5;
	int num2 = 10;
	double conta = num1 * num2;
	cout << conta << endl;
   
}