using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.ClassesEMetodos
{
    class CalculadoraEstatica
    {
        //Acessa o método por meio de uma instância (objeto) da classe -> segue exemplo 1
        public double Somar( double a, double b )
        {
            return a + b;
        }

        //Acessa o método diretamente pela classe -> segue exemplo 2
        public static double Multiplicar( double a, double b )
        {
            return a * b;
        }
    }
    internal class MetodosEstaticos
    {
        public static void Executar()
        {
            //exemplo 1
            var calc = new CalculadoraEstatica();
            Console.WriteLine($"O resultado da soma é: {calc}");

            //exemplo 2
            var resultado = CalculadoraEstatica.Multiplicar(2, 6);
            Console.WriteLine($"O resultado da multiplicacao é: {resultado}");
        }
    }
}
