using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.MetodosFuncoes
{
    delegate double Operacao(double x, double y);
    
    internal class MetodoLambda
    {
        delegate double Soma( double a, double b );
        delegate void ImprimirConta( double a, double b );
        public static void Executar()
        {
            Action algoNoConsole = () =>
            {
                Console.WriteLine("Lambda com C#!");
            };

            algoNoConsole();

            Func<int> jogarDado = () =>
            {
                Random random = new Random();
                return random.Next(1, 7);
            };

            Console.WriteLine(jogarDado());

            Func<int, string> conversorHex = (numero) =>
            {
                return numero.ToString("X");
            };

            //Delegate com lambda

            //O lambida cria uma funcao com assinatura definida
            Operacao sum = ( x, y ) => x + y;
            Operacao sub = ( x, y ) => x - y;
            Operacao mul = ( x, y ) => x * y;

            double MinhaSoma(double x, double y )
            {
                return x + y;
            }

            void MeuImprimirSoma(double a, double b )
            {
                Console.WriteLine(a + b);
            }

            Soma op1 = MinhaSoma;
        }
    }
}
